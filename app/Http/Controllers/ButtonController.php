<?php

// app/Http/Controllers/ButtonController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory; // Pastikan Anda sudah menginstal package ini

class ButtonController extends Controller
{
    public function update(Request $request)
    {
        $status = $request->input('status');
        
        // Mengirim data ke Firebase
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'app/public/credentials/firebase-credentials.json')
            ->createDatabase();
        $database = $firebase->getReference('value/button');
        
        $database->set($status);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('status', 'Button status updated successfully!');
    }
}



