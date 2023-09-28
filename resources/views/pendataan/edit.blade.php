@extends('layouts.index')

@section('content')
<div id="dataBarang">
    <div class="card card-body">
        <form action="{{ url('/pendataan/' . $model->id) }}" method="POST">
            @csrf
            @method('PATCH') <!-- Use PATCH method for updating data -->

            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $model->nama }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="tanggalMeninggal" class="col-sm-2 col-form-label">Tanggal meninggal</label>
                <div class="col-sm-10">
                    <div id="datepicker" class="input-group date">
                        <input type="text" class="form-control" id="tanggalMeninggal" name="tanggal_meninggal" value="{{ $model->tanggal_meninggal }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" id="jenisKelamin" class="form-control">
                        <option value="Laki-Laki" {{ $model->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ $model->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $model->alamat }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="noKartuBPJS" class="col-sm-2 col-form-label">No Kartu BPJS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="noKartuBPJS" name="no_kartu_bpjs" value="{{ $model->no_kartu_bpjs }}">
                </div>
            </div>

            <input type="hidden" name="submit" value="data_barang">
            <button class="btn btn-info" type="submit">Update</button>
        </form>
    </div>
</div>

<style>
    /* Tambahkan CSS untuk mempercantik formulir edit */
    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .input-group-addon {
        padding: 10px;
    }

    .btn-info {
        background-color: #337ab7;
        color: #fff;
    }

    .btn-info:hover {
        background-color: #286090;
        color: #fff;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border: 1px solid #ccc;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
</style>
@endsection
