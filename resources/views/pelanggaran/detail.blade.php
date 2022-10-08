@section("menu","dashboard")
@section("submenu","pelanggaran")
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
            <h1 class="m-0">Data Detail Pelanggaran</h1>
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
        <title>Pelanggaran</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-head container-fluid" style="margin-top: 10px;">
                            <p>Data Detail Pelanggaran</p>
                        </div> -->
                        <div class="from-horizontal">
                            <div class="panel-body">
                                <form method="post" action="/pelanggaran/index">

                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-2">ID Pelanggaran</label>
                                        <div class="col-sm-10">
                                            <p>{{ $pelanggaran->id_pelanggaran }}</p>
                                        </div> 
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2">Nama Pelanggaran</label>
                                        <div class="col-sm-10">
                                            <p>{{ $pelanggaran->nm_pelanggaran }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2">Point</label>
                                        <div class="col-sm-10">
                                            <p>{{ $pelanggaran->point }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offest-2 col-sm-10">
                                            <a href="/pelanggaran" class="btn btn-warning">Data Pelanggran</a>
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
