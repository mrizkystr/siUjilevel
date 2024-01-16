<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='admin')
            {
                return view('admin.admindashboard');

            }

            else if($usertype=='user')
            {
                return view('dashboard');

            }

            else if($usertype=='murid')
            {
                return view('dashboard');
            }

            else if($usertype=='guru')
            {
                return view('guru.gurudashboard');
            }

            else if($usertype=='kepsek')
            {
                return view('kepsek.kepsekdashboard');
            }

            else if($usertype=='tu')
            {
                return view('tu.tudashboard');
            }

            else
            {
                return redirect()->back();
            }
        }
    }
}
