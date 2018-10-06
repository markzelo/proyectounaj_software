@extends('theme.default')



@section('content')
<div class="container">
 
    <div class="panel panel-primary">
 
     <div class="panel-heading">Server Side Datatable in Laravel 5</div>
 
      <div class="panel-body">    
 
          <table class="table table-bordered" id="product-table">
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Name</th>
                    <th>Latname</th>
                    <th>Phone</th>
                </tr>
            </thead>
          </table>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
            </tr>
            
          </tbody>
 
     </div>
 
    </div>
 
</div>
 
</div>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
 
<script src="http://code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection

@section('pageScript')
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
           
        ]
    });
});
@endsection