@section("menu","dashboard")
@section("submenu","pengawas")
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pengawas</h1>
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
        <title>Pengawas</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Data Pengawas 
                </div> -->
                <div class="card-body">
                  <a href="/pengawas/tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pengawas</th>
                                <!-- <th>Jenis Kelamin</th> -->
                                <!-- <th>No Telepon</th>
                                <th>Email</th> -->
                                <!-- <th>Password</th> -->
                                <th>Kategori</th>
                                <th style="text-align: center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengawas as $p)
                            <tr>
                                <td>{{ $p->nm_pengawas }}</td>
                                <!-- <td>{{ $p->jenkel }}</td> -->
                                <!-- <td>{{ $p->no_tlp }}</td>
                                <td>{{ $p->email }}</td> -->
                                <!-- <td>{{ $p->password }}</td> -->
                                <td>{{ $p->kategori->nm_kategori ??'' }}</td>
                                <td style="text-align: center;">
                                    <a href="/pengawas/edit/{{ $p->id_pengawas }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="/pengawas/detail/{{ $p->id_pengawas }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/pengawas/delete/{{ $p->id_pengawas }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('Template.script')
</body>
</html>
