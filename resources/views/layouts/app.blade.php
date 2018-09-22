<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.css">
   

{{-- helpers --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/fondo_edit.css') }}">

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.js/2.1.3/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

   {{--  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        
    <script type="text/javascript" src="/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="/plugins/fullcalender/locale/es.js"></script>
   
   <link src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}



  {{--  <link rel="stylesheet"  href='/plugins/fullcalendar/fullcalendar.min.css'>
   <link rel="stylesheet" href='/plugins/datatables/jquery.dataTables.css'> --}}
    
    <!--https://bootswatch.com/4/litera/bootstrap.min.css
    https://bootswatch.com/4/solar/bootstrap.min.css
    https://bootswatch.com/4/superhero/bootstrap.css
    //bootswatch.com/3/flatly/bootstrap.css

-->

   



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    


    {{--  <script>
        //inicializamos el calendario al cargar la pagina
        $(document).ready(function() {
 
            $('#calendar').fullCalendar({
 
                header: {
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
 
            });
 
        });
    </script> --}}

    {{-- cargar imagenes a reportes --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
        


            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <!-- Left Side Of Navbar -->
                     <ul class="nav navbar-nav">
                         <!-- si el usuario se autentifica admin o tecnico asisgnacion de proyecto con selector-->
                        @if(auth()->check());
                       

                            <form class="navbar-form">
                                <div class="form-group">
                                  <select id="list-of-projects" class="form-control">
                                    <!-- mostarar proyectos dependiendo del tipo de usuario que inicia -->
                                      @foreach(auth()->user()->list_of_projects as $project)
                                       <!-- condicional para mostara el id del proyecto si coincide con el seleccionado por el usuario que inicio session -->
                                      <option value="{{ $project->id }}" @if($project->id==auth()->user()->selected_project_id) selected @endif>{{ $project->name }}</option>
                                      @endforeach

                                  </select>
                                </div>
                            </form>
                      
                        @endif()
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        
                        <!-- Authentication Links llamar a la funcion con un metodo estatico-->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                           {{--  <li><a href="{{ url('/register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>





        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('includes.menu')
                    
                </div>
                
                <div class="col-md-9">
                    @yield('content')
                    
                </div> 
            </div>
            </div>
        </div>

        <script

        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
   
    <!-- Scripts -->
        <script src="/js/app.js"></script>

        <!-- jQuery 2.1.4 -->
        <!-- fullCalendar 2.2.5 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        
       
    @yield('scripts')
</body>
</html>
