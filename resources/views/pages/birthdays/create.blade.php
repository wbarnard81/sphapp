@extends('layouts.app') 
@section('content')
<div class="container pb-5 mb-5">
    <h1>Add a birthday.</h1>
</div>

<hr>

<div class="container">
    <form method="POST" action="/birthdays">
        @csrf
        <fieldset>
            <div class="form-group row">
                <label for="firstname" class="col-2 col-form-label">First Name:</label>
                <input type="text" name="firstname" class="form-control col-6" id="firstname" placeholder="John" required>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-2 col-form-label">Last Name:</label>
                <input type="text" name="lastname" class="form-control col-6" id="lastname" placeholder="Smith" required>
            </div>
            <div class="form-group row">
                <label for="birthday" class="col-2 col-form-label">Birthday:</label>
                <input type="text" name="birthday" class="form-control col-6" id="birthday" placeholder="mm/dd/yyyy" required>
            </div>
            <div class="form-group row">
                <label for="site" class="col-2 col-form-label">Site:</label>
                <input type="text" name="site" class="form-control col-6" id="site" placeholder="SPH HO" required>
            </div>
            <div class="col-8 d-flex flex-row-reverse pr-0">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </fieldset>
    </form>
</div>
@endsection