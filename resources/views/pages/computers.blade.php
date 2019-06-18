@extends('layouts.app') 
@section('content')
<div class="form-inline d-flex justify-content-around">
  <div><h1 class="mr-auto">SPH Computers</h1></div>
  <div><a class="btn btn-dark mb-2" href="/computers/create">Add Computer</a></div>
</div>

<div class="well container">
  <table id="table_id" class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Serial Number</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Site</th>
        <th scope="col">Actions</th>
        <th hidden scope="col">Product Key</th>
      </tr>
    </thead>
    <tbody id="tbody">
      @if(count($computers) > 0) @foreach($computers as $computer)
      <tr class="rows">
        <td>{{ $computer->serialnumber }}</td>
        <td><a class="btn btn-link" href="/computers/{{ $computer->id }}/edit">{{ $computer->username }}</a></td>
        <td>{{ $computer->email }}</td>
        <td>{{ $computer->site }}</td>
        <td hidden>{{ $computer->officekey }}</td>
        <td class="text-center">
          <a style="font-size: 20px; color: red;" href="/computers/{{ $computer->id }}/delete"><ion-icon name="trash"></ion-icon></a>
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
@section('scripts')
    
$(document).ready( function () {
    $('#table_id').DataTable();
} );

@endsection
@endsection