@section("menu","dashboard")
@section("submenu","kelas")
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
    @if(session('Data dihapus'))
    <div class="alert alert-danger" role="alert">
      {{session('Data dihapus')}}
    </div>
    @endif
    @if(session('Data ditambah'))
    <div class="alert alert-info" role="alert">
      {{session('Data ditambah')}}
    </div>
    @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kelas</h1>
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
        <title>Kelas</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Data Kelas 
                </div> -->
                <div class="card-body">
                    <a href="/kelas/tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th style="text-align: center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $p)
                            <tr>
                                <td>{{ $p->nm_kelas }}</td>
                                <td style="text-align: center;">
                                    <!-- <a href="/kelas/edit/{{ $p->id_kelas }}" class="btn btn-warning" ><i class="fa fa-edit"></i></a> -->
                                    <!-- <a href="/kelas/detail/{{ $p->id_kelas }}" class="btn btn-success" ><i class="fa fa-eye"></i></a> -->
                                    <a href="/kelas/delete/{{ $p->id_kelas }}" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
