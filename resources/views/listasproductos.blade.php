@extends('theme.default')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">Dashboard</div>

  <div class="panel-body">

   @if(auth()->user()->is_client) 

   <div class="section text-center">

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">productos comerciales de mantenimiento en produccion </h3>
      </div>
      <div class="team">
      <div class="row">
      
      
        
        @foreach($products as $product)
        <div class="col-md-4">
          <div class="team-player">
            <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="rounded" width="250"> 
            <h4 class="title">
              <a href="{{ url("/products/". $product->id) }}">{{ $product->name }}<a/><br>

            </h4>
            <h4 class="title">{{ $product->price }}<br/>

            </h4>
            <p class="description">{{ $product->description }}</p>
            
          </div>
        </div>
        @endforeach

         
        </div>
      
        </div>
        </div>
         <div class="row">
        {{ $products->links() }} 
           
         </div> 

      </div>

    </div>

  </div>

  @endif 


</div>
</div>

@endsection
