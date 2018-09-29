<div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

    </button>

    <a class="navbar-brand" href="/home">Incidencias</a>

</div>
<!-- 
<ul class="nav navbar-top-links navbar-left">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
    </ol>
</ul>
-->

<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        {{-- <li><a href="{{ url('/register') }}">Register</a></li> --}}
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
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
        </li>
    @endif

    <!-- /.dropdown -->
    <!-- Left Side Of Navbar -->
     <ul class="nav navbar-nav">
         <!-- si el usuario se autentifica admin o tecnico asisgnacion de proyecto con selector-->
        @if(auth()->check())
       

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

</ul>

<!-- /.navbar-top-links -->
