@include('layouts.app')

<div class="container">
    <h1>Add a computer to the list.</h1>
    {!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('serialnumber', 'Serial Number')}}
            {{Form::text('serialnumber', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('username', 'User Name')}}
            {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('hostname', 'Host Name')}}
            {{Form::text('hostname', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('manufacturer', 'Manufacturer')}}
            {{Form::text('manufacturer', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('model', 'Model')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('cpumodel', 'CPU Model')}}
            {{Form::text('cpumodel', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('memory', 'Memory')}}
            {{Form::text('memory', '', ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary', 'id' => 'addPcSubmit'])}}
    {!! Form::close() !!}
</div>