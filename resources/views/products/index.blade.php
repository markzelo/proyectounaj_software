@extends('theme.default')

@section('content')

<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">productos comerciales en arrito activo</div>

  <div class="panel-body">

   

    <div class="panel panel-success">
     
      <div class="team">
      <div class="row">
       
      <table class="table">
        <thead>
          <tr>
            <td class="text-center">#</td>
           
           
              <th class="col-md-2">Nombre</th>
             
              <th >precio</th>
              <th >cantidad</th>
              <th >total</th>
            </tr>
          </thead>
          
          <tbody id="dashboard_my_cart_details">
            @foreach($my_cart_details as $detail)
            <tr>
              <td class="text-center">
                <img src="{{ $detail->product->featured_image_url }}" height="50"></td>
              <td>
                <a href="{{ url('/product/.$detail->product->id') }}" target="_blank"> {{ $detail->product->name }}</a>
              </td>
             
     
             
              <td >&dollar;{{ $detail->product->price }}</td>
              <td>{{ $detail->quantity }}</td>
               <td>&dollar;{{ $detail->quantity * $detail->product->price}}</td>
              
              
           <td class="td_actions"
              <form method='post' action="{{ url("/admin/products/".$detail->product->id) }}" >
               {{ csrf_field() }}
               {{ method_field('DELETE') }}

               <a href=" {{ url('/products/'.$detail->product->id) }}" target="_blank" rel="tooltip" title="ver productos" class="btn btn-sm btn-danger" >
                 <span class="glyphicon glyphicon-eye-open"></span>
               </a>

               <button type="submit" rel="tooltip" title="eliminar producto" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>
               </button>
             </form>
            
           </td>
            </tr>
            @endforeach

          </tbody>
        </table>
     
        </div>
        </div>
        

      </div>

    </div>

  </div>




</div>
</div>

@endsection
