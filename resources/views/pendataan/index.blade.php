@extends('layouts.index')

@section('content')

<style>
    /* Tambahkan CSS untuk mengubah tampilan tabel */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #333;
        background-color: #fff;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        color: #333;
        background-color: rgba(0, 0, 0, 0.075);
    }

    /* Style for the search input */
    #search-container {
        text-align: right;
        margin-bottom: 10px;
    }

    #search {
        width: 200px; /* Adjust the width as needed */
    }
</style>

<!-- Judul Informasi -->
<h1 style="text-align: center;">Informasi</h1>

<!-- Search input on the right -->
<div id="search-container">
    <input type="text" id="search" placeholder="Search...">
</div>

<!-- Tabel Anda -->
<table class="table mt-3 table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal meninggal</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Kartu BPJS</th>
            <th scope="col">Actions</th>
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
            <td>
                <a class="btn btn-success" href="{{ url('/pendataan/'. $data->id .'/edit') }}">Edit</a>
                <form action="{{ url('/pendataan/' . $data->id) }}" method="post">
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        <?php $i++?>
        @endforeach
    </tbody>
</table>

@endsection
