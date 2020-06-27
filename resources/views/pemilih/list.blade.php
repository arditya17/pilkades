@extends('admin.master')

@section('content')    



<!-- datatable -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pemilih</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemilih</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Pemilih</h3>
            </div> -->
            <!-- /.card-header -->
            <!-- <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th style="display:none;" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-short="ascending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">NIK</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Pekerjaan</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      
                      
                      
                    </tbody>
                  </table>    
                </div>
                </div> -->
               
              <!-- </div>
            </div> -->
            <!-- /.card-body -->
          <!-- </div> -->
          <!-- /.card -->





          <div class="card">
            <div class="card-header">
              <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Pemilih</a>  
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-striped table-bordered table-sm" id="table_user">
              <thead>
                  <tr>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Pekerjaan</th>
                      <th>Email</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
            </table>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
    <span id="form_result"></span>
      <div class="modal-dialog ">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="modal-judul"></h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <form method="GET" id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                     @csrf
                      <div class="row">
                          <div class="col-sm-12">

                             

                              <div class="form-group">
                                  <label for="name" class="col-sm-12 control-label">Nama Pemilih</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="name" name="name"
                                          value="" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="nik" class="col-sm-12 control-label">NIK</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="nik" name="nik"
                                          value="" required>
                                  </div>
                              </div>

                              
                              <!-- <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="NIK..." required="required">
                              </div> -->

                              <div class="form-group">
                                  <label for="tempatLahir" class="col-sm-12 control-label">Tempat Lahir</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="tempatLahir" name="tempatLahir"
                                          value="" required>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir</label>
                                <input type="text" name="tempatLahir" class="form-control" placeholder="Tempat Lahir..." required="required">
                              </div> -->

                              <div class="form-group">
                                  <label for="tanggalLahir" class="col-sm-12 control-label">tanggalLahir</label>
                                  <div class="col-sm-12">
                                      <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" class="form-control" id="tanggalLahir" name="tanggalLahir"
                                          value="" required>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir..." required="required">
                              </div> -->

                              <div class="form-group">
                                  <label for="kelamin" class="col-sm-12 control-label">Jenis Kelamin</label>
                                  <div class="col-sm-12">
                                      <select name="kelamin" id="kelamin" class="form-control required>
                                          <option value="">Pilih Jenis Kelamin</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                      </select>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="kelamin">Kelamin</label>
                                <select name="kelamin" class="form-control" placeholder="Kelamin..." required="required" >
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                              </div> -->

                              <div class="form-group">
                                  <label for="agama" class="col-sm-12 control-label">Agama</label>
                                  <div class="col-sm-12">  
                                    <select name="agama" id="agama" class="form-control"  required="required" >
                                      <option value="Islam">Islam</option>
                                      <option value="Kristen">Kristen</option>
                                      <option value="Hindu">Hindu</option>
                                      <option value="Budha">Kristen</option>
                                      <option value="Katholik">Katholik</option>
                                    </select>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" class="form-control" placeholder="Agama..." required="required" >
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Hindu">Islam</option>
                                  <option value="Budha">Kristen</option>
                                  <option value="Katholik">Katholik</option>
                                </select>
                              </div> -->

                              <div class="form-group">
                                  <label for="pekerjaan" class="col-sm-12 control-label">Pekerjaan</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                          value="" required>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan..." required="required">
                              </div> -->

                              <div class="form-group">
                                  <label for="pendidikan" class="col-sm-12 control-label">Pendidikan</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                          value="" required>
                                  </div>
                              </div>

                              <!-- <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan..." required="required">
                              </div> -->

                              <div class="form-group">
                                  <label for="email" class="col-sm-12 control-label">Email</label>
                                  <div class="col-sm-12">
                                      <input type="text" class="form-control" id="email" name="email"
                                          value="" required>
                                  </div>
                              </div>
                              
                              <!-- <div class="form-group">
                                  <label for="name" class="col-sm-12 control-label">E-mail</label>
                                  <div class="col-sm-12">
                                      <input type="email" class="form-control" id="email" name="email" value=""
                                          required>
                                  </div>
                              </div> -->

                              <div class="form-group">
                                <input type="hidden" name="is_admin" class="form-control" value="0" required="required">
                              </div>
                              <div class="form-group">
                                <input type="hidden" name="surat_suara" class="form-control" value="0" required="required">
                              </div>

                              <div class="form-group">
                                  <label for="password" class="col-sm-12 control-label">Password</label>
                                  <div class="col-sm-12">
                                      <input type="password" class="form-control" id="password" name="password"
                                          value="" required>
                                  </div>
                              </div>
                              
                              <!-- <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password..." >
                              </div> -->

                          </div>
                          
                          <div class="col-sm-offset-2 col-sm-12">
                              <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                  value="create">Simpan
                              </button>
                          </div>

                          <!-- <div class="col-sm-offset-2 col-sm-12" >
                            <input type="hidden" name="action" id="action" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-block" value="Add" />
                          </div> -->
                      </div>

                  </form>
              </div>
              <div class="modal-footer">
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL -->

    <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">PERHATIAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p><b></b></p>
                  <p>apakah anda yakin?</p>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                      Data</button>
              </div>
          </div>
      </div>
    </div>
    </section>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
    integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


