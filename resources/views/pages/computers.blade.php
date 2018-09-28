@extends('layouts.app') 
@section('content')
<div class="form-inline">
  <h1 class="mr-auto">SPH Computers</h1>
  <a class="btn btn-dark mb-2" href="/computers/create">Add Computer</a>
</div>
<div class="well">
  <table id="table_id" class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Serial Number</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Computer Name</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Model</th>
        <th scope="col">CPU Model</th>
        <th scope="col">Memory</th>
        <th scope="col">Office Package</th>
        <th scope="col">Product Key</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody id="tbody">
      @if(count($computers) > 0) @foreach($computers as $computer)
      <tr>
        <td>{{$computer->serialnumber}}</td>
        <td>{{$computer->username}}</td>
        <td>{{$computer->email}}</td>
        <td>{{$computer->hostname}}</td>
        <td>{{$computer->manufacturer}}</td>
        <td>{{$computer->model}}</td>
        <td>{{$computer->cpumodel}}</td>
        <td>{{$computer->memory}}</td>
        <td>{{$computer->officetype}}</td>
        <td>{{$computer->officekey}}</td>
        <td>
          <a class="btn btn-sm btn-success" href="/computers/{{$computer->id}}/edit">Edit</a>
          <a class="btn btn-sm btn-danger" href="/computers/{{$computer->id}}/delete">Delete</a>
        </td>
      </tr>
      @endforeach @else
      <p>No computers found to display</p>
      @endif
    </tbody>
  </table>
</div>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
  $('#table_id').DataTable();
  } );

</script>
@endsection