@extends('layouts.app')

@section('content')
<div class="container p-5 mb-5 bg-white">
    <div>
        <form action="/computers/{{$computer->id}}" method="POST"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="d-flex justify-content-between">
                <a href="/computers" class="btn btn-secondary mb-3">
                    < Back</a>
                        <div>
                            <button class="btn btn-success">Update ></button>
                        </div>
            </div>
            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Username</div>
                        </div>
                        <input type="text" class="form-control text-right" name="username" value="{{ $computer->username }}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Serial Number</div>
                        </div>
                        <input type="text" class="form-control text-right" name="serialnumber" value="{{$computer->serialnumber}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Hostname</div>
                        </div>
                        <input type="text" class="form-control text-right" name="hostname" value="{{$computer->hostname}}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Email</div>
                        </div>
                        <input type="text" class="form-control text-right" name="email" value="{{$computer->email}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Manufacturer</div>
                        </div>
                        <input type="text" class="form-control text-right" name="manufacturer" value="{{$computer->manufacturer}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Model</div>
                        </div>
                        <input type="text" class="form-control text-right" name="model" value="{{$computer->model}}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">CPU</div>
                        </div>
                        <input type="text" class="form-control text-right" name="cpumodel" value="{{$computer->cpumodel}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Memory</div>
                        </div>
                        <select class="form-control" name='memory'>
                            @foreach(['1GB', '2GB', '3GB', '4GB', '6GB', '8GB', '10GB', '12GB', '16GB', '24GB', '32GB'] as $memory)
                            <option value="{{$memory}}" {{ $memory == $computer->memory ? 'selected' : '' }}>{{$memory}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">HDD Type</div>
                        </div>
                        <select class="form-control" name='hddtype'>
                            @foreach(['HDD', 'SSD'] as $hddtype)
                            <option value="{{$hddtype}}" {{ $hddtype == $computer->hddtype ? 'selected' : '' }}>{{$hddtype}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Office Type</div>
                        </div>
                        <select class="form-control" name='officetype'>
                            @foreach(['MS Office HB 2010', 'MS Office HB 2013', 'MS Office HB 2016', 'MS Office HB 2019', 'MS Office 365'] as $officetype)
                            <option value="{{$officetype}}" {{ $officetype == $computer->officetype ? 'selected' : '' }}>{{$officetype}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-5 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Office Key</div>
                        </div>
                        <input type="text" class="form-control text-right" name="officekey" value="{{$computer->officekey}}">
                    </div>
                </div>
                <div class="col-3 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Site</div>
                        </div>
                        <select class="form-control" name='site'>
                            @foreach($siteNames as $siteName)
                            <option value="{{$siteName->siteName}}" {{ $siteName->siteName == $computer->site ? 'selected' : '' }}>{{$siteName->siteName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <p>
                <strong>Created:</strong> {{$computer->created_at->format('d M Y')}} | <strong>Updated:</strong> {{$computer->updated_at->format('d M Y')}}
            </p>

            @if($computer->laptop_policy)
            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="form-group">
                        <a class="btn btn-primary" href="{{ url($computer->laptop_policy) }}">Laptop Policy</a>
                    </div>
                    <div class="form-group">
                    <label for="laptop_policy">Upload New Laptop Policy</label>
                    <input type="file" class="form-control-file" name="laptop_policy">
                    
                    </div>
                </div>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection