<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Portfolio | Dashboard</title>
     <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('front/css/sidebar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/header.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.2 -->
    <link href={{ asset('back/bootstrap/css/bootstrap.min.css') }} rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href={{ asset('back/dist/css/AdminLTE.min.css') }} rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href={{ asset('back/dist/css/skins/_all-skins.min.css') }} rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href={{ asset('back/plugins/iCheck/flat/blue.css') }} rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href={{ asset('back/plugins/morris/morris.css') }} rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href={{ asset('back/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }} rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href={{ asset('back/plugins/datepicker/datepicker3.css') }} rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href={{ asset('back/plugins/daterangepicker/daterangepicker-bs3.css') }} rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href={{ asset('back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue">
    <div class="wrapper">

        {{-- header --}}
        @include('admin.defaults.header')
        {{-- end header --}}
      <!-- Left side column. contains the logo and sidebar -->

      {{-- sidebar --}}
        @include('admin.defaults.sidebar')
      {{-- end sidebar --}}
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">

        <section class="content-header">
            <h1>
              Dashboard
              <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- ./col -->
            </div><!-- /.row -->
            <!-- Main row -->

          </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
     {{-- footer --}}
      @include('admin.defaults.footer')
     {{-- end footer --}}
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src={{asset('back/plugins/jQuery/jQuery-2.1.3.min.js') }}></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src={{ asset('back/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src={{ asset('back/plugins/morris/morris.min.js') }} type="text/javascript"></script>
    <!-- Sparkline -->
    <script src={{ asset('back/plugins/sparkline/jquery.sparkline.min.js') }} type="text/javascript"></script>
    <!-- jvectormap -->
    <script src={{ asset('back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }} type="text/javascript"></script>
    <script src={{ asset('back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }} type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src={{ asset('back/plugins/knob/jquery.knob.js') }}type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src={{ asset('back/plugins/daterangepicker/daterangepicker.js') }} type="text/javascript"></script>
    <!-- datepicker -->
    <script src={{ asset('back/plugins/datepicker/bootstrap-datepicker.js') }} type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src={{ asset('back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} type="text/javascript"></script>
    <!-- iCheck -->
    <script src={{ asset('back/plugins/iCheck/icheck.min.js') }} type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src={{ asset('back/plugins/slimScroll/jquery.slimscroll.min.js') }} type="text/javascript"></script>
    <!-- FastClick -->
    <script src={{ asset('back/plugins/fastclick/fastclick.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('back/dist/js/app.min.js') }} type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ asset('back/dist/js/pages/dashboard.js') }} type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src={{ asset('back/dist/js/demo.js') }} type="text/javascript"></script>
  </body>
</html>
