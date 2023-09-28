<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Judul Halaman Anda</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .navbar {
            background-color: #f8f9fa; /* Warna latar belakang navbar */
            border-bottom: 1px solid #dee2e6; /* Garis pembatas bawah navbar */
        }

        .navbar-nav .nav-link {
            color: #343a40 !important; /* Warna teks link */
            font-weight: bold; /* Ketebalan teks link */
            margin-right: 10px; /* Ruang antara link */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff !important; /* Warna teks link saat dihover */
        }

        .navbar-toggler-icon {
            background-color: #343a40; /* Warna ikon toggler */
        }

        .navbar-collapse {
            justify-content: flex-end; /* Posisi kanan untuk menu */
        }

        .navbar-brand {
            font-size: 24px; /* Ukuran teks brand */
            font-weight: bold; /* Ketebalan teks brand */
        }

        .btn-login {
            margin-left: 10px; /* Ruang antara tombol login dan navbar brand */
        }

        .btn-logout {
            background-color: #dc3545; /* Warna latar belakang tombol logout */
            color: #fff; /* Warna teks tombol logout */
        }

        .btn-logout:hover {
            background-color: #c82333; /* Warna latar belakang tombol logout saat dihover */
        }

        .container-content {
            margin-top: 50px; /* Ruang antara navbar dan konten */
            padding: 20px; /* Ruang di sekitar konten */
            background-color: #fff; /* Warna latar belakang konten */
            border: 1px solid #dee2e6; /* Garis pinggir konten */
            border-radius: 5px; /* Sudut bulat konten */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan pada konten */
        }
            .nav-link.active {
        border-bottom: 2px solid #007bff; /* Warna garis bawah aktif */
        color: #007bff !important; /* Warna teks aktif */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">BPJS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                        <a id="nav-beranda" class="nav-link" href="{{ url('/home') }}">Beranda</a>
                        <a id="nav-data" class="nav-link" href="{{ url('/pendataan/create') }}">Data Non-aktif kartu BPJS</a>
                        <a id="nav-informasi" class="nav-link" href="{{ url('/pendataan/jenis-barang') }}">Informasi Non-Aktif kartu BPJS</a>
                    @if(session('berhasil_login'))
                        <a class="btn btn-logout" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="btn btn-primary btn-login" href="{{ route('login') }}">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="container container-content">
        @yield('content')
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Tambahkan link ke file CSS Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Tambahkan link ke file JavaScript Bootstrap Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'mm-dd-yyyy' // Sesuaikan dengan format yang Anda inginkan
            }).datepicker('update', new Date());
        });
    $(document).ready(function () {
        var currentURL = window.location.href;

        // Memeriksa apakah URL sesuai dengan tautan navbar dan menambahkan kelas 'active' ke tautan yang sesuai.
        if (currentURL.includes("/home")) {
            $("#nav-beranda").addClass("active");
        } else if (currentURL.includes("/pendataan/create")) {
            $("#nav-data").addClass("active");
        } else if (currentURL.includes("/pendataan/jenis-barang")) {
            $("#nav-informasi").addClass("active");
        }

        // Fungsi ini menonaktifkan efek aktif dari tautan navbar yang lain.
        $(".nav-link").click(function () {
            $(".nav-link").removeClass("active");
        });
    });
</script>
<script>
    // Get the input field and table body
    var input = document.getElementById('search');
    var tableBody = document.querySelector('tbody');

    // Add an event listener to the input field
    input.addEventListener('input', function() {
        var filter = input.value.toLowerCase();
        var rows = tableBody.getElementsByTagName('tr');

        // Loop through all table rows
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var rowData = row.textContent.toLowerCase();

            // Check if the row data contains the filter text
            if (rowData.includes(filter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
</script>

</body>
</html>