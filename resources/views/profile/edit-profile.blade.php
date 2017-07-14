<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI PMO&RMS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<<<<<<< HEAD
  <div class="wrapper">
    @include('layouts.header')
    @include('layouts.navbar')
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Profile Diri
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('')}}/dashboard"><i class="fa fa-newspaper-o"></i> Dashboard</a></li>
        </ol>
      </section>
      
      <section class="content">
        <div class="row row-centered">
          <div class="col-md-5 col-md-offset-3">
            <!-- Horizontal Form -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{url('')}}/icon/account.png" alt="User profile picture">

                <h3 class="profile-username text-center">Nina Mcintire</h3>
=======
<div class="wrapper">
  @include('layouts.header')
  @include('layouts.navbar')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profile Diri
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('')}}/dashboard"><i class="fa fa-newspaper-o"></i> Dashboard</a></li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row row-centered">
        <div class="col-md-5 col-md-offset-3">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              @if(Auth::check())
                <img class="profile-user-img img-responsive img-circle" src="{{url('')}}/{{Auth::user()->image_path}}" alt="User profile picture">
              @else
                <img class="profile-user-img img-responsive img-circle" src="{{url('')}}/icon/account.png" alt="User profile picture">
              @endif

              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
>>>>>>> 8a27bd937b1200bdaef1292372c52f704551d41a

                <!-- <p class="text-muted text-center">Software Engineer</p> -->

<<<<<<< HEAD
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">NIP</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="NIP">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-danger">Cancel</button>
                    <button type="button" data-toggle="modal" data-target="#confirm-submit" id="submitBtn"class="btn btn-primary pull-right">Save</button>
                  </div>
                  <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><h3 class="modal-title" id="myModalLabel" style="font-weight: bold;">Validasi Pergantian Data</h3></center>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="confirmpassword" class="col-md-4 control-label">Masukkan Password</label>
                            <div class="col-md-8">
                              <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="modal-footer">
                              <button type="reset" class="btn btn-danger">Reset</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
=======
              <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                  {{ csrf_field() }}
                    <input type="text" name="nip" class="form-control" id="inputPassword3" placeholder="NIP" value="{{$nip}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email" value="{{$email}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Picture</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambar" class="form-control" id="inputPassword3">
>>>>>>> 8a27bd937b1200bdaef1292372c52f704551d41a
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box-body -->
<<<<<<< HEAD
=======
              <div class="box-footer">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
>>>>>>> 8a27bd937b1200bdaef1292372c52f704551d41a
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
    </div>
    @include('layouts.footer')
  </div>

  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <script>$.widget.bridge('uibutton', $.ui.button);</script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="plugins/morris/morris.min.js"></script>
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="plugins/knob/jquery.knob.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="plugins/fastclick/fastclick.js"></script>
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
</body>
</html>