@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <h1 class="text-center">Edit the return.</h1>
    </div>

    <hr>

    <div>
        <form method="POST" action="/pcreturns/{{ $pcreturns->id }}">
            @method('patch')
            @csrf
            <fieldset>
                <div class="form-group row">
                    <label for="site" class="col-2 col-form-label">Site Location:</label>
                    <input type="text" name="site" class="form-control col-6" id="site" required value="{{ $pcreturns->site }}">
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-2 col-form-label">Full Name:</label>
                    <input type="text" name="fullname" class="form-control col-6" id="fullname" required value="{{ $pcreturns->fullname }}">
                </div>
                <div class="form-group row">
                    <label for="telephone" class="col-2 col-form-label">Telephone Number:</label>
                    <input type="number" name="telephone" class="form-control col-6" id="telephone" value="{{ $pcreturns->telephone }}">
                </div>
                <div class="form-group row">
                    <label for="email" class="col-2 col-form-label">Email Address:</label>
                    <input type="text" name="email" class="form-control col-6" id="email" required value="{{ $pcreturns->email }}">
                </div>
                <div class="form-group row">
                    <label for="serialnumber" class="col-2 col-form-label">PC Serial Number:</label>
                    <input type="text" name="serialnumber" class="form-control col-6" id="serialnumber" value="{{ $pcreturns->serialnumber }}">
                </div>
                <div class="form-group row">
                    <label for="software" class="col-2 col-form-label">Software Required:</label>
                    <input type="text" name="software" class="form-control col-6" id="software" value="{{ $pcreturns->software }}">
                </div>
                <div class="form-group row">
                    <label for="notes" class="col-2 col-form-label">Notes:</label>
                    <textarea name="notes" class="form-control col-6" id="notes" rows="3">{{ $pcreturns->notes }}</textarea>
                </div>
                <div class="col-8 d-flex flex-row-reverse pr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div>
                    <p><strong>Submitted: </strong>{{$pcreturns->created_at->format('d M Y')}}</p>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
