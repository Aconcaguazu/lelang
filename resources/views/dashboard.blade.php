<!DOCTYPE html>
<html>
<head>
  <style>
    body {
        background-image: url('/images/bekgron1.jpg');
    }
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 50vh;
        
    }

    .text {
        font-size: 35px; /* Ukuran font yang lebih besar */
    } 

    .container p {
    }
</style>

    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/stylee.css" />
</head>
<body>
    <div id="booking" class="section">
        <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: transparent;">
            <div class="navbar">
                <img class="gambar" src="/images/tmpanjang.png">
            </div>
        </nav>

        <div class="container">
            <p class="text">Selamat Datang Di Web Pembayaran Spp</p>
                  @if (Auth::user()->role == 'masyarakat')
                      <a href="{{ route('masyarakat.index') }}" class="btn btn-outline-dark">Masuk Ke Dashboard masyarakat</a>
                 @endif
                  @if (Auth::user()->role == 'petugas')
                    <a href="{{ route('petugas.index') }}" class="btn btn-outline-dark">Masuk Ke Dashboard Petugas</a>
                  @endif
                  @if (Auth::user()->role == 'admin')
                    <a href="{{ route('admin.index') }}" class="btn btn-outline-dark">Masuk Ke Dashboard Admin</a>
                  @endif
                  
        </div>
    </div>
    @yield('content')

</body>
</html>