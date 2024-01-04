<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Session;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard');
    }
}
