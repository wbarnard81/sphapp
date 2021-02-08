@extends('layouts.app') 

@section('content')
    <div class="container bg-white">
        <form action="/settings/{{$siteName->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="siteName">Site Name</label>
            </div>
            <div class="d-flex">
                <input type="name" class="form-control col-4" name="siteName" aria-describedby="siteName" value="{{$siteName->siteName}}">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection