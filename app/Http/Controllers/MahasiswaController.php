<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;

class MahasiswaController extends Controller
{
    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::orderBy("id", "desc")->get();
        return view('page.Mhs.show_mhs', compact('mahasiswa'));
    }


    public function create()
    {
        return view('page.Mhs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa|max:10',
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required|max:10',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'telepon' => 'required|max:15',
            'program_studi' => 'required|max:50',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric|between:0,4.00',
        ]);

        $user =  User::create([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'role' => 'mahasiswa'
        ]);


        $mahasiswa = new Mahasiswa([
            'user_id' => $user->id,
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'telepon' => $request->input('telepon'),
            'program_studi' => $request->input('program_studi'),
            'semester' => $request->input('semester'),
            'ipk' => $request->input('ipk'),
            'status' => "Aktif",
        ]);

        $mahasiswa->save();

        return redirect()->route('show_mhs')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }


    public function edit(Mahasiswa $mahasiswa)
    {
        return view('page.Mhs.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,' . $mahasiswa->id,
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required|max:10',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'telepon' => 'required|max:15',
            'program_studi' => 'required|max:50',
            'fakultas' => 'required|max:50',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric|between:0,4.00',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('page.Mhs.show', $mahasiswa)->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        $mahasiswa->user->delete();

        return redirect()->route('page.Mhs.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
