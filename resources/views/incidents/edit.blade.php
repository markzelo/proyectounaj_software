@extends('theme.default')



@section('content')


<div class="panel panel-primary">
    <div class="panel-heading">Consola</div>
    <div class="panel-body">

        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            </div>
        @endif

        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="organization">organizacion</label>
                <input type="text" name="organization" class="form-control" value="{{ old('organization', $incident->organization) }}">
            </div>

            <div class="form-group">
                <label for="category_id">Categoría</label>

                <select name="category_id" class="form-control">
                    <option value="0">General</option>

                    @foreach($categories as $category)
                       <option value="{{ $category->id }}" @if($incident->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                    
                </select>
            </div>
             <div class="form-group">
                <label for="severity">Severidad</label>
                <select name="severity" class="form-control">
                   <option value="M" @if($incident->severity=='M') selected @endif>Menor</option>
                    <option value="N" @if($incident->severity=='N') selected @endif>Normal</option>
                    <option value="A" @if($incident->severity=='A') selected @endif>Alta</option>
                </select>
            </div>
             <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $incident->title) }}">
            </div>
             <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control">{{ old('description', $incident->description) }}</textarea>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" name="photo" required>
                            
                        </div>
                        
                    </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>


        
@endsection     
        
          

                 
   
 

