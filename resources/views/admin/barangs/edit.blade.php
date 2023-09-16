<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
      
  <section class="content">
    <div class="wrapper">
  
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/rem.png') }}" alt="AdminLTELogo" height="60" width="60">
      </div>
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-ite d-none d-sm-inline-block">
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
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
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
          <span class="brand-text font-weight-light">ADMIN GANTENG</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('dist/img/rem.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="" class="d-block">Miyamura Kun</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('barang.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                          Barang
                        </p>
                      </a>
                    </li>
              <li class="nav-item">
                <a href="pages/kanban.html" class="nav-link">
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
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Tambah Kendaraan</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard Admin</li>
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
                <form role="form" method="post" action="{{ route('barangs.update', $barang->id) }}" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nama_barang">Merk Kendaraan</label>
                      <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Input Nama Barang" value="{{ old('nama_barang', $barang->nama_barang) }}" required>
                      @error('nama_barang')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" class="form-control" id="keterangan" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" placeholder="Keterangan" required>{{ old('keterangan', $barang->keterangan) }}</textarea>
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
                      <input class="form-control" name="tgl_ditutup" id="tgl_ditutup" type="date" placeholder="Silahkan masukkan tanggal bayar ..." value="{{ old('tgl_ditutup', $barang->tgl_tutup) }}" required autofocus>
                      @error('tgl_ditutup')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                    <div class="form-group">
                      <label for="harga_awal">Harga Awal</label>
                      <input type="text" name="harga_awal" class="form-control" id="harga_awal" placeholder="Input Harga" value="{{ old('harga_awal', $barang->harga_awal) }}" required>
                      @error('harga_awal')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Input Gambar</label>
                      <input type="file" name="foto" id="exampleInputFile" value="{{ old('foto', $barang->foto) }}" required>
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
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>