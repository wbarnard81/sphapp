@include('layouts.app')

<div class="container pb-5 mb-5">
    <h1>Edit the selected computer.</h1>
    {!! Form::open(['action' => ['ComputersController@update', $computer->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('serialnumber', 'Serial Number')}}
            {{Form::text('serialnumber', $computer->serialnumber , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('username', 'User Name')}}
            {{Form::text('username', $computer->username , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('hostname', 'Host Name')}}
            {{Form::text('hostname', $computer->hostname , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('manufacturer', 'Manufacturer')}}
            {{Form::text('manufacturer', $computer->manufacturer , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('model', 'Model')}}
            {{Form::text('model', $computer->model , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('cpumodel', 'CPU Model')}}
            {{Form::text('cpumodel', $computer->cpumodel , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="form-group">
            {{Form::label('memory', 'Memory')}}
            {{Form::text('memory', $computer->memory , ['class' => 'form-control', 'placeholder' => 'Enter here...'])}}
        </div>
        <div class="row">
            <div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary', 'id' => 'addPcSubmit'])}}
                {!! Form::close() !!}
            </div>
            <div class="ml-2">
                {!! Form::open(['action' => ['ComputersController@destroy', $computer->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        </div>
</div>
