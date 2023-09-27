<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="collapse container navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-link text-dark font-weight-normal" href="{{ url('/home') }}">Beranda</a>
          <a class="nav-link text-dark font-weight-normal" href="{{ url('/pendataan/create') }}">Data Non-aktif kartu BPJS </a>
          <a class="nav-link text-dark font-weight-normal" href="{{ url('/pendataan/jenis-barang') }}">Informasi Non-Aktif kartu BPJS</a>
        </div>
      <div>
          @if(session('berhasil_login'))
              <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
          @else
              <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
          @endif
      </div>
      </div>
        {{--<ul class="nav">--}}
          {{--<li class="nav-item">--}}
                {{--<a class=" btn  btn-danger" href="{{ route('logout') }}">Logout</a>--}}
          {{--</li>--}}
        {{--</ul>--}}
    </nav>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="{{ url('/pendataan') }}">Pendataan</a>--}}
        {{--<a class="navbar-item" href="{{ url('/pendataan/jenis-barang') }}">Jenis Barang</a>--}}

    {{--</div>--}}
{{--</nav>--}}
<div class="container mt-5 p-3 bg-light shadow-sm">
    @yield('content')
</div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Tambahkan link ke file CSS Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Tambahkan link ke jQuery (pastikan jQuery sudah di-load sebelumnya) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
</script>

</body>
</html>
