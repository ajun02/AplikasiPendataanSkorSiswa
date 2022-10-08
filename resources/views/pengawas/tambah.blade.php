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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Pengawas</h1>
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
    <title>Pengawas</title>
</head>
<body>
    <div class="container">
        <div class="card mt-2">
            <!-- <div class="card-header text-center">
                Data Pengawas - <strong>TAMBAH DATA</strong>
            </div> -->
            <div class="card-body">
                <form method="post" action="/pengawas/store">

                    {{ csrf_field() }}

                    <div class="form-group mt-2">
                        <label>Nama Pengawas</label>
                        <input type="text" name="nm_pengawas" class="form-control">

                        @if($errors->has('nm_pengawas'))
                            <div class="text-danger">
                                {{ $errors->first('nm_pengawas')}}
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
                        <label>No Telepon</label>
                        <input type="number" name="no_tlp" class="form-control">

                        @if($errors->has('no_tlp'))
                            <div class="text-danger">
                                {{ $errors->first('no_tlp')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">

                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">

                        @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                        @endif
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                          <option selected>Pilih Kategori</option>
                          @foreach($kategori as $item)
                          <option value="{{ $item->id_kategori }}">{{ $item->nm_kategori }}</option>
                          @endforeach
                        </select>

                        @if($errors->has('id_kategori'))
                            <div class="text-danger">
                                {{ $errors->first('id_kategori')}}
                            </div>
                        @endif
                        
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/pengawas" class="btn btn-primary">Kembali</a>
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
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('Template.script')
</body>
</html>
