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
                            @endif
                            <div><a href="/pcreturns" class="btn btn-warning btn-lg">Log PC Return.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 h-25">
            <div class="card">
                <div class="card-header">Birthdays Today.</div>

                <div class="card-body">

                    <h5>Stay tuned for more information.</h5>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">SPH Policies and Procedures.</div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card-body">
                            <p>
                                <a href="/SPH/IT Policy.pdf" target="blank" class="btn btn-secondary">IT Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p>
                                <a href="/SPH/OoO Email Policy.pdf" target="blank" class="btn btn-secondary">Email Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p>
                                <a href="/SPH/Extension List 2019.pdf" target="blank" class="btn btn-secondary">Extension List</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
