<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function kontak()
    {
        return view('website.kontak');
    }
    public function about()
    {
        return view('website.about');
    }

    public function infobeasiswa()
    {
        $beasiswa = Beasiswa::where("status", "Aktif")->orderBy("id")->get();
        return view('website.infobeasiswa', compact('beasiswa'));
    }
}
