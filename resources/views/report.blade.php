@extends('layouts.app')



@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Reportar</div>
    <div class="panel-body">
        <form action="">
            <div class="form-group">
                <label for="category_id">Departamento</label>
                <select name="category_id" class="form-control">
                    <option value="0">General</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="severity_id">Severidad</label>
                <select name="severity_id" class="form-control">
                    <option value="M">Menor</option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Adjuntar imagen</label>
                <input type="file" id="archivo" name="archivo" accept="image/png, image/jpeg"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar incidente</button>
            </div>
        </form>       
    </div>
</div>
     
@endsection     
        
           

                 
   
 

