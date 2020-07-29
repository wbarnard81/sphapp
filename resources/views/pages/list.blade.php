@extends('layouts.app') 
@section('content')
<div class="form-inline">
  <h1 class="mr-auto">SPH Computers</h1>
  <a class="btn btn-dark mb-2" href="/computers/create">Add Computer</a>
</div>
<div class="container-fluid">
  <table id="table_id" class="table table-bordered table-hover table-sm">
    <thead class="thead-dark">
    <tr>
      <th scope="col"><input type="text" id="ssn" placeholder="Search Serial Number"></th>
      <th scope="col"><input type="text" id="hostname" placeholder="Search Hostname"></th>
      <th scope="col"><input type="text" id="smanu" placeholder="Search Manufacturer"></th>
      <th scope="col"><input type="text" id="smodel" placeholder="Search Model"></th>
      <th scope="col"><input type="text" id="suname" placeholder="Search User Name"></th>
      <th scope="col"><input type="text" id="semail" placeholder="Search Email"></th>
      <th scope="col"><input type="text" id="scpu" placeholder="Search Processor"></th>
      <th scope="col"><input type="text" id="smem" placeholder="Search Memory"></th>
      <th scope="col"><input type="text" id="shdd" placeholder="Search HDD Type"></th>
      <th scope="col"><input type="text" id="ssite" placeholder="Search Site"></th>
      <th scope="col"><input type="text" id="soffice" placeholder="Search Office Product"></th>
    </tr>
      <tr>
        <th scope="col">Serial Number</th>
        <th scope="col">Hostname</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Model</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Processor</th>
        <th scope="col">Memory</th>
        <th scope="col">HDD Type</th>
        <th scope="col">Site</th>
        <th scope="col">Office Product</th>
      </tr>
    </thead>
    <tbody id="tbody">
      @if(count($computers) > 0) @foreach($computers as $computer)
      <tr>
        <td>{{$computer->serialnumber}}</td>
        <td>{{$computer->hostname}}</td>
        <td>{{$computer->manufacturer}}</td>
        <td>{{$computer->model}}</td>
        <td><a class="btn btn-link" href="/computers/{{$computer->id}}/edit">{{$computer->username}}</a></td>
        <td>{{$computer->email}}</td>
        <td>{{$computer->cpumodel}}</td>
        <td>{{$computer->memory}}</td>
        <td>{{$computer->hddtype}}</td>
        <td>{{$computer->site}}</td>
        <td>{{$computer->officetype}}</td>
      </tr>
      @endforeach @else
      <p>No computers found to display</p>
      @endif
    </tbody>
  </table>
</div>
<hr class="mt-4">

@endsection

@section('scripts')

  $('#ssn').on('keyup', filterCol);
  $('#smanu').on('keyup', filterCol);
  $('#smodel').on('keyup', filterCol);
  $('#suname').on('keyup', filterCol);
  $('#semail').on('keyup', filterCol);
  $('#smem').on('keyup', filterCol);
  $('#shdd').on('keyup', filterCol);
  $('#ssite').on('keyup', filterCol);
  $('#soffice').on('keyup', filterCol);

  function filterCol() {
    console.log(this.value.toUpperCase())
    let filterValue = this.value.toUpperCase();
    let dataTable = $('tr');
    for(let i = 0; i < dataTable.length; i++) {
      console.log(dataTable[i])
    }
  }

@endsection