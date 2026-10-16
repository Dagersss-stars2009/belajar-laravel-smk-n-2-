<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda | Website Sekolah</title>


    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
</head>


<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('/frontend') }}" class="navbar-brand">
                    <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-2">
                    <span class="brand-text font-weight-light">SMKN 2 Kota Jambi</span>
                </a>


                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Buka navigasi">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse order-3" id="navbarMain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/frontend') }}" class="nav-link active">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/news') }}" class="nav-link">news</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/galerry') }}" class="nav-link">galerry</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link">about</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content-wrapper ml-0">
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0">Selamat datang di Daffa Store</h1>
                        </div>


                    </div>
                </div>
            </section>


            <section class="content">
                <div class="container">
                    <div class="callout callout-primary">
                        <h5><i class="fas fa-school mr-2"></i>Saya menjual berbagai alat-alat yang berguna </h5>
                        <p class="mb-0">Temukan berita, kegiatan, dan informasi terbaru dari sekolah dengan mudah.</p>
                    </div>




                </div>
            </section>
        </div>


        <footer class="main-footer ml-0">
            <div class="container text-center">
                <strong>&copy; {{ date('Y') }} SMKN 2 Kota Jambi.</strong> Semua hak dilindungi.
            </div>
        </footer>
    </div>


    <script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>
</body>


</html>
