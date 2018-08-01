@extends('layouts.app')

@section('content')
  <div class="form-inline">
    <h1 class="mr-auto">SPH Computers</h1>
    <button class="btn btn-light mb-2"><a href="computers/create">Add Computer</a></button>
  </div>
    <div class="well">
            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Computer Name</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Model</th>
                        <th scope="col">CPU Model</th>
                        <th scope="col">Memory</th>
                      </tr>
                    </thead>
    @if(count($computers) > 1)
        @foreach($computers as $computer)

                            <tbody>
                              <tr>
                                <th scope="row"><button class="btn btn-sm btn-danger">Edit</button></th>
                                <td>{{$computer->serialnumber}}</td>
                                <td>{{$computer->username}}</td>
                                <td>{{$computer->hostname}}</td>
                                <td>{{$computer->manufacturer}}</td>
                                <td>{{$computer->model}}</td>
                                <td>{{$computer->cpumodel}}</td>
                                <td>{{$computer->memory}}</td>
                              </tr>
                              @endforeach
                              @else
                                  <p>No computers found to display</p>
                              @endif
                            </tbody>
                          </table>
            </div>

@endsection