<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\OtpEmail;
use Mail;
use Validator;
use DB;
use Session;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('custom.custom-register');
    }

    public function userRegister(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|min:2',
            'email' => 'email|required',
            'password'=> 'required',
            'password_confirm' => 'required|same:password'
        ],
    [
        'name.required' => 'Kindly Enter Name',
        'email.required' => 'Kindly Enter Email',
        'password.required' => 'Kindly Enter Password',
    ]);

        $otp = rand(100000,999999);
        $expiry = time()+10*60;

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->otp = $otp;
        $user->otp_expiry = $expiry;
        $user->save();

        Session::put('user_id',$user->id);

        Mail::to($request->email)->send(new OtpEmail($otp));

        return redirect()->route('user.email.validate')->with('success','OTP has been sent to your email.');

    }

    public function otpValidate(){

        if(!Session::has('user_id')){
            return abort(404);
        }
        return view('custom.otp');

    }

    public function verifyOtp(Request $request){


        $otp = $request->otp;

        $user = User::find(Session::get("user_id"));

            if($otp==$user->otp){

                if($user->otp_expiry >= time()){
                    $user->is_otp_verified = '1';
                    $user->update();
                    Session::forget('user_id');
                    Auth::login($user);

                    return redirect("/admin/dashboard")->with("success","OTP has been verified.");


                }else{
                    return redirect()->back()->with("error","Expired OTP. Kindly enter valid OTP sent on Email.");
                }

            }else{

                return redirect()->back()->with("error","Invalid OTP. Kindly enter valid OTP sent on Email.");
            }

    }



    public function login()
    {
        return view('custom.custom-login');
    }

    public function userLogin(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
         ]);

    if($validator->passes()){

        $email = $request->email;
        $password = $request->password;
        $credentials=array("email"=>$request->email,"password"=>$request->password);
        $authSuccess=Auth::attempt($credentials);

        if($authSuccess)
        {
           return redirect('/admin/dashboard');
        }else
            {
                 Session::flash('error',"Invalid Username or password");
                 return redirect()->back();
            }
        }else
            {
             Session::flash('error',"Invalid Username or password");
             return redirect()->back();
            }
    }

}
