@extends('layouts.app')
@section('content')
<div class="container bg-white p-4">
    <div>
        <h1 class="text-center">Add a return.</h1>
    </div>

    <hr>

    <div>
        <form method="POST" action="/pcreturns/create">
            @csrf
            <fieldset class="col-6 mx-auto">
                <div class="form-group row">
                    <label for="site" class="col-3 col-form-label">Site Location:</label>
                    <select class="form-control col-8" name="from_site">
                        @foreach($siteNames as $siteName)
                            <option value="{{$siteName->siteName}}">{{$siteName->siteName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-3 col-form-label">Full Name:</label>
                    <input type="text" name="fullname" class="form-control col-8" id="fullname" required>
                </div>
                <div class="form-group row">
                    <label for="telephone" class="col-3 col-form-label">Telephone Number:</label>
                    <input type="number" name="telephone" class="form-control col-8" id="telephone">
                </div>
                <div class="form-group row">
                    <label for="email" class="col-3 col-form-label">Email Address:</label>
                    <input type="text" name="email" class="form-control col-8" id="email" required>
                </div>
                <div class="form-group row">
                    <label for="serialnumber" class="col-3 col-form-label">PC Serial Number:</label>
                    <input type="text" name="serialnumber" class="form-control col-8" id="serialnumber">
                </div>
                <div class="form-group row">
                    <label for="software" class="col-3 col-form-label">Software Required:</label>
                    <input type="text" name="software" class="form-control col-8" id="software">
                </div>
                <div class="form-group row">
                    <label for="notes" class="col-3 col-form-label">Notes:</label>
                    <textarea name="notes" class="form-control col-8" id="notes" rows="3"></textarea>
                </div>
                <div class="col-8 d-flex flex-row-reverse pr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
