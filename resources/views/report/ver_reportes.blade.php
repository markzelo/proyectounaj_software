@extends('layouts.app')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if(auth()->user()->is_support)

              <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">asignaciones reportadas por severidad </h3>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Severidad</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Titulo</th>
                  </tr>
                </thead>

                <tbody id="dashboard_incidents">
                  @foreach ($incidents as $incident)
                    <tr>
                      <td>
                        <a href="/ver">
                          {{ $incident->id }}
                        </a>
                      </td>
                      <td>{{ $incident->category->name}}</td>
                      <td>{{ $incident->severity_full }}</td>
                      <td>{{ $incident->state }}</td>
                      <td>{{ $incident->created_at }}</td>
                      <td>{{ $incident->title_short }}</td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>

          





                </div>
            </div>
       
@endsection
