@section("menu","dashboard")
@section("submenu","siswa")
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Detail Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Kategori</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-head container-fluid" style="margin-top: 10px;">
                            <p>Data Detail Siswa</p>
                        </div> -->
                        <div class="from-horizontal">
                            <div class="panel-body">
                                <form method="post" action="/siswa/index">

                                {{ csrf_field() }}

                                    <div class="form-group">
                                        <label class="col-sm-2">NISN</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->nisn }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Nama</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->nm_siswa }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Kelas</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->kelas->nm_kelas ?? '-' }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->tmpt_lahir }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->tgl_lahir }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->jenkel }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2">Alamat</label>
                                        <div class="col-sm-10">
                                            <p>{{ $siswa->alamat }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offest-2 col-sm-10">
                                            <a href="/siswa" class="btn btn-warning">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>   
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('Template.script')
</body>
</html>
