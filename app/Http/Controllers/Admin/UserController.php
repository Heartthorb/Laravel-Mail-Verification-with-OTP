<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Validator;
use Session;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.list',compact('users'));
    }
}
