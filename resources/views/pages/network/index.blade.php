@extends('layouts.app') 
@section('content')
<div class="container mb-5">
  <div >
    <h1 class="text-center">SPH Network Status</h1>
  </div>
</div>
<hr class="mt-3">
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Hostname</th>
        <th scope="col">IP Address</th>
        <th scope="col">Succeed Count</th>
        <th scope="col">Failed Count</th>
        <th scope="col">Status</th>
        <th scope="col">Last Success</th>
        <th scope="col">Last Failed</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item->host_name }}</td>
        <td>{{ $item->ip_address }}</td>
        <td>{{ $item->succeed_count }}</td>
        <td>{{ $item->failed_count }}</td>
        <td class="{{ ($item->last_ping_status == 'Succeeded') ? 'bg-success text-white text-uppercase text-center' : 'bg-danger text-white text-uppercase text-center' }}">{{ $item->last_ping_status }}</td>
        <td>{{ \Carbon\Carbon::parse($item->last_success_on)->diffForHumans() }}</td>
        <td>{{ \Carbon\Carbon::parse($item->last_failed_on)->diffForHumans() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-5 mb-5 text-white">.</div>
</div>
@endsection

@section('scripts')


@endsection