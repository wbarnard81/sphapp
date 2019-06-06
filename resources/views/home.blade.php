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

                    <h4>Welcome to the new SPH Web App.</h4>
                    <p><a href="/computers">Click here to see all the computers.</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 h-25">
            <div class="card">
                <div class="card-header">Random joke.</div>

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
                                <a href="/SPH/IT Policy.pdf" class="btn btn-secondary">IT Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p>
                                <a href="/SPH/OoO Email Policy.pdf" class="btn btn-secondary">Email Policy</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body">
                            <p>
                                <a href="/SPH/Extension List 2018.xlsx" class="btn btn-secondary">Extension List</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
