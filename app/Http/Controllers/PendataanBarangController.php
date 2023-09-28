<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;

class PendataanBarangController extends Controller
{
    // Menampilkan daftar barang
    public function index()
    {
        $datas = Barang::all(); // Mengambil semua data barang
        $jenisBarang = JenisBarang::all(); // Mengambil semua data jenis barang

        return view('pendataan.home', compact(
            'datas',
            'jenisBarang'
        ));
    }

    // Menampilkan form untuk menambahkan barang baru
public function create()
{
    $datas = Barang::all(); // Menambahkan ini untuk memastikan variabel $datas tersedia di view
    $model = new Barang;
    $jenisBarang = JenisBarang::all();

    return view('pendataan.create', compact(
        'model',
        'jenisBarang',
        'datas' // Menambahkan $datas ke dalam compact
    ));
}


    // Menyimpan barang baru ke dalam database
    public function store(Request $request)
    {
        $model = new Barang;

        $model->nama = $request->nama;
        $model->tanggal_meninggal = date('Y-m-d', strtotime($request->tanggal_meninggal));
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->alamat = $request->alamat;
        $model->no_kartu_bpjs = $request->no_kartu_bpjs;

        $model->save(); // Menyimpan data barang baru ke database

        return redirect('/pendataan/jenis-barang'); // Mengalihkan kembali ke halaman daftar barang
    }

    // Menampilkan form edit untuk barang yang ada
    public function edit($id)
    {
        $model = Barang::find($id);
        $jenisBarang = JenisBarang::all();

        return view('pendataan.edit', compact(
            'model',
            'jenisBarang',
        ));
    }

    // Mengupdate barang yang sudah ada dalam database
    public function update(Request $request, $id)
    {
        $model = Barang::find($id);

        $model->nama = $request->nama;
        $model->tanggal_meninggal = date('Y-m-d', strtotime($request->tanggal_meninggal));
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->alamat = $request->alamat;
        $model->no_kartu_bpjs = $request->no_kartu_bpjs;

        $model->save(); // Menyimpan perubahan data barang ke database

        return redirect('/pendataan/jenis-barang'); // Mengalihkan kembali ke halaman daftar barang
    }

    // Menghapus barang dari database
    public function destroy($id)
    {
        $model = Barang::find($id);
        $model->delete(); // Menghapus data barang dari database

        return redirect('/pendataan/jenis-barang'); // Mengalihkan kembali ke halaman daftar barang
    }
}
