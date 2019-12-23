@extends('layouts.app') 
@section('content')
<div class="container pb-5 mb-5">
    <h1>Edit the birthday.</h1>
</div>

<hr>

    <div class="container">
        <form method="POST" action="/birthdays/{{ $birthday->id }}">
            @method('patch')
            @csrf
            <fieldset>
                <div class="form-group row">
                    <label for="firstname" class="col-2 col-form-label">firstname Location:</label>
                    <input type="text" name="firstname" class="form-control col-6" id="firstname" required value="{{ $birthday->firstname }}">
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-2 col-form-label">Full Name:</label>
                    <input type="text" name="lastname" class="form-control col-6" id="lastname" required value="{{ $birthday->lastname }}">
                </div>
                <div class="form-group row">
                    <label for="birthday" class="col-2 col-form-label">birthday Number:</label>
                    <input type="text" name="birthday" class="form-control col-6" id="birthday" value="{{ $birthday->birthday }}">
                </div>
                <div class="form-group row">
                    <label for="site" class="col-2 col-form-label">site Address:</label>
                    <input type="text" name="site" class="form-control col-6" id="site" required value="{{ $birthday->site }}">
                </div>
                <div class="col-8 d-flex flex-row-reverse pr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection