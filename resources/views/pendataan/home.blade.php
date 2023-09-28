@extends('layouts.index')

@section('content')

<style>
    h1, h2 {
        text-align: center;
        padding-top: 5%;
        color: black;
    }

    .card {
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
        box-shadow: 0 8px 18px 0;
        border-width: 0;
        background-color: none;
    }
</style>

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample" data-slide-to="1"></li>
        <li data-target="#carouselExample" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://picsum.photos/800/400?random=1" class="d-block w-100" alt="Carousel Image 1">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/800/400?random=2" class="d-block w-100" alt="Carousel Image 2">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/800/400?random=3" class="d-block w-100" alt="Carousel Image 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container">
    <h1>Welcome to BPJS</h1>
    <h2>Data Non-Aktif BPJS</h2>

    <!-- Place your data display logic here -->
    <!-- <div class="card" style="width:400px;">
        <img class="card-img-top" src="">
        <div class="card-body">
            <h6 class="card-title">Hello :)</h6>
            <h6><p class="card-text">Here you can view non-active BPJS data.</p></h6>
            <h6><a href="#">Visit us!</a></h6>
        </div>
    </div>
</div> -->

<!-- Table for Year and Total -->
<table class="table mt-3 table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tahun</th>
            <th scope="col">Bulan</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @php
            $yearTotalData = [];
            $yearIndex = 1;
            foreach($datas as $data) {
                $year = date('Y', strtotime($data->tanggal_meninggal));
                $yearTotalData[$year] = ($yearTotalData[$year] ?? 0) + 1;
            }
        @endphp

        @foreach($yearTotalData as $year => $total)
            <tr>
                <td>{{ $yearIndex++ }}</td>
                <td>{{ $year }}</td>
<td>
    <!-- Tambahkan tombol untuk menampilkan rincian bulan -->
    <button class="btn btn-link show-month-details" data-year="{{ $year }}">12 Bulan</button>
</td>

                <td>
                    <!-- Tambahkan total jumlah per tahun -->
                    @php
                        $totalPerYear = 0;
                        foreach ($datas as $data) {
                            $dataYear = date('Y', strtotime($data->tanggal_meninggal));
                            if ($dataYear == $year) {
                                $totalPerYear += 1;
                            }
                        }
                        echo $totalPerYear;
                    @endphp
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Table View Details -->
@foreach($yearTotalData as $year => $total)
    <table class="table mt-3 table-bordered month-details-table" data-year="{{ $year }}" style="display: none;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tahun</th>
                <th scope="col">Bulan</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php
                $monthTotalData = [];
                $monthIndex = 1;
                foreach($datas as $data) {
                    $dataYear = date('Y', strtotime($data->tanggal_meninggal));
                    $dataMonth = date('F', strtotime($data->tanggal_meninggal));
                    if ($dataYear == $year) {
                        $monthTotalData[$dataMonth] = ($monthTotalData[$dataMonth] ?? 0) + 1;
                    }
                }
            @endphp

            @foreach($monthTotalData as $month => $total)
                <tr>
                    <td>{{ $monthIndex++ }}</td>
                    <td>{{ $year }}</td>
                    <td>{{ $month }}</td>
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach

<script>
    // Fungsi untuk menampilkan atau menyembunyikan tabel berdasarkan tahun
    document.addEventListener('DOMContentLoaded', function () {
        const showMonthDetailsButtons = document.querySelectorAll('.show-month-details');

        showMonthDetailsButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const year = button.getAttribute('data-year');
                const table = document.querySelector(`.month-details-table[data-year="${year}"]`);
                const tables = document.querySelectorAll('.month-details-table');

                if (table.style.display === 'none') {
                    tables.forEach(function (t) {
                        t.style.display = 'none'; // Sembunyikan semua tabel rincian bulan terlebih dahulu
                    });
                    table.style.display = 'table'; // Kemudian tampilkan tabel rincian bulan untuk tahun yang dipilih
                } else {
                    table.style.display = 'none'; // Sematkan kembali tabel rincian bulan jika sudah terbuka
                }
            });
        });
    });
</script>


</div>

@endsection
