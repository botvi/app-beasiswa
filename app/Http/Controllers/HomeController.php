<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view('Page.Dashboard.dashboard');
    }
    public function profil()
    {
        $user = Auth::user();
        return view('Page.profil.profil', ['user' => $user]);
    }
}
