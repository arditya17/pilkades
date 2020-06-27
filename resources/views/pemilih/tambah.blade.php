@extends('admin.master')

@section('content')    
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Pemilih</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Pemilih</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">

                  <form action="/admin/pemilih/store" method="post"  enctype="multipart/form-data">


                  <form action="/admin/pemilih/add" method="post"  enctype="multipart/form-data">

                  <form action="/admin/pemilih/store" method="post"  enctype="multipart/form-data" class="form-user">

                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                      	<div class="form-group">
                          <label for="name">Nama Lengkap</label>
                          <input type="text" name="name" class="form-control" placeholder="Nama Lengkap..." required="required">
                          <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" placeholder="NIK..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" name="tempatLahir" class="form-control" placeholder="Tempat Lahir..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="kelamin">Kelamin</label>
                            <select name="kelamin" class="form-control" placeholder="Kelamin..." required="required" >
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" class="form-control" placeholder="Agama..." required="required" >
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Hindu">Islam</option>
                              <option value="Budha">Kristen</option>
                              <option value="Katholik">Katholik</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan..." required="required">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email..." required="required">
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="is_admin" class="form-control" value="0" required="required">
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="surat_suara" class="form-control" value="0" required="required">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password..." >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      	


                      </div>
                    </div>
                    
<!--                     <div class="form-group">
                      <b>File Gambar</b><br/>
                      <input type="file" name="file">
                    </div> -->
                    <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Comfirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.row -->
</section>
@endsection