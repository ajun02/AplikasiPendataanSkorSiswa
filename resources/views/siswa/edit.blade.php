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
            <h1 class="m-0">Edit Data Siswa</h1>
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
        <title>Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <!-- <div class="card-header text-center">
                    Data Siswa - <strong>EDIT DATA</strong>
                </div> -->
                <div class="card-body">
                    <form method="post" action="/siswa/update/{{ $siswa->nisn }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control" value=" {{ $siswa->nisn }}">
 
                            @if($errors->has('nisn'))
                                <div class="text-danger">
                                    {{ $errors->first('nisn')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nm_siswa" class="form-control" value=" {{ $siswa->nm_siswa }}">
 
                             @if($errors->has('nm_siswa'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_siswa')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                                <label>Kelas</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas">
                                        <option value="">pilih kelas</option>
                                        @foreach($kelas as $item)
                                            @if($item->id_kelas==$siswa->id_kelas)
                                            <option value={{ $item->id_kelas }} selected>{{ $item->nm_kelas }}</option>
                                            @else
                                            <option value={{ $item->id_kelas }}>{{ $item->nm_kelas }}</option>
                                            @endif
                                        @endforeach
                                    </select>
    
                                @if($errors->has('id_kelas'))
                                    <div class="text-danger">
                                        {{ $errors->first('id_kelas')}}
                                    </div>
                                @endif
 
                            </div>

                          <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" name="tmpt_lahir" class="form-control" value=" {{ $siswa->tmpt_lahir }}">
 
                             @if($errors->has('tmpt_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tmpt_lahir')}}
                                </div>
                            @endif
 
                          </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}">
 
                             @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label> <br>
                            @if($siswa->jenkel == "laki-laki")
                            <div class="form-check form-check-inline">
                                <label for="jenkel">
                                    <input type="radio"  name="jenkel" id="jenkel" value="laki-laki" checked> Laki-laki
                                    <input type="radio" name="jenkel" id="jenkel" value="perempuan"> Perempuan
                                </label>
                            </div>
                            @elseif($siswa->jenkel == "perempuan")
                            <div class="form-check form-check-inline">
                                <label for="jenkel">
                                    <input type="radio"  name="jenkel" id="jenkel" value="laki-laki"> Laki-laki
                                    <input type="radio" name="jenkel" id="jenkel" value="perempuan" checked> Perempuan
                                </label>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control">{{ $siswa->alamat }}</textarea>
 
                            @if($errors->has('alamat'))
                              <div class="text-danger">
                                  {{ $errors->first('alamat')}}
                              </div>
                            @endif
 
                        </div> 

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
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
