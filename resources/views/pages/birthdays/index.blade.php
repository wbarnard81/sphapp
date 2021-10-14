@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mr-auto">SPH Birthdays</h1>
    <a class="btn btn-warning btn-sm mb-2" href="/birthdays/create">Add Birthday</a>
</div>

<hr class="mt-3">

<div class="container">
    <table id="table_id" class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Site</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($birthdays as $birthday)
            <tr class="rows">
                <td class="text-center"><a href="/birthdays/{{ $birthday->id }}/edit">{{ $birthday->id }}</a></td>
                <td>{{ $birthday->firstname }} {{ $birthday->lastname }}</td>
                <td>{{ \Carbon\Carbon::parse($birthday->birthday)->format('d F') }}</td>
                <td>{{ $birthday->site }}</td>
                <td>
                    <div>
                        <form action="{{ url('/birthdays', ['id' => $birthday->id]) }}" method="post">
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

@push('javascript')
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
@endpush