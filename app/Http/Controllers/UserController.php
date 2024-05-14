<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        try {
            // Mengambil instance Firebase Auth dari FirebaseService
            $firebaseAuth = FirebaseService::getAuth();

            // Mendapatkan semua pengguna dari Firebase Authentication
            $users = $firebaseAuth->listUsers($defaultMaxResults = 1000);

            // Menyiapkan array untuk menyimpan data pengguna
            $userData = [];

            // Menampilkan data pengguna
            foreach ($users as $user) {
                // Menambahkan data pengguna ke dalam array
                $userData[] = [
                    'email' => $user->email,
                    'uid' => $user->uid,
                ];
            }

            // Mengembalikan data pengguna ke view
            return view('kelolaUser', compact('userData'));
        } catch (\Exception $e) {
            // Menangani kesalahan jika terjadi
            return "Error: " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            // Mengambil instance Firebase Auth dari FirebaseService
            $firebaseAuth = FirebaseService::getAuth();

            // Membuat pengguna baru di Firebase Authentication
            $user = $firebaseAuth->createUser([
                'email' => $request->email,
                'password' => $request->password,
            ]);

            // Menampilkan pesan sukses jika berhasil dan kembali ke halaman sebelumnya
            return redirect()->back()->with('success', 'User berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Menangani kesalahan jika terjadi
            return "Error: " . $e->getMessage();
        }
    }

    public function update(Request $request)
    {
        try {
            $firebaseAuth = FirebaseService::getAuth();

            $updateData = [
                'email' => $request->email,
            ];

            if (!empty($request->password)) {
                $updateData['password'] = $request->password;
            }

            $user = $firebaseAuth->updateUser($request->uid, $updateData);

            return redirect()->back()->with('success', 'User berhasil diupdate!');
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }


    public function destroy(Request $request)
    {
        try {
            // Mengambil instance Firebase Auth dari FirebaseService
            $firebaseAuth = FirebaseService::getAuth();

            // Menghapus pengguna di Firebase Authentication
            $firebaseAuth->deleteUser($request->uid);

            // Menampilkan pesan sukses jika berhasil dan kembali ke halaman kelolauser
            return redirect()->back()->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            // Menangani kesalahan jika terjadi
            return "Error: " . $e->getMessage();
        }
    }
}
