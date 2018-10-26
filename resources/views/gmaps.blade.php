@extends('theme.default')


 
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
          
        </div>
        <div class="panel-body">
         <head>
            <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
        </head>
        <body>
            {!!$map['html']!!}
        </body>
        </div>
    </div>
</div>
@endsection