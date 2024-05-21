<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }

    


    public function show()
    {
        // tampilkan data dari tabel Raindrop
        $raindropRef = $this->database->getReference('Raindrops');
        $raindropData = $raindropRef->getChild('Cuaca')->getValue();
        $raindropDataCurahHujan = $raindropRef->getChild('Curah hujan')->getValue();

        // tampilkan data dari tabel Status
        $statusRef = $this->database->getReference('Status');
        $statusData = $statusRef->getChild('Status')->getValue();

        // tampilkan data dari tabel Ultrasonik
        $ultrasonicRef = $this->database->getReference('Ultrasonik');
        $ultrasonicData = $ultrasonicRef->getChild('Level Air')->getValue();

        // tampilkan data dari tabel Waterflow
        $waterflowRef = $this->database->getReference('Waterflow');
        $waterflowData = $waterflowRef->getChild('Debit Air')->getValue();

        return view('index', compact('raindropData', 'raindropDataCurahHujan', 'statusData', 'ultrasonicData', 'waterflowData'));
        
    }

    public function index()
    {
        $raindropRef = $this->database->getReference('Raindrop');
        $raindropData = $raindropRef->getValue();

        return response()->json($raindropData);
    }

    
}


