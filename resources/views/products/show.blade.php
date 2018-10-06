@extends('theme.default')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Dashboard</div>

  <div class="panel-body">

  

   <div class="section text-center">

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">productos</h3>
      </div>
      <div class="team">
      <div class="row">
        <div class="profile">
          <div class="team-player">
            <div class="avatar">
              <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="rounded" width="250"> 
            </div>

            <div class="name">
              <h4 class="title">{{ $product->name }}</h4>
               <h4 class="title">{{ $product->price }}</h4>
            </div>

            <div class="description text-center">
               <p>{{ $product->long_description }}</p>
            </div>
            {{-- abrir modal y que modal abrir --}}
            <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalEditCart">
              <i class="material-icons">+ </i>añadir al carrito</button>

           

           
            
          </div>
        </div>
          
        </div>
      
        </div>
        </div>
         
      </div>

    </div>

  </div>

 


</div>
</div>

            <!-- Modal -->
            <div class="modal fade"  id="modalEditCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" >
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button>
                    <h4 class="modal-title" id="myModalLabel">añade cantidad del producto elegido a carrito de compras</h4>
                  </div>
                  {{-- ruta absoluta --}}
                  <form action={{  "/products/". $product->id }} method="POST">
                    {{ csrf_field() }}
                   
                    <div class="modal-body">
                      <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar compra</button>
                      <button type="button" class="btn btn-primary">añadir compra</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
            

@endsection
@section('scripts')
    <script src="/js/product/addCart.js"></script>
@endsection