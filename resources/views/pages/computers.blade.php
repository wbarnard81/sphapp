@extends('layouts.app') 
@section('content')
<div class="form-inline">
  <h1 class="mr-auto">SPH Computers</h1>
  <a class="btn btn-dark mb-2" href="/computers/create">Add Computer</a>
</div>
<div class="well container">
  <table id="table_id" class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Site</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody id="tbody">
      @if(count($computers) > 0) @foreach($computers as $computer)
      <tr>
        <td><a class="btn btn-link" href="/computers/{{$computer->id}}/edit">{{$computer->username}}</a></td>
        <td>{{$computer->email}}</td>
        <td>{{$computer->site}}</td>
        <td>
          <a class="btn btn-outline-danger" href="/computers/{{$computer->id}}/delete">Delete</a>
        </td>
      </tr>
      @endforeach @else
      <p>No computers found to display</p>
      @endif
    </tbody>
  </table>
</div>
<hr class="mt-4">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
  $('#table_id').DataTable();
  } );

</script>
@endsection