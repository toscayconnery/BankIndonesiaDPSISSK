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
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('')}}/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('')}}/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('')}}/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('')}}/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('')}}/plugins/select2/select2.min.css">
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
          <a href="{{url('')}}/list-file-tahun-arsip/{{$tahun}}">{{$tahun}}</a> >
          @foreach($breadcrumb as $data) 
            <a href="{{url('')}}/list-file-arsip/{{$data['id']}}">{{$data['nama']}}</a> >
          @endforeach
          <a href="{{url('')}}/list-file-arsip/{{$parentFolder->id}}">{{$parentFolder->nama}}</a>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('')}}/list-proyek"><i class="fa fa-cubes"></i> Proyek</a></li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#fileArsip" data-toggle="tab"><h4>Dokumen</h4></a></li>
                <li><a href="#"><h4><font color="#ffffff"> Dokumen</font></h4></a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="fileArsip">
                  <form action="{{url('')}}/upload-file-arsip/{{$parentFolder->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <h4>Upload Dokumen</h4>
                    <div class="input-group">
                      <input type="file" name="berkas" class="form-control">
                      <input type="hidden" name="tahun" value="{{$tahun}}">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="MLBI">
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <div>
                  <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modalTambahFolder">Tambah Folder</button>
                  <br>
                  <br>
                </div>
                <table id="example2" class="table table-bordered table-striped">
                  <br>
                  <br>
                  <thead>
                    <tr href='{{url('')}}/list-file-arsip'>
                      <th style="width: 2em"><center>No</center></th>
                      <th>Nama</th>
                      <th>Tipe</th>
                      <th>PIC</th>
                      <th>Tanggal Dibuat</th>
                      <th style="width: 10em">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $x = 1;
                    @endphp
                    @foreach($childFolder as $data)
                    <tr onclick="window.document.location='{{url('')}}/list-file-arsip/{{$data->id}}';">
                      <td><center>{{$x++}}</center></td>
                      <td>{{$data->nama}}</td>
                      <td>Folder</td>
                      <td>{{$data->pic}}</td>
                      <td>{{Carbon\Carbon::parse($data->created_at)->format('d-F-Y')}}</td>
                      <td>
                        <center>
                          <a href="{{url('')}}/list-file-arsip/{{$data->id}}"><button class="btn btn-primary">Detail</button></a>
                          <a href="{{url('')}}/delete-folder-arsip/{{$data->id}}"><button class="btn btn-primary">Delete</button></a>
                        </center>
                      </td>
                    </tr>
                    @endforeach
                    @foreach($listFile as $data)
                    <tr onclick="window.document.location='{{url('')}}/list-file-arsip/{{$data->id}}';">
                      <td><center>{{$x++}}</center></td>
                      <td>{{$data->nama}}</td>
                      <td>File</td>
                      <td>{{$data->pic}}</td>
                      <td>{{Carbon\Carbon::parse($data->created_at)->format('d-F-Y')}}</td>
                      <td>
                        <center>
                          <a href="{{url('')}}/download-file/{{ $data->id }}"><button class="btn btn-primary">Download</button></a>
                          <a href="{{url('')}}/delete-file-arsip/{{ $data->id }}"><button class="btn btn-primary">Delete</button></a>
                        </center>
                      </td>
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

        <div class="modal fade" id="modalTambahFolder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <center><h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Tambah Folder</h3></center>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{url('')}}/tambah-folder-arsip/{{$parentFolder->id}}">
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


        <br>
      </div>
      @include('layouts.footer')
    </div>

    <!-- jQuery 2.2.3 -->
    <script src="{{url('')}}/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{url('')}}/bootstrap2/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="{{url('')}}/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="{{url('')}}/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="{{url('')}}/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="{{url('')}}/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{url('')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="{{url('')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="{{url('')}}/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="{{url('')}}/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- DataTables -->
    <script src="{{url('')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="{{url('')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{url('')}}/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('')}}/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('')}}/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('')}}/dist/js/demo.js"></script>
    <!-- page script -->
    <script src="{{url('')}}/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script>
      $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#rencanajadwal').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
