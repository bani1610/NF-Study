<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
{
    // Mengambil user pertama dari database sebagai dummy
    $user = \App\Models\User::first(); 

    // Jika database benar-benar kosong, buat objek kosong agar tidak error
    if (!$user) {
        $user = new \App\Models\User();
        $user->name = "Mahasiswa NF";
        $user->email = "dummy@nf.com";
    }

    return view('profil', compact('user'));
}

    public function update(Request $request)
{
    // GANTI Auth::user() dengan ini agar tidak null
    $user = \App\Models\User::first(); 

    // Jika database masih kosong, buat satu user otomatis
    if (!$user) {
        $user = \App\Models\User::create([
            'name' => 'Mahasiswa NF',
            'email' => 'student@nf.ac.id',
            'password' => bcrypt('password123')
        ]);
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'nim' => 'nullable|string|max:20',
        'prodi' => 'nullable|string|max:50',
        'angkatan' => 'nullable|string|max:4',
        'foto_profil' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $data = $request->only(['name', 'email', 'nim', 'prodi', 'angkatan']);

    // Logika upload foto
    if ($request->hasFile('foto_profil')) {
        $file = $request->file('foto_profil');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        
        // Pastikan folder public/uploads/profil sudah ada
        $file->move(public_path('uploads/profil'), $nama_file);
        $data['foto_profil'] = $nama_file;
    }

    $user->update($data);
    return redirect()->back()->with('success', 'Profil NF Student Hub berhasil diperbarui!');
}
}