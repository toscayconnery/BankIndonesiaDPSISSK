<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPANG BI</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('')}}/bootstrap2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('')}}/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('')}}/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('')}}/sweetalert/dist/sweetalert.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('layouts.header')
    @include('layouts.navbar')
    
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          <a href="{{url('')}}/list-file-tahun-arsip/{{$tahun}}">{{$tahun}}</a>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-file"></i> Arsip</a></li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modalTambahFolder">Tambah Folder</button>
                <table id="example1" class="table table-bordered table-striped">
                  <br>
                  <br>
                  <thead>
                    <tr href='{{url('')}}/list-file-arsip'>
                      <th style="width: 1em">No</th>
                      <th>Nama</th>
                      <th>Tipe</th>
                      <th>PIC</th>
                      <th>Tanggal Dibuat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $x = 1;
                    @endphp
                    @foreach($listFolderProyek as $data)
                    <tr onclick="window.document.location='{{url('')}}/list-arsip-tahapan-proyek/{{$data->id}}';">
                      <td align="center">{{$x++}}</td>
                      <td>{{$data->nama}}</td>
                      <td>Folder Proyek</td>
                      <td>{{$data->pic}}</td>
                      <td>{{Carbon\Carbon::parse($data->created_at)->format('d F Y')}}</td>
                      <td align="center"><a href="{{url('')}}/list-arsip-tahapan-proyek/{{$data->id}}"><button>Detail</button></a></td>
                    </tr>
                    @endforeach
                    @foreach($listFolderNonProyek as $data)
                    <tr onclick="window.document.location='{{url('')}}/list-file-arsip/{{$data->id}}';">
                      <td align="center">{{$x++}}</td>
                      <td>{{$data->nama}}</td>
                      <td>Folder</td>
                      <td>{{$data->pic}}</td>
                      <td>{{Carbon\Carbon::parse($data->created_at)->format('d F Y')}}</td>
                      <td align="center"><a href="{{url('')}}/list-file-arsip/{{$data->id}}"><button>Detail</button></a></td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <br>
      </div>
      @include('layouts.footer')
    </div>
    <div class="modal fade" id="modalTambahFolder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Tambah Folder</h3></center>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{url('')}}/tambah-folder-dalam-tahun/{{$tahun}}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="namafolder" class="col-md-5 control-label">Nama Folder</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" id="namaFolder" name="namaFolder">
                </div>
              </div>
              <div class="form-group">
                <div class="modal-footer">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button id="buttonSubmitTambahFolder" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url('')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{url('')}}/bootstrap2/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="{{url('')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="{{url('')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('')}}/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('')}}/dist/js/app.min.js"></script>
    <script src="{{url('')}}/dist/js/demo.js"></script>
    <script src="{{url('')}}/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script>
      $(function(){
        $('#buttonSubmitTambahFolder').click(function(event){
          if(document.getElementById('namaFolder').value === ''){
            swal({
              title: "Nama folder tidak boleh kosong.",
              type: "warning",
              allowOutsideClick: true,
            });
            return false;
          }
        });
      });
    </script>
    <script>
      $(function () {
        $('#example1').DataTable({
          "order": [[ 0, "desc" ]],
          "autoWidth": true
        });
      });
    </script>
  </body>
  </html>
