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
            <tr>
              <td class="text-center">{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->category ? $$product->category->name : "general" }}</td>
              <td class="text-right">&euro; {{ $product->price }}</td>
              <td class="td-actions text-right">

                <a href="#" rel="tooltip" title="Ver Productos" class="btn btn-info btn-simple btn-xs">
                  <i class="fa fa-info"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="fa fa-edit"></i>
                </a>
                 <button type="button" rel="tooltip" title="Ver imagenes del productos" class="btn btn-warning btn-simple btn-xs">
                  <i class="fa fa-info"></i>

                <button type="submit" rel="tooltip" title="eliminar" class="btn btn-danger btn-simple btn-xs">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        {{ $products->links() }}
        

      </div>

    </div>

  </div>

  {{--  @endif --}}


</div>
</div>

@endsection
