@extends('layouts.app')
@section('content')
<div class="container bg-white p-4">
    <div>
        <h1 class="text-center">Schedule a PC Move.</h1>
    </div>

    <hr>

    <div class="">
        <form method="POST" action="/pcmove/create">
            @csrf
            <fieldset class="col-6 mx-auto">
                <div class="form-group row">
                    <label for="from_name" class="col-3 col-form-label">From User:</label>
                    <input type="text" name="from_name" class="form-control col-8" id="from_name" required>
                </div>
                <div class="form-group row">
                    <label for="to_name" class="col-3 col-form-label">To User:</label>
                    <input type="text" name="to_name" class="form-control col-8" id="to_name" required>
                </div>
                <div class="form-group row">
                    <label for="from_site" class="col-3 col-form-label">From Site:</label>
                    <select class="form-control col-8" name="from_site">
                        @foreach($siteNames as $siteName)
                            <option value="{{$siteName->siteName}}">{{$siteName->siteName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="to_site" class="col-3 col-form-label">To Site:</label>
                    <select class="form-control col-8" name="to_site">
                        @foreach($siteNames as $siteName)
                            <option value="{{$siteName->siteName}}">{{$siteName->siteName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="move_date" class="col-3 col-form-label">Date of Move:</label>
                    <input type="date" name="move_date" class="form-control col-8">
                </div>
                <div class="form-group row">
                    <label for="contact_details" class="col-3 col-form-label">Contact Details:</label>
                    <input type="text" name="contact_details" class="form-control col-8" id="contact_details" placeholder="Email address or Phone Number">
                </div>
                <div class="col-8 d-flex flex-row-reverse pr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
