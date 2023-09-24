<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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


    public function edit($id)
    {
        $mahasiswa = Mahasiswa::where("id", $id)
            ->with("user")->first();
        return view('page.Mhs.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|max:100',
            'jenis_kelamin' => 'required|max:10',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'telepon' => 'required|max:15',
            'program_studi' => 'required|max:50',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric|between:0,4.00',
        ]);

        // Update the user record
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->user->update([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
        ]);

        // Check if a new password is provided and update it
        if ($request->has('password') && !empty($request->password)) {
            $mahasiswa->user->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }

        // Check if a new image file is provided and update it
        if ($request->hasFile('image')) {
            $brosurFile = $request->file('image');
            $brosurName = $brosurFile->getClientOriginalName();
            $brosurFile->move(public_path('user_images'), $brosurName);
            $user_images = 'user_images/' . $brosurName;
            $mahasiswa->user->update([
                'image' => $user_images,
            ]);
        }

        // Update the Mahasiswa model attributes
        $mahasiswa->update([
            'nim' => $request->input('nim'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'telepon' => $request->input('telepon'),
            'program_studi' => $request->input('program_studi'),
            'semester' => $request->input('semester'),
            'ipk' => $request->input('ipk'),
            'status' => $request->input('status'), // If you have a status field
        ]);
        if (auth()->user()->role == 'mahasiswa') {
            return redirect()->route('profil')->with('success', 'Data mahasiswa berhasil diperbarui.');
        }
        return redirect()->route('show_mhs')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        $mahasiswa->user->delete();

        return redirect()->route('show_mhs')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
