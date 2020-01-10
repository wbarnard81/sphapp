@extends('layouts.app') 
@section('content')
<div class="container">
  <div >
    <h1 class="text-center">SPH PC Moves</h1>
  </div>
</div>
<hr class="mt-3">
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">From User</th>
        <th scope="col">To User</th>
        <th scope="col">From Site</th>
        <th scope="col">To Site</th>
        <th scope="col">Move Date</th>
        <th scope="col">Contact Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pcmoves as $pcmove)
      <tr>
        <th scope="row"><a href="/pcmove/{{ $pcmove->id }}/edit">{{ $pcmove->id }}</a></th>
        <td>{{ $pcmove->from_name }}</td>
        <td>{{ $pcmove->to_name }}</td>
        <td>{{ $pcmove->from_site }}</td>
        <td>{{ $pcmove->to_site }}</td>
        <td>{{ $pcmove->move_date }}</td>
        <td>{{ $pcmove->contact_details }}</td>
        <td>
          <div>
            <form action="{{ url('/pcmove', ['id' => $pcmove->id]) }}" method="post">
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