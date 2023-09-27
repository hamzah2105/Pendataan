@extends('layouts.index')

@section('content')
    {{-- <div class="text-center">
        <p>
          <button class="btn btn-primary"  type="button" data-toggle="collapse" data-target="#dataBarangCollapse" aria-expanded="false" aria-controls="collapseExample">
            Form Tambah Data Barang
          </button>
          <button class="btn btn-primary"  type="button" data-toggle="collapse" data-target="#jenisBarangCollapse" aria-expanded="false" aria-controls="collapseExample">
            Form Tambah Jenis Barang
          </button>
        </p>
    </div> --}}

    <div class="" id="dataBarang">
        <div class="card card-body">
            <form action="{{ url('pendataan') }}" method="POST">
                @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggalMeninggal" class="col-sm-2 col-form-label">Tanggal meninggal</label>
                        <div class="col-sm-10">
                            <div id="datepicker" class="input-group date">
                                <input type="text" class="form-control" id="tanggalMeninggal" name="tanggal_meninggal">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="jenisKelamin" class="col-sm-2 col-form-label">jenis kelamin</label>
                      <div class="col-sm-10">
                          <select name='jenis_kelamin' id="jenisKelamin" class="">
                            <option selected>Pilihan...</option>
                            <option value='Laki-Laki'>Laki-Laki</option>
                            <option value='Perempuan'>Perempuan</option>
                          </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                          {{-- <select name='jenis_barang' id="jenisBarang" class="form-control">
                            <option selected>Pilihan...</option>
                            @foreach($jenisBarang as $key=>$value)
                                <option value="{{ $value->id }}">{{ $value->jenis_barang }}</option>
                            @endforeach
                          </select> --}}
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="noKartuBPJS" class="col-sm-2 col-form-label">no kartu BPJS</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="noKartuBPJS" name="no_kartu_bpjs">
                        </div>
                      </div>
                    </div>
                    </div>
                    <input type="hidden" name="submit" value="data_barang">
                    <button class="btn btn-info" type="submit">tambah</button>
            </form>
      </div>
    </div>

    {{-- <div class="collapse" id="jenisBarangCollapse" >
        <div class="card card-body">
            <form action="{{ url('pendataan/jenis-barang') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputJenisBarang" name="jenis_barang">
                    </div>
                </div>
                <input type="hidden" name="submit" value="jenis_barang">
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </div> --}}
@endsection
