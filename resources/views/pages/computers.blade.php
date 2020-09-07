@extends('layouts.app')

@section('content')
<div class="form-inline d-flex justify-content-between container">
  <div>
    <h1 class="mr-auto">SPH Computers</h1>
  </div>
  <div>
    <a class="btn btn-dark mb-2" href="/computers/create">Add Computer</a>
  </div>
</div>

<div class="well container">
  <table id="table_id" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Serial Number</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Site</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @if(count($computers) > 0) @foreach($computers as $computer)
      <tr class="rows">
        <td>{{ $computer->serialnumber }}</td>
        <td><a class="btn btn-link" href="/computers/{{ $computer->id }}/edit">{{ $computer->username }}</a></td>
        <td>{{ $computer->email }}</td>
        <td>{{ $computer->site }}</td>
        <td class="text-center">
          <a href="/computers/{{ $computer->id }}/delete">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24px" height="24px">
              <path fill="#E04F5F" d="M504.1,256C504.1,119,393,7.9,256,7.9C119,7.9,7.9,119,7.9,256C7.9,393,119,504.1,256,504.1C393,504.1,504.1,393,504.1,256z"/>
              <path fill="#FFF" d="M285,256l72.5-84.2c7.9-9.2,6.9-23-2.3-31c-9.2-7.9-23-6.9-30.9,2.3L256,222.4l-68.2-79.2c-7.9-9.2-21.8-10.2-31-2.3c-9.2,7.9-10.2,21.8-2.3,31L227,256l-72.5,84.2c-7.9,9.2-6.9,23,2.3,31c4.1,3.6,9.2,5.3,14.3,5.3c6.2,0,12.3-2.6,16.6-7.6l68.2-79.2l68.2,79.2c4.3,5,10.5,7.6,16.6,7.6c5.1,0,10.2-1.7,14.3-5.3c9.2-7.9,10.2-21.8,2.3-31L285,256z"/>
            </svg>
          </a>
        </td>
      </tr>
      @endforeach @else
      <p>No computers found to display</p>
      @endif
    </tbody>
  </table>

</div>
@endsection

@push('javascript')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endpush
