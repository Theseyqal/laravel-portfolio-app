<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Portfolio | Dashboard</title>
    <link href="{{ asset('front/css/sidebar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/admin_custom.css') }}" rel="stylesheet" type="text/css" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
            <section class="content">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Add Home Section</h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <form role="form" method="POST" action="{{ route('admin.store.home') }}">
                        @csrf
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Your Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Profession</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="profession" placeholder="Enter Your Profession">
                          </div>
                          {{-- <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                          </div> --}}
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <style>
                                .btn-special {
                                  position: relative;
                                  display: inline-block;
                                  padding: 12px 30px;        /* همون سایز قبلی */
                                  font-size: 1.1rem;
                                  font-weight: 700;          /* قلم پررنگ */
                                  color: #222222;            /* رنگ تیره‌تر و قوی‌تر برای متن */
                                  background: linear-gradient(45deg, #a3c4f3, #c3bef0);
                                  border: none;
                                  border-radius: 50px;
                                  box-shadow: 0 5px 15px rgba(163, 196, 243, 0.6);
                                  cursor: pointer;
                                  overflow: hidden;
                                  transition: background 0.4s ease, box-shadow 0.4s ease, transform 0.2s ease;
                                  user-select: none;
                                  text-shadow: none;         /* بدون سایه متن */
                                }

                                .btn-special::before {
                                  content: "";
                                  position: absolute;
                                  top: -50%;
                                  left: -50%;
                                  width: 200%;
                                  height: 200%;
                                  background: radial-gradient(circle, rgba(255,255,255,0.25) 10%, transparent 40%);
                                  transform: translateX(-100%) translateY(-100%);
                                  transition: transform 0.7s ease;
                                  pointer-events: none;
                                  border-radius: 50%;
                                }

                                .btn-special:hover {
                                  background: linear-gradient(45deg, #c3bef0, #a3c4f3);
                                  box-shadow: 0 8px 25px rgba(195, 190, 240, 0.9);
                                  transform: scale(1.1);
                                  color: #111111;            /* متن موقع هاور کمی تیره‌تر */
                                }

                                .btn-special:hover::before {
                                  transform: translateX(0) translateY(0);
                                }

                                .btn-special:active {
                                  transform: scale(0.95);
                                  box-shadow: 0 4px 12px rgba(160, 150, 230, 0.7);
                                }
                                </style>

                                <button type="submit" class="btn-special">Submit</button>
                        </div>
                      </form>
                    </div><!-- /.box -->



                    </div><!-- /.box -->
                  </div><!--/.col (right) -->
                </div>   <!-- /.row -->
              </section><!-- /.content -->
        </div>
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
