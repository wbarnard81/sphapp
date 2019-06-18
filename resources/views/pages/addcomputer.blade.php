@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Add a computer to the list.</h1>
    {!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST']) !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('serialnumber', 'Serial Number')}} {{Form::text('serialnumber', '', ['class' => 'form-control', 'placeholder'
            => '...'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('username', 'User Name')}} {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('email', 'Email')}} {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('hostname', 'Host Name')}} {{Form::text('hostname', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('manufacturer', 'Manufacturer')}} {{Form::text('manufacturer', '', ['class' => 'form-control', 'placeholder'
            => '...'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('model', 'Model')}} {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('cpumodel', 'CPU Model')}} {{Form::text('cpumodel', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('memory', 'Memory')}} {{ Form::select('memory', ['1GB' => '1GB', '2GB' => '2GB', '3GB' => '3GB', '4GB' => '4GB',
            '6GB' => '6GB', '8GB' => '8GB', '10GB' => '10GB', '12GB' => '12GB', '16GB' => '16GB', '24GB' => '24GB', '32GB' =>
            '32GB'], null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('officetype', 'Office Package')}} {{ Form::select('officetype', ['MS Office HB 2010' => 'MS Office HB 2010',
            'MS Office HB 2013' => 'MS Office HB 2013', 'MS Office HB 2016' => 'MS Office HB 2016', 'MS Office HB 2019' => 'MS Office HB 2019', 'MS Office 365' => 'MS Office
            365'], null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('officekey', 'Product Key')}} {{Form::text('officekey', '', ['class' => 'form-control', 'placeholder' => '...'])}}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('site', 'Site')}} {{ Form::select('site', ['SPH - HO' => 'SPH - HO', 'SPH - Cape Town' => 'SPH - Cape Town', 'SPH - Somkhele' => 'SPH - Somkhele',
            'SPH - Lions' => 'SPH - Lions', 'SPH - Hernic' => 'SPH - Hernic', 'SPH - TC Smelter' => 'SPH - TC Smelter', 'SPH
            - Kleinkopje' => 'SPH - Kleinkopje', 'SPH - Glencore' => 'SPH - Glencore', 'SPH - Kathu' => 'SPH - Kathu', 'SPH -
            Northam' => 'SPH - Northam', 'SPH - Ferrobank' => 'SPH - Ferrobank', 'SPH - Witbank' => 'SPH - Witbank', 'SPH - Emang' => 'SPH - Emang', 'SPH - Wonderkop' => 'SPH - Wonderkop', 'SPH
            - Mafube' => 'SPH - Mafube', 'SPH - Zizwe' => 'SPH - Zizwe', 'Almar - HO' => 'Almar - HO'], null, ['class' => 'form-control'])
            }}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('hddtype', 'HDD Type')}} {{ Form::select('hddtype', ['HDD' => 'HDD', 'SSD' => 'SSD'], null, ['class' => 'form-control'])
            }}
        </div>
    </div>
    <div class="form-row">
        {{Form::submit('Submit', ['class' => 'btn btn-primary', 'id' => 'addPcSubmit'])}} {!! Form::close() !!}
        <a href="/computers" class="btn btn-dark ml-2">Cancel</a>
    </div>

    <hr/>
</div>
@endsection