@extends('layouts.index')

@section('content')

<style>
    /* Tambahkan CSS untuk mempercantik formulir */
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
    }
</style>

<div class="form-container">
    <form action="{{ url('pendataan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="tanggalMeninggal" class="form-label">Tanggal meninggal</label>
            <div id="datepicker" class="input-group date">
                <input type="text" class="form-control" id="tanggalMeninggal" name="tanggal_meninggal">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <div class="form-group">
            <label for="jenisKelamin" class="form-label">Jenis kelamin</label>
            <select name='jenis_kelamin' id="jenisKelamin" class="form-control">
                <option selected>Pilihan...</option>
                <option value='Laki-Laki'>Laki-Laki</option>
                <option value='Perempuan'>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="noKartuBPJS" class="form-label">No Kartu BPJS</label>
            <input type="text" class="form-control" id="noKartuBPJS" name="no_kartu_bpjs">
        </div>
        <input type="hidden" name="submit" value="data_barang">
        <button class="btn btn-info" type="submit">Tambah</button>
    </form>
</div>

@endsection
