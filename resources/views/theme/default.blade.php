<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <title>Scit</title>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>



    <!-- Bootstrap Core CSS -->

    <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="{!! asset('theme/vendor/metisMenu/metisMenu.min.css') !!}" rel="stylesheet">





    <!-- Custom CSS -->

    <link href="{!! asset('theme/dist/css/sb-admin-2.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('welcome/normalize.css') }}">




    <!-- Morris Charts CSS -->

    <link href="{!! asset('theme/vendor/morrisjs/morris.css') !!}" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="{!! asset('theme/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{{ asset('images/5927.png') }}}">



</head>

<body>



    <div id="wrapper">



        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('theme.header')

            @include('theme.sidebar')


        </nav>



        <div id="page-wrapper">
            
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Scit</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              @yield('content')
                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->







          {{--   @yield('content') --}}
             

        </div>

        <!-- /#page-wrapper -->

         @include('theme.footer')



    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>

   



    <!-- Bootstrap Core JavaScript -->

    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>

    


    <!-- Metis Menu Plugin JavaScript -->

    <script src="{!! asset('theme/vendor/metisMenu/metisMenu.min.js') !!}"></script>



    <!-- Morris Charts JavaScript -->

    <script src="{!! asset('theme/vendor/raphael/raphael.min.js') !!}"></script>

    <script src="{!! asset('theme/vendor/morrisjs/morris.min.js') !!}"></script>

    <script src="{!! asset('theme/data/morris-data.js') !!}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{!! asset('theme/dist/js/sb-admin-2.js') !!}"></script>


    <!-- ful calendar -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>



   
    
   
    
   

   
 @yield('scripts')



</body>




</html>