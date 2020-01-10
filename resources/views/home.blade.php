@extends('layouts.app') 
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="flex-row">
                        <div class="d-flex justify-content-around">
                            @if (Auth::check())
                            <div><a href="/computers" class="btn btn-primary btn-lg">SPH Computers.</a></div>
                            <div><a href="/birthdays" class="btn btn-success btn-lg">SPH Birthdays.</a></div>
                            <div><a href="/pcreturns/" class="btn btn-warning btn-lg">PC Returns.</a></div>
                            @endif
                            @guest
                            <div><a href="/pcreturns/create" class="btn btn-warning btn-lg">Log PC Return.</a></div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 h-25">
            <div class="card">
                <div class="card-header">SPH Policies and Procedures.</div>
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p>
                                    <a href="/SPH/IT Policy.pdf" target="blank" class="btn btn-sm btn-secondary">IT Policy</a>
                                </p>
                            </div>
                            <div class="col">
                                <p>
                                    <a href="/SPH/OoO Email Policy.pdf" target="blank" class="btn btn-sm btn-secondary">Email Policy</a>
                                </p>
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                <p>
                                    <a href="/SPH/Extension List 2019.pdf" target="blank" class="btn btn-sm btn-secondary">Extension List</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header">Birthdays this Month.</div>
        
                        <div class="card-body">
                            @foreach ($birthdays as $birthday)
                            <p>{{ $birthday->firstname }} {{ $birthday->lastname }} - {{ $birthday->site }}</p>
                            @endforeach
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
