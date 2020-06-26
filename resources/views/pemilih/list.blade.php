@extends('admin.master')

@section('content')    

<!-- datatable -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
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
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Pemilih</h3>
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

                      @foreach($pemilih as $p)
                      <tr role="row" class="add">
                        <td style="display:none;">{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->pekerjaan }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                          <a href="/admin/pemilih/edit/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>Edit</a>
                          <a href="/admin/pemilih/details/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-bars"></i>Details</a>
                          
                          <!-- <a href="/admin/pemilih/hapus/{{ $p->id }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i>Delete</a> -->
                          <input type='button' value='Delete' class='delete' data-id='"+id+"' >
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example2_info" role="status" arial-live="polite">Showing 1 to  10 of 57 enteries</div>
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
      <!-- /.row -->
    </section>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --> -->

<script type="text/javascript">
  $(document).on("click", ".delete" , function() {
    var delete_id = $(this).data('id');
    var el = this;
    $.ajax({
      url: "{{url('/admin/pemilih/hapus/')}}"+ id,
      type: 'get',
      success: function(response){
        $(el).closest( "tr" ).remove();
        alert(response);
      }
    });
  });
</script>

@endsection

