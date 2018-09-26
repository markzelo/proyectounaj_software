@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Dashboard</div>

  <div class="panel-body">

    {{-- @if(auth()->user()->is_client) --}}

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title"> imagenes del servicio "{{ $product->name }}" </h3>
      </div>
      
      <form method="post" action="" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- required se exige subir un archivo vaklidacion --}}
        <input type="file" name="photo" required>
        <button type="submit" class="btn btn-primary btn-roun">subir nueva imagen</button>
         <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">volver al listado</a>

      </form>
      <hr>
     <div class="row">
      @foreach ($images as $image)
      <div class="col-md-4">
        <div class="panel-body">
          <img src="{{ $image->url }}" width="250">
           <button type="submit" class="btn btn-danger btn-roun">eliminar imagen</button>
        </div>
      </div>
      @endforeach
     </div>
    </div>
  </div>
  {{--  @endif --}}

</div>
</div>

@endsection
