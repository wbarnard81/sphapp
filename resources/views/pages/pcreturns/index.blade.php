@extends('layouts.app') 
@section('content')
<div class="container">
  <div >
    <h1 class="text-center">SPH PC Returns</h1>
  </div>
</div>
<hr class="mt-3">
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Site</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
        <th scope="col">Serial Number</th>
        <th scope="col">Date Logged</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pcreturns as $pcreturn)
      <tr>
        <th scope="row"><a href="/pcreturns/{{ $pcreturn->id }}/edit">{{ $pcreturn->id }}</a></th>
        <td>{{ $pcreturn->site }}</td>
        <td>{{ $pcreturn->fullname }}</td>
        <td>{{ $pcreturn->email }}</td>
        <td>{{ $pcreturn->telephone }}</td>
        <td>{{ $pcreturn->serialnumber }}</td>
        <td>{{ \Carbon\Carbon::parse($pcreturn->created_at)->format('d/m/Y') }}</td>
        <td>
          <div>
            <form action="{{ url('/pcreturns', ['id' => $pcreturn->id]) }}" method="post">
                <input class="btn btn-danger btn-sm" type="submit" value="X" />
                @method('delete')
                @csrf
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('scripts')


@endsection