<script>
  $(document).ready(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  });

  //TOMBOL TAMBAH DATA
  //jika tombol-tambah diklik maka
  // $('#tombol-tambah').click(function () {
  //     $('#button-simpan').val("create-post"); //valuenya menjadi create-post
  //     $('#id').val(''); //valuenya menjadi kosong
  //     $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
  //     $('#modal-judul').html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
  //     $('#tambah-edit-modal').modal('show'); //modal tampil
  // });

  $(document).ready(function () {
    $('#table_user').DataTable({
        processing: true,
        serverSide: true, //aktifkan server-side 
        ajax: {
            url: "{{ url ('/admin/pemilih/list') }}",
            type: 'GET'
        },
        columns: [{
                data: 'name',
                name: 'name'
            },
            {
                data: 'nik',
                name: 'nik'
            },
            {
                data: 'pekerjaan',
                name: 'pekerjaan'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'action',
                name: 'action'
            },

        ],
        order: [
            [0, 'asc']
        ]
    });
  });


  $('#tombol-tambah').click(function(){
     
     $('#form_result').html('');
     $('#form-tambah-edit').trigger("reset");
     $('#tambah-edit-modal').modal('show');
     $('#form-tambah-edit')[0].reset();
  });

  if ($("#form-tambah-edit").length > 0) {
      $("#form-tambah-edit").validate({
          submitHandler: function (form) {
              var actionType = $('#tombol-simpan').val();
              $('#tombol-simpan').html('Sending..');

              $.ajax({
                  data: $('#form-tambah-edit')
                      .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                  url: "{{ url('/admin/pemilih/add') }}", //url simpan data
                  type: "POST", //karena simpan kita pakai method POST
                  dataType: 'json', //data tipe kita kirim berupa JSON
                  success: function (data) { //jika berhasil 
                      $('#form-tambah-edit').trigger("reset"); //form reset
                      $('#tambah-edit-modal').modal('hide'); //modal hide
                      $('#tombol-simpan').html('Simpan'); //tombol simpan
                      var oTable = $('#table_user').dataTable(); //inialisasi datatable
                      oTable.fnDraw(false); //reset datatable
                     
                  },
                  error: function (data) { //jika error tampilkan error pada console
                      console.log('Error:', data);
                      $('#tombol-simpan').html('Simpan');
                  }
              });
          }
      })
  }

  // edit youtube
  $('body').on('click', '.edit-post', function () {
      var data_id = $(this).data('id');
      $.get('/admin/pemilih/' + data_id + '/edit', function (data) {
          // $('#action_button').val('edit-post');
          $('#tombol-simpan').val("edit-post");
          $('#tambah-edit-modal').modal('show');

          //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
          $('#name').val(data.name);
          $('#nik').val(data.nik);
          $('#tempatLahir').val(data.tempatLahir);
          $('#tanggalLahir').val(data.tanggalLahir);
          $('#kelamin').val(data.kelamin);
          $('#agama').val(data.agama);
          $('#pekerjaan').val(data.pekerjaan);
          $('#pendidikan').val(data.pendidikan);
          $('#email').val(data.email);
          $('#password').val(data.password);
          $('#hidden_id').val(id);
      })
  });
  // $('#form-tambah-edit').on('submit', function(event){
  //   event.preventDefault();
  //     var action_url = '';

  //     if($('#action').val() == 'Add')
  //     {
  //         action_url = "{{ url('/admin/pemilih/add') }}";
  //     }

  //     if($('#action').val() == 'Edit')
  //     {
  //         action_url = "{{ url('/admin/pemilih/store') }}";
  //     }

  //     $.ajax({
  //         url: action_url,
  //         method:"POST",
  //         data:new FormData(this),
  //         dataType:'JSON',
  //         contentType: false,
  //         cache: false,
  //         processData: false,
          
  //         success: function (data) { //jika berhasil 
  //             $('#form-tambah-edit').trigger("reset"); //form reset
  //             $('#tambah-edit-modal').modal('hide'); //modal hide
  //             $('#action_button').html('Simpan'); //tombol simpan
  //             var oTable = $('#table_user').dataTable(); //inialisasi datatable
  //             oTable.fnDraw(false); //reset datatable
              
  //         },
  //         error: function (data) { //jika error tampilkan error pada console
  //             console.log('Error:', data);
  //             $('#action_button').html('Simpan');
  //         }
          
  //     });
  // });





  // edit web
  // $('body').on('click', '.edit', function(){
  // var id = $(this).attr('id');
  // $.ajax({
  //   url:"/admin/pemilih/"+id+"/edit",
  //   dataType:'JSON', 
  //   success:function(html){
  //     $('#name').val(data.result.name);
  //     $('#nik').val(data.result.nik);
  //     $('#tempatLahir').val(data.result.tempatLahir);
  //     $('#tanggalLahir').val(data.result.tanggalLahir);
  //     $('#kelamin').val(data.result.kelamin);
  //     $('#agama').val(data.result.agama);
  //     $('#pekerjaan').val(data.result.pekerjaanin);
  //     $('#pendidikan').val(data.result.pendidikan);
  //     $('#email').val(data.result.email);
  //     $('#password').val(data.result.password);
  //     $('#hidden_id').val(id);
  //     $('#action_button').val('Edit');
  //     $('#action').val('Edit');
  //     $('#tambah-edit-modal').modal('show');
  //   }
  //   })
  // });



  // tambah
  //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
  //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
  //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
  // if ($("#form-tambah-edit").length > 0) {
  //     $("#form-tambah-edit").validate({
  //         submitHandler: function (form) {
  //             var actionType = $('#tombol-simpan').val();
  //             $('#tombol-simpan').html('Sending..');

  //             $.ajax({
  //                 data: $('#form-tambah-edit')
  //                     .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
  //                 type: "POST", //karena simpan kita pakai method POST
  //                 dataType: 'json', //data tipe kita kirim berupa JSON
  //                 success: function (data) { //jika berhasil 
  //                     $('#form-tambah-edit').trigger("reset"); //form reset
  //                     $('#tambah-edit-modal').modal('hide'); //modal hide
  //                     $('#tombol-simpan').html('Simpan'); //tombol simpan
  //                     var oTable = $('#table_user').dataTable(); //inialisasi datatable
  //                     oTable.fnDraw(false); //reset datatable
  //                     iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
  //                         title: 'Data Berhasil Disimpan',
  //                         message: '{{ Session('
  //                         success ')}}',
  //                         position: 'bottomRight'
  //                     });
  //                 },
  //                 error: function (data) { //jika error tampilkan error pada console
  //                     console.log('Error:', data);
  //                     $('#tombol-simpan').html('Simpan');
  //                 }
  //             });
  //         }
  //     })
  // }

  // //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
  // //ketika class edit-post yang ada pada tag body di klik maka
  // $('body').on('click', '.edit-post', function () {
  //     var data_id = $(this).data('id');
  //     $.get('pegawai/' + data_id + '/edit', function (data) {
  //         $('#modal-judul').html("Edit Post");
  //         $('#tombol-simpan').val("edit-post");
  //         $('#tambah-edit-modal').modal('show');

  //         //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
  //         $('#id').val(data.id);
  //         $('#nama_pegawai').val(data.nama_pegawai);
  //         $('#jenis_kelamin').val(data.jenis_kelamin);
  //         $('#email').val(data.email);
  //         $('#alamat').val(data.alamat);
  //     })
  // });



  // hapus
  $(document).on('click', '.delete', function(){
      user_id = $(this).attr('id');
      $('#konfirmasi-modal').modal('show');
  });

  $('#tombol-hapus').click(function(){
      $.ajax({
          url:"/admin/pemilih/hapus/"+user_id,
          beforeSend:function(){
              $('#tombol-hapus').text('Hapus Data');
          },
          success:function(data)
          {
              setTimeout(function(){
                  $('#konfirmasi-modal').modal('hide');
                  $('#table_user').DataTable().ajax.reload();
              }, 200);
          }
      })
  });
</script>

@endsection

