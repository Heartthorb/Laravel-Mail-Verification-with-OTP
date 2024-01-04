<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Session;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.profile');
    }
    public function updateProfile(Request $request)
    {
        // dd($request->all());
        if($request->name){

            $user =  User::find(Auth::user()->id);
            $user->name=$request->name;

            $user->update();

             Session::flash('flash_message',"Profile update successfully");
            return redirect()->back();
    }
    }

    public function changePassword()
    {
        return view('admin.profile.password');
    }

    public function updatePassword(Request $request)
    {
        $hashedPassword = Auth::user()->password;
        //dd($hashedPassword);
       $validator = Validator::make($request->all(), [
            'oldpass' => 'required',
            'newpass' => 'required|same:cnfpass',
            'cnfpass' => 'required',
        ]);

         if ($validator->passes()) {

      if(!Hash::check($request->oldpass, $hashedPassword))
      {
        return back()->with('flash_message','Current Password Not Match');
      }
      $user = Auth::user();
      $user->password=Hash::make($request->newpass);
      $user->update();

      Session::flash('flash_message',"Password update successfully");
      Session::flash('alert-class','alert-info');
      return redirect()->back();

    }
    else{
        $errorString = implode("<br>",$validator->messages()->all());
            Session::flash('flash_message',$errorString);
            return redirect()->back();
        }
    }
}
