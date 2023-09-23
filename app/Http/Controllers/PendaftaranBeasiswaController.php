<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Mahasiswa;
use App\Models\PendaftaranBeasiswa;
use Illuminate\Http\Request;

class PendaftaranBeasiswaController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'mahasiswa') {
            $mhs = Mahasiswa::where("user_id", auth()->user()->id)->first();
            $PendaftaranBeasiswa = PendaftaranBeasiswa::where("mahasiswa_id", $mhs->id)->with([
                "mahasiswa", "beasiswa"
            ])->orderBy("id", "desc")->get();
            return view('page.Beasiswa.show_pengajuan', compact('PendaftaranBeasiswa'));
        }
        $PendaftaranBeasiswa = PendaftaranBeasiswa::where("status", "Dalam Proses")
            ->with([
                "mahasiswa", "beasiswa"
            ])->orderBy("id", "desc")->get();
        return view('page.Beasiswa.show_pengajuan', compact('PendaftaranBeasiswa'));
    }
    public function getAccept()
    {
        $PendaftaranBeasiswa = PendaftaranBeasiswa::where("status", "Diterima")
            ->with([
                "mahasiswa", "beasiswa"
            ])->orderBy("id", "desc")->get();
        return view('page.Beasiswa.show_pengajuan', compact('PendaftaranBeasiswa'));
    }

    public function getReject()
    {
        $PendaftaranBeasiswa = PendaftaranBeasiswa::where("status", "Ditolak")
            ->with([
                "mahasiswa", "beasiswa"
            ])->orderBy("id", "desc")->get();
        return view('page.Beasiswa.show_pengajuan', compact('PendaftaranBeasiswa'));
    }

    public function formPengajuan()
    {
        $mahasiswaList = Mahasiswa::all();
        $beasiswaList = Beasiswa::where("status", "Aktif")->orderBy("id", "DESC")->get();
        return view('page.Beasiswa.form_pengajuan', compact("mahasiswaList", "beasiswaList"));
    }

    public function formPengajuanMhs()
    {
        $mahasiswaList = Mahasiswa::all();
        $beasiswaList = Beasiswa::where("status", "Aktif")->orderBy("id", "DESC")->get();
        return view('page.Beasiswa.form_pengajuan_mhs', compact("mahasiswaList", "beasiswaList"));
    }
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan melalui form
        $request->validate([
            'mahasiswa_id' => 'required|integer|exists:mahasiswa,id',
            'beasiswa_id' => 'required|integer|exists:beasiswa,id',
            'keterangan' => 'required|string',
            'dokumen' => 'required|file|mimes:pdf,jpg,jpeg,png', // Sesuaikan dengan tipe berkas yang diizinkan
        ]);

        // Proses penyimpanan data pengajuan beasiswa
        $pendaftaranBeasiswa = new PendaftaranBeasiswa();
        $pendaftaranBeasiswa->mahasiswa_id = $request->input('mahasiswa_id');
        $pendaftaranBeasiswa->beasiswa_id = $request->input('beasiswa_id');
        $pendaftaranBeasiswa->keterangan = $request->input('keterangan');

        if ($request->hasFile('dokumen')) {
            $dokumenFile = $request->file('dokumen');
            $dokumenName = $dokumenFile->getClientOriginalName();
            $dokumenFile->move(public_path('dokumen'), $dokumenName);
            $pendaftaranBeasiswa->dokument = 'dokumen/' . $dokumenName;
        }
        $pendaftaranBeasiswa->status = 'Dalam Proses';

        $pendaftaranBeasiswa->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('beasiswa.index')->with('success', 'Pengajuan Beasiswa berhasil disimpan.');
    }

    public function updateAcc(Request $request, $id)
    {
        $pendaftaranBeasiswa = PendaftaranBeasiswa::find($id);
        $pendaftaranBeasiswa->status = "Diterima";
        $pendaftaranBeasiswa->catatan = $request->catatan;
        $pendaftaranBeasiswa->save();
        return redirect()->route('beasiswa.index')->with('success', 'Update Berhasil');
    }
    public function updateRej(Request $request, $id)
    {
        $pendaftaranBeasiswa = PendaftaranBeasiswa::find($id);
        $pendaftaranBeasiswa->status = "Ditolak";
        $pendaftaranBeasiswa->catatan = $request->catatan;
        $pendaftaranBeasiswa->save();
        return redirect()->route('beasiswa.index')->with('success', 'Update Berhasil');
    }
}
