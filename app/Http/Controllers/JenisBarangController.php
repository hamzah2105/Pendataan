<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    public function index()
    {
        $datas = Barang::all();
        $jenisBarang = JenisBarang::all();
        // $datas = JenisBarang::all();
        // return view('pendataan.jenis_barang.index', compact(
        //     'datas'
        // ));
        return view('pendataan.index', compact(
            'datas',
            'jenisBarang'
        ));
    }

    public function store(Request $request)
    {
        $model = new JenisBarang;
        $model->jenis_barang = $request->jenis_barang;
        $model->save();

        return redirect('pendataan/jenis-barang');

    }


    public function edit($id)
    {
        $model = JenisBarang::find($id);

        return view('pendataan.jenis_barang.edit', compact(
            'model',
        ));
    }


    public function update(Request $request, $id)
    {
        $model = JenisBarang::find($id);
        $model->jenis_barang = $request->jenis_barang;
        $model->save();
        return redirect('pendataan/jenis-barang');

    }


    public function destroy($id)
    {
        $model = JenisBarang::find($id);
        $model->delete();
        return redirect('pendataan/jenis-barang');
    }
}
