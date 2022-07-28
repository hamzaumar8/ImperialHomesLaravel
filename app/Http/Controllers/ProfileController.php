<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
    public function companyverify()
    {
        return view('user.companyprofile');
    }
}