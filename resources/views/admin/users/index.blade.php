@extends('layouts.app')



@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Reportar</div>
    <div class="panel-body">

        <!–– seccion para visualizar los errores ––>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" value="{{old('password')}}">
            </div>
           
            <div class="form-group">
                <button class="btn btn-primary">Registrar incidente</button>
            </div>
        </form>
        

        <table>
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <td>test@test.com</td>
                <td>user test</td>
                <td>
                    <a href="btn btn-primary">Editar</a>
                    <a href="btn btn-danger">Baja</a>
                </td>
            </tbody>

        </table>

    </div>
</div>
     
@endsection     
        
           

                 
   
 

