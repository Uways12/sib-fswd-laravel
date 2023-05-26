<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namamhs = "Uways Qurni";
        $deskripsi = "Saya adalah Seorang Mahaisiswa Program Sudy Pendidikan Akuntansi di Universitas Banten Jaya.";
        $nama = [
            'Laptop',
            'Monitor',
            'Keyboard',
            'PC',
            'Mouse'
    ];


    return view ('tugaspert23.landing', compact('namamhs', 'deskripsi' ));
    return view ('master.product', compact('nama' ));

        
    }

    public function index2()
    {

    $kategori = [
        'Alat elektronik',
        'Kendaraan',
        'Fashion',
        'Alat Tulis Kantor',
        'Kebutuhan Pokok'
    ];

    $produk = [
        'Kabel',
        'Mobil Rush',
        'Honda Jazz',
        'Kemeja',
        'Celana',
        'Cecuer'
    ];

    $pengguna = [
        'Dita',
        'Riyan',
        'Mela',
        'Zani',
        'Boy',
        'Junot',
        'Ijal',
        'Nita'
    ];
    
    
    
    return view('tugaspert23.dashboard', compact('kategori', 'produk', 'pengguna'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}