@section("menu","dashboard")
@section("submenu","penilaian")
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
            <h1 class="m-0">Penilaian</h1>
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

    <!-- Tambah Penilaian -->

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Penilaian</title>
</head>
<body>
    <div class="container">
        <div class="card mt-2">
            <!-- <div class="card-header text-center">
                Data Penilaian - <strong>TAMBAH DATA</strong>
            </div> -->
            <div class="card-body">
                <form method="post" action="/penilaian/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tgl" class="form-control">

                        @if($errors->has('tgl'))
                            <div class="text-danger">
                                {{ $errors->first('tgl')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group mt-2">
                        <label for="nisn">Nama Siswa</label>
                        <select class="form-control" name="nisn" id="nisn">
                          <option selected>Pilih Siswa</option>
                          @foreach($siswa as $item)
                          <option value="{{ $item->nisn }}">{{ $item->nm_siswa }}</option>
                          @endforeach
                        </select>

                        @if($errors->has('nisn'))
                            <div class="text-danger">
                                {{ $errors->first('nisn')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label for="id_pelanggaran">Bentuk Pelanggaran</label>
                        <select class="form-control" name="id_pelanggaran" id="id_pelanggaran">
                          <option selected>Pilih Pelanggaran</option>
                          @foreach($pelanggaran as $item)
                          <option value="{{ $item->id_pelanggaran }}">{{ $item->nm_pelanggaran }}</option>
                          @endforeach
                        </select>

                        @if($errors->has('id_pelanggaran'))
                            <div class="text-danger">
                                {{ $errors->first('id_pelanggaran')}}
                            </div>
                        @endif
                        
                    </div>

                    <!-- <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score" class="form-control">

                        @if($errors->has('score'))
                            <div class="text-danger">
                                {{ $errors->first('score')}}
                            </div>
                        @endif
                        
                    </div> -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" onClick="return confirm('Yakin ingin menyimpan data ini?')">Simpan</button>
                        <a href="/penilaian" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Penilaian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Data Penilaian 
                </div> -->
                <div class="card-body">
                    <!-- <a href="/penilaian/tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah </a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered " id="id_penilaian" width="100%" ceelspacing="0">
                        <thead>
                            <tr>
                                <!-- <th>ID Penilaian</th> -->
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Siswa</th>
                                <th>Bentuk Pelanggaran</th>
                                <th>Score berkurang</th>
                                <th style="text-align: center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penilaian as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->tgl }}</td>
                                <td>{{ $p->siswa->nm_siswa ?? '' }}</td>
                                <td>{{ $p->pelanggaran->nm_pelanggaran ?? '' }}</td>
                                <td>- {{ $p->score}}</td>
                                <td style="text-align: center;">
                                    <!-- <a href="/penilaian/edit/{{ $p->id_penilaian }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> -->
                                    <a href="/penilaian/detail/{{ $p->id_penilaian }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/penilaian/delete/{{ $p->id_penilaian }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
