<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    // public function about()
    // {
    //     return view('website.about');
    // }
    // public function kontak()
    // {
    //     return view('website.kontak');
    // }
    // public function visimisi()
    // {
    //     return view('website.visimisi');
    // }
   
}
