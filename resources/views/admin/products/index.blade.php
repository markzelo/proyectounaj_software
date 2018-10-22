@extends('theme.default')

@section('content')

<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">productos comerciales de mantenimiento</div>

  <div class="panel-body">

   

    <div class="panel panel-success">
     
      <div class="team">
      <div class="row">
        <div class="text-center">
        <a href="{{ url('/admin/products/create') }}" class="btn btn-danger btn-round">nuevos productos</a>
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
       {{--        opreacion  si existe una categoria ono es lo que se muestra para el crud --}}
              <td>{{ $product->category ? $product->category->name:"general" }}</td>
              <td class="text-right">&dollar;{{ $product->price }}</td>
              <td class="td-actions text-right">
              
              {{--   toda peticpn post requiere token --}}
              <form method='post' action="{{ url("/admin/products/".$product->id) }}" >
               {{ csrf_field() }}
               {{ method_field('DELETE') }}

               <a href="{{ url("/products/".$product->id) }}" rel="tooltip" title="ver productos" class="btn btn-sm btn-danger" >
               <span class="glyphicon glyphicon-eye-open"></span>
                </a>


                {{--   se parte la cadena --}}
                <a href="{{ url("/admin/products/".$product->id."/edit") }}" rel="tooltip" title="editar productos" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-pencil"></span>
                </a>

                  <a href="{{ url("/admin/products/".$product->id."/images") }}" rel="tooltip" title="ver imagenes del producto" 
                    class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-picture"></span>
                </a>

                  <button type="submit" rel="tooltip" title="eliminar producto" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>
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




</div>
</div>

@endsection
