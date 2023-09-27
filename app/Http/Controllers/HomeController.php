<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Barang::all();
        $jenisBarang = JenisBarang::all();

        return view('pendataan.home', compact('datas', 'jenisBarang'));
    }
}
