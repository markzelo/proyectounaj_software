@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
    <div class="panel-heading">Eventos</div>
    <div class="panel-body text-center">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <div class="panel panel-primary">
        <div class="panel-body" >
           

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>
    </div>





 </div>
</div>
@endsection