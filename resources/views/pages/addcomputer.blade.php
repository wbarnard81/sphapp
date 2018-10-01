@include('layouts.app')

<div class="container">
    <h1>Add a computer to the list.</h1>
    {!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('serialnumber', 'Serial Number')}} {{Form::text('serialnumber', '', ['class' => 'form-control', 'placeholder'
        => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('username', 'User Name')}} {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}} {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('hostname', 'Host Name')}} {{Form::text('hostname', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('manufacturer', 'Manufacturer')}} {{Form::text('manufacturer', '', ['class' => 'form-control', 'placeholder'
        => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('model', 'Model')}} {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('cpumodel', 'CPU Model')}} {{Form::text('cpumodel', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    <div class="form-group">
        {{Form::label('memory', 'Memory')}} {{ Form::select('memory', ['1GB' => '1GB', '2GB' => '2GB', '3GB' => '3GB', '4GB' => '4GB',
        '6GB' => '6GB', '8GB' => '8GB', '10GB' => '10GB', '12GB' => '12GB', '16GB' => '16GB', '24GB' => '24GB', '32GB' =>
        '32GB'], null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{Form::label('officetype', 'Office Package')}} {{ Form::select('officetype', ['MS Office HB 2010' => 'MS Office HB 2010',
        'MS Office HB 2013' => 'MS Office HB 2013', 'MS Office HB 2016' => 'MS Office HB 2016', 'MS Office 365' => 'MS Office
        365'], null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{Form::label('officekey', 'Product Key')}} {{Form::text('officekey', '', ['class' => 'form-control', 'placeholder' => '...'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary mb-5', 'id' => 'addPcSubmit'])}} {!! Form::close() !!}

    <hr/>
</div>