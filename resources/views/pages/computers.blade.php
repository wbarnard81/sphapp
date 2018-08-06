@extends('layouts.app')

@section('content')
  <div class="form-inline">
    <h1 class="mr-auto">SPH Computers</h1>
    <button class="btn btn-dark mb-2"><a href="/computers/create">Add Computer</a></button>
</div>
<div class="well">
  <table id="computers-datatable" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Serial Number</th>
          <th scope="col">User Name</th>
          <th scope="col">Computer Name</th>
          <th scope="col">Manufacturer</th>
          <th scope="col">Model</th>
          <th scope="col">CPU Model</th>
          <th scope="col">Memory</th>
          <th scope="col">Actions</th>

        </tr>
      </thead>
      <tbody>
        @if(count($computers) > 1)
          @foreach($computers as $computer)
            <tr>
              <td>{{$computer->serialnumber}}</td>
              <td>{{$computer->username}}</td>
              <td>{{$computer->hostname}}</td>
              <td>{{$computer->manufacturer}}</td>
              <td>{{$computer->model}}</td>
              <td>{{$computer->cpumodel}}</td>
              <td>{{$computer->memory}}</td>
              <td>
                <a class="btn btn-sm btn-success" href="/computers/{{$computer->id}}/edit">Edit</a>
                <a class="btn btn-sm btn-danger" href="/computers/{{$computer->id}}/delete">Delete</a>
              </td>
            </tr>
          @endforeach
        @else
          <p>No computers found to display</p>
        @endif
      </tbody>
  </table>
</div>

@endsection