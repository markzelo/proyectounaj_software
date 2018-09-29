@extends('theme.default')

@section('content')

<div class="pann"></div>
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
       {{--        opreacion  si existe una categoria ono es lo que se muestra para el crud --}}
              <td>{{ $product->category ? $product->category->name:"general" }}</td>
              <td class="text-right">&dollar;{{ $product->price }}</td>
              <td class="td-actions text-right">
              
              {{--   toda peticpn post requiere token --}}
              <form method='post' action="{{ url("/admin/products/".$product->id) }}" >
               {{ csrf_field() }}
               {{ method_field('DELETE') }}

               <a href="#" rel="tooltip" title="ver productos" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-info">
                </a>
                {{--   se parte la cadena --}}
                <a href="{{ url("/admin/products/".$product->id."/edit") }}" rel="tooltip" title="editar productos" class="btn btn-info btn-simple btn-xs">
                  <i class="fa fa-edit">
                  </a>
                  <a href="{{ url("/admin/products/".$product->id."/images") }}" rel="tooltip" title="ver imagenes del producto" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-camara">
                    </a>
                  <button type="submit" rel="tooltip" title="eliminar producto" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-times">
                    </button>
                  </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
       {{ $products->links() }}
        </div>
        </div>
        

      </div>

    </div>

  </div>

  {{--  @endif --}}


</div>
</div>

@endsection
