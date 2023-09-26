@extends('layouts.index')

@section('content')

    {{-- <a class="btn btn-info" href="{{ url('/pendataan/create') }}">Create</a> --}}
    <table class="table mt-3">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal meninggal</th>
              <th scope="col">jenis kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Kartu BPJS</th>
            </tr>
        </thead>
        <tbody>

        <?php $i=1?>
        @foreach($datas as $key=>$data)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->tanggal_meninggal }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_kartu_bpjs }}</td>
            {{-- @foreach($jenisBarang as $jb)
                @if ($data->jenis_barang === $jb)
                    <td>{{ $jb->jenis_barang}}</td>
                @endif
            @endforeach --}}
                <td><a class="btn btn-success" href="{{ url('/pendataan/'. $data->id .'/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('/pendataan/' . $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php $i++?>
        @endforeach
        </tbody>
    </table>

@endsection
