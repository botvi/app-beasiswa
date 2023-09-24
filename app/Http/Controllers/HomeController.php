<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Mahasiswa;
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
        $mahasiswa = Mahasiswa::where("user_id", auth()->user()->id)
            ->with("user")->first();
        return view('Page.profil.profil', ['user' => $user, "mahasiswa" => $mahasiswa]);
    }
}
