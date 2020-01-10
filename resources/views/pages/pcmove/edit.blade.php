@extends('layouts.app') 
@section('content')
<div class="container">
    <div>
        <h1 class="text-center">Edit the return.</h1>
    </div>

    <hr>

    <div>
        <form method="POST" action="/pcmove/{{ $pcmove->id }}">
            @method('patch')
            @csrf
            <fieldset>
                <div class="form-group row">
                    <label for="from_name" class="col-2 col-form-label">From User:</label>
                    <input type="text" name="from_name" class="form-control col-6" id="from_name" required value="{{ $pcmove->from_name }}">
                </div>
                <div class="form-group row">
                    <label for="to_name" class="col-2 col-form-label">To User:</label>
                    <input type="text" name="to_name" class="form-control col-6" id="to_name" required value="{{ $pcmove->to_name }}">
                </div>
                <div class="form-group row">
                    <label for="from_site" class="col-2 col-form-label">From Site:</label>
                    <input type="text" name="from_site" class="form-control col-6" id="from_site" value="{{ $pcmove->from_site }}">
                </div>
                <div class="form-group row">
                    <label for="to_site" class="col-2 col-form-label">To Site:</label>
                    <input type="text" name="to_site" class="form-control col-6" id="to_site" required value="{{ $pcmove->to_site }}">
                </div>
                <div class="form-group row">
                    <label for="move_date" class="col-2 col-form-label">Date of Move:</label>
                    <input type="text" name="move_date" class="form-control col-6" id="move_date" value="{{ $pcmove->move_date }}">
                </div>
                <div class="form-group row">
                    <label for="contact_details" class="col-2 col-form-label">Contact Details:</label>
                    <input type="text" name="contact_details" class="form-control col-6" id="contact_details" value="{{ $pcmove->contact_details }}">
                </div>
                <div class="col-8 d-flex flex-row-reverse pr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection