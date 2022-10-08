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
            <h1 class="m-0">Tambah Data Siswa</h1>
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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Siswa</title>
</head>
<body>
    <div class="container">
        <div class="card mt-2">
            <!-- <div class="card-header text-center">
                Data Siswa - <strong>TAMBAH DATA</strong>
            </div> -->
            <div class="card-body">
                <form method="post" action="/siswa/store">

                    {{ csrf_field() }}

                    <div class="form-group mt-2">
                        <label>NISN</label>
                        <input type="text" name="nisn" class="form-control">

                        @if($errors->has('nisn'))
                            <div class="text-danger">
                                {{ $errors->first('nisn')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nm_siswa" class="form-control">

                        @if($errors->has('nm_siswa'))
                            <div class="text-danger">
                                {{ $errors->first('nm_siswa')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label for="id_kelas">Kelas</label>
                        <select class="form-control" name="id_kelas" id="id_kelas">
                          <option selected>Pilih Kelas</option>
                          @foreach($kelas as $item)
                          <option value="{{ $item->id_kelas }}">{{ $item->nm_kelas }}</option>
                          @endforeach
                        </select>

                        @if($errors->has('id_kelas'))
                            <div class="text-danger">
                                {{ $errors->first('id_kelas')}}
                            </div>
                        @endif
                        
                    </div>


                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" class="form-control">

                        @if($errors->has('tmpt_lahir'))
                            <div class="text-danger">
                                {{ $errors->first('tmpt_lahir')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">

                        @if($errors->has('tgl_lahir'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_lahir')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenkel" value="Laki-laki" id="Laki-laki" checked> &nbsp; Laki-laki
                        <input type="radio" name="jenkel" value="Perempuan" id="Perempuan"> &nbsp; Perempuan

                        @if($errors->has('jenkel'))
                            <div class="text-danger">
                                {{ $errors->first('jenkel')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
 
                          @if($errors->has('alamat'))
                              <div class="text-danger">
                                  {{ $errors->first('alamat')}}
                              </div>
                            @endif
 
                    </div> 

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" onClick="return confirm('Yakin ingin menyimpan data ini?')">Simpan</button>
                        <a href="/siswa" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
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
