<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lelangku.id - Tempat Lelang Paling Nyaman</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-liberty-market.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body >
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="" class="logo">
                        <img src="{{ asset('assets/images/logo4.png') }}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('masyarakat.index') }}" class="active">Home</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Main Banner Area -->
  <div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="owl-carousel mb-5 owl-loaded owl-drag">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item" style="left: 150px ">
                  <div class="side-box">
                  <img src="{{ asset('images/'.$item->foto) }}" alt="" width="300" height="500">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Berikut adalah deskripsi :</p>
          <ul>
            <li>{{ $item->keterangan }}</li>
          </ul>
          <p></p>
          <h2 class="my-4">Peserta Lelang Harga Tertinggi</h2>
          <ul class="list-unstyled bidders">
            @foreach ($bidder as $bid)
            <li class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                {{-- <span class="mr-2">{{ $lelang->id }}.</span> --}}
                <div class="d-flex align-items-center">
                  {{ $bid ? $bid->name : $item->name }}
                  <span></span>
                </div>
              </div>
              <span class="price">@currency( $bid ? $bid->harga_akhir : $item->harga_awal )</span>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-4 order-lg-2">
          <div class="side-box mb-4" style="float: right;">
            <table>
                <h5 class="text-white">Input Penawaran</h5>
              <tbody>
                <tr>
                    <td>Nama Barang</td>
                    <td>: <strong class="text-white">{{ $item->nama_barang }}</strong></td>
                  </tr>
                <tr>
                  <td>Harga Buka</td>
                  <td>: <strong class="text-white">@currency( $item->harga_awal )</strong></td>
                </tr>
                <tr>
                  <td>Tawaran Terbesar</td>
                  <td>: <strong class="text-white">@currency( $lelang ? $lelang->harga_akhir : $item->harga_awal )</strong></td>
                </tr>
                <tr>
                  <td>Tanggal Tutup</td>
                  <td>: <strong class="text-white">{{ $item->tgl_ditutup }}</strong></td>
                </tr>
              </tbody>
            </table>
            @if(Carbon\Carbon::now() > $item->tgl_ditutup)
              <div class="alert alert-warning">
                  Pelelangan ini sudah selesai!
              </div>
             @else
          <form action="{{ route('masyarakat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" class="form-control mb-2" value="{{ auth()->user()->name }}" hidden>
            <input type="text" name="nama_barang" class="form-control mb-2" value="{{ $item->nama_barang }}" hidden>
            <input type="datetime-local" name="tgl_ditutup" class="form-control mb-2" value="{{ $item->tgl_ditutup }}" hidden>
            <div class="mb-4">
              @if ($lelang)
              <input type="number" min="{{ $lelang->harga_akhir }}" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Harga Tawaran Harus Melebihi Harga Lelang')" name="harga_akhir" class="form-control mb-2" placeholder="Harga Tawaran" required="">
              @else
              <input type="number" min="{{ $item->harga_awal }}" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Harga Tawaran Harus Melebihi Harga Lelang')" name="harga_awal" class="form-control mb-2" placeholder="Harga Tawaran" required="">
              @endif
              <button type="submit" class="btn btn-block btn-primary">Tawar</button>
            </div>
          </form>
          @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/tabs.js') }}"></script>
  <script src="{{ asset('assets/js/popup.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
