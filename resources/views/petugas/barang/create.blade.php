<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Petugas | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('petugas.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/logout" class="nav-link">Logout</a>
        </li>
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Petugas Ganteng</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('dist/img/tanjiro.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Mas Tanjiro</a>
          </div>
        </div>
  
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
            <li class="nav-header">Menu</li>
            <li class="nav-item">
              <a href="{{ route('barang.index') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Tambah Barang Lelang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('laporan.index') }}" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  History Lelang
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Petugas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="row">
      <div class="col-md-6">
          <div class="box box-primary">
              <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('barang.index') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nama_barang">Merk Kendaraan</label>
                      <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Input Nama Barang" value="{{ old('nama_barang') }}" required>
                      @error('nama_barang')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" class="form-control" id="keterangan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" placeholder="Keterangan" required>{{ old('keterangan') }}</textarea>
                      @error('keterangan')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>                  
                      <input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style=""></iframe>
                    </div>
                    <div class="form-group">
                      <label for="tgl_ditutup">Tanggal DItutup</label>
                      <input class="form-control" name="tgl_ditutup" id="tgl_ditutup" type="date" placeholder="Silahkan masukkan tanggal bayar ..." value="{{ old('tgl_ditutup') }}" required autofocus>
                      @error('tgl_ditutup')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                    <div class="form-group">
                      <label for="harga_awal">Harga Awal</label>
                      <input type="text" name="harga_awal" class="form-control" id="harga_awal" placeholder="Input Harga" value="{{ old('harga_awal') }}" required>
                      @error('harga_awal')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Input Gambar</label>
                      <input type="file" name="foto" id="exampleInputFile" value="{{ old('foto') }}" required>
                      @error('foto')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <p class="help-block">*Format JPG/PNG.</p>
                    </div>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
        </div>
    </div>    </section>
              </div>
          </div>
      </div>
            </div>   
           </section>
           
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
</body>
</html>