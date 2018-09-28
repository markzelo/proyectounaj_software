@extends('theme.default')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Dashboard</div>

  <div class="panel-body">

    {{-- @if(auth()->user()->is_client) --}}

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">editar un  producto seleccionado</h3>
      </div>

      <form method="post" action="{{ url("/admin/products/".$product->id."/edit") }}">
        {{ csrf_field() }}
        <div class="col-sm-4">
          <div class="form-group label-floating">
            <label class="control-label">nombre del producto</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name}}">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group label-floating">
            <label class="control-label">descripcion corta del producto</label>
            <input type="text" class="form-control" name="description" value="{{ $product->description}}">
          </div>
        </div>

         <div class="col-sm-4">
          <div class="form-group label-floating">
            <label class="control-label">precio</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price}}">
          </div>
        </div>

        <textarea class="form-control" placeholder="descripcion extensda del producto" rows="5" name="long_description">{{ $product->long_description }} </textarea>

        <button class="btn btn-primary">guardar cambios</button>
        
        <a href="{{ url('/admin/products') }}" class="btn btn-default">cancelar</a>

     </form>
        

      </div>

    </div>

  </div>

  {{--  @endif --}}


</div>
</div>

@endsection
