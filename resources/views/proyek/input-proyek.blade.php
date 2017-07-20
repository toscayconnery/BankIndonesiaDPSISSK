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

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('layouts.header')
  @include('layouts.navbar')
  <div class="content-wrapper">
    <section class="content-header">
        <h1>
          Tambah Proyek
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('')}}/list-proyek"><i class="fa fa-cubes"></i> Proyek</a></li>
        </ol>
    </section>
    <section class="content">
    <div class="row">
      <div class="col-md-7">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Tambah Proyek</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
              
              <!--Name-->
              <div class="form-group">
                <label for="namaproyek" class="col-sm-3 control-label">Nama Proyek</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="namaproyek">
                </div>
              </div>

              <div class="form-group">
                <label for="kodema" class="col-sm-3 control-label">Kode MA</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="kodema">
                </div>
              </div>
              <!--Category-->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>

                <div class="col-sm-9">
                  <!-- <select name="browser" onchange='if(this.options[this.selectedIndex].value=='customOption'){toggleField(this,this.nextSibling); this.selectedIndex='0';}' class="form-control" style="width: 100%;">
                    <option>Program Strategis</option>
                    <option>Ad-Hoc</option>
                    <option>Small</option>
                    <option value="customOption">Lainnya</option>
                    <input name="browser" style="display:none;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">
                  </select> -->

                  <input type="text" list="kategori" class="form-control"/>
                  <datalist id="kategori">
                    <option>Program Strategis</option>
                    <option>Ad-Hoc</option>
                    <option>Small</option>
                  </datalist>
                </div>
              </div>

              <!--PIC-->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">PIC</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Rencana Jadwal</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control pull-right" id="rencanajadwal">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">
                  Kategori
                </label>
                <div class="col-sm-9">
                <label>Inhouse
                  <input type="radio" name="r1" class="minimal" checked>
                </label>
                <label style='margin-left:30px;'>Outsource
                  <input type="radio" name="r1" class="minimal">
                </label>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </form>
          <div class="box-footer">
              <a href='{{url('')}}/list-proyek'><button class="btn btn-primary" style="float: right;">Submit</button></a>
            </div>
        </div>
        <!-- /.box -->
      </div>
      </div>
    </section>
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
<script>
  function toggleField(hideObj,showObj){
   hideObj.disabled=true;   
   hideObj.style.display='none';
   showObj.disabled=false;  
   showObj.style.display='inline';
   showObj.focus();
 }
</script>
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
</body>
</html>
