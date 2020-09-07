@extends('layouts.app') 

@section('content')
    <div class="container bg-white pb-4 mb-4">
        <form action="/settings" method="POST">
            @csrf
            <div class="form-group">
                <label for="siteName">Site Name</label>
            </div>
            <div class="d-flex">
                <input type="name" class="form-control col-4" name="siteName" aria-describedby="siteName">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

        <div class="col-5 mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Site Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siteNames as $key => $siteName)
                    <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$siteName->siteName}}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/settings/{{$siteName->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">DEL</button>
                                </form>
                                <p class="mx-2">/</p>
                                <div>
                                    <a href="/settings/{{$siteName->id}}/edit" class="btn btn-sm btn-secondary">EDIT</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection