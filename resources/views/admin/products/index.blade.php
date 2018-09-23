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
      <div class="team">
      <div class="row">
        <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round" 
        >nuevos productos</a>

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
              <td>{{ $product->category ? $product->category->name:"general" }}</td>
              <td class="text-right">&euro;{{ $product->price }}</td>
              <td class="td-actions text-right">
              <button class="button" rel="tooltip" title="ver productos" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-user">
              </button>

               <button class="button" rel="tooltip" title="editar productos" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-edit">
              </button>

               <button class="button" rel="tooltip" title="ver productos" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-user">
              </button>

              </td>




            </tr>
            
             
          
            @endforeach

          </tbody>
        </table>
       {{--  {{ $products->links() }} --}}
        </div>
        </div>
        {{ $products->links()}}s

      </div>

    </div>

  </div>

  {{--  @endif --}}


</div>
</div>

@endsection
