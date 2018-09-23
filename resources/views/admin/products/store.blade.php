@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Dashboard</div>

  <div class="panel-body">

    {{-- @if(auth()->user()->is_client) --}}

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">productos comerciales de mantenimiento </h3>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="col-md-2">Name</th>
            <th class="col-md-5">descripcion</th>
             
              <th class="text-center">category</th>
              <th class="text-right">precio</th>
              <th class="text-right">opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <div class="col-md-4">
              <div class="team-player">
              <img src="/images/nas.jpg" alt="Thumbnail Image" class="img-raised img-circle">
              <h4 class="title">
              <a href="{{ url('/products/'.$product->id) }}">{{ $product->id }}</a>
              <br>
              <small class="text-muted">{{ $product->name }}</small>
              </h4>
              <p class="description">{{ $product->description }}</p>
              
              </div>

            </div>
            @endforeach

          </tbody>
        </table>
       {{--  {{ $products->links() }} --}}
        

      </div>

    </div>

  </div>

  {{--  @endif --}}


</div>
</div>

@endsection
