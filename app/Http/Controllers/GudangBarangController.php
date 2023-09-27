<?php

namespace App\Http\Controllers;

use App\Models\GudangBarang;
use Illuminate\Http\Request;

class GudangBarangController extends Controller
{
    public function index()
    {
        $data_barang = GudangBarang::all()->sortByDesc('id');
        $no = 0;
        $hitung = GudangBarang::count();
        $total_harga = GudangBarang::sum('harga');

        return view('gudang_barang.index', compact('data_barang', 'hitung', 'no', 'total_harga'));
    }
}