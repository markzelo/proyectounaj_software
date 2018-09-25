<div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

    </button>

    <a class="navbar-brand" href="index.html">Incidencias</a>

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
        <li><a href="{{ url('/register') }}">Register</a></li>
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

</ul>

<!-- /.navbar-top-links -->