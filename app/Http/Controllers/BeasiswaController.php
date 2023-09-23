<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function show()
    {
        $getbeasiswa = Beasiswa::orderBy("id", "DESC")
            ->with("pendaftaranBeasiswa")->get();
        return view('page.Beasiswa.show_beasiswa', compact("getbeasiswa"));
    }
    public function getId($id)
    {
        $getbeasiswa = Beasiswa::where("id", $id)
            ->with("pendaftaranBeasiswa")->first();
        return response()->json($getbeasiswa);
    }
    public function create()
    {
        return view('page.Beasiswa.create_beasiswa');
    }
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan melalui form
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'sumber_beasiswa' => 'required|string|max:255',
            'jumlah_penerima' => 'required|integer|min:1',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'brosur' => 'nullable|file|mimes:pdf,jpg,jpeg,png', // Sesuaikan dengan tipe berkas yang diizinkan
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        // Proses penyimpanan data beasiswa
        $beasiswa = new Beasiswa();
        $beasiswa->judul = $request->input('judul');
        $beasiswa->deskripsi = $request->input('deskripsi');
        $beasiswa->sumber_beasiswa = $request->input('sumber_beasiswa');
        $beasiswa->jumlah_penerima = $request->input('jumlah_penerima');
        $beasiswa->tanggal_mulai = $request->input('tanggal_mulai');
        $beasiswa->tanggal_selesai = $request->input('tanggal_selesai');
        $beasiswa->status = $request->input('status');

        // Mengunggah berkas brosur jika ada
        if ($request->hasFile('brosur')) {
            $brosurFile = $request->file('brosur');
            $brosurName = $brosurFile->getClientOriginalName();
            $brosurFile->move(public_path('brosur'), $brosurName);
            $beasiswa->brosur = 'brosur/' . $brosurName;
        }

        $beasiswa->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('beasiswa.show')->with('success', 'Data Beasiswa berhasil disimpan.');
    }
}
