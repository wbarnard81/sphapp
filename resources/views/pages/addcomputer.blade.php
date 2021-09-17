@extends('layouts.app')
@section('content')
<div class="container p-5 mb-5 bg-white">
    <div>
        <form action="/computers" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-between">
                <a href="/computers" class="btn btn-secondary mb-3">< Back</a>
                <div>
                    <button class="btn btn-success">Submit ></button>
                </div>
            </div>
            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Username</div>
                        </div>
                        <input type="text" class="form-control text-right" name="username" value="{{old('username')}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Serial Number</div>
                        </div>
                        <input type="text" class="form-control text-right" name="serialnumber" value="{{old('serialnumber')}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Hostname</div>
                        </div>
                        <input type="text" class="form-control text-right" name="hostname" value="{{old('hostname')}}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Email</div>
                        </div>
                        <input type="text" class="form-control text-right" name="email" value="{{old('email')}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Manufacturer</div>
                        </div>
                        <input type="text" class="form-control text-right" name="manufacturer" value="{{old('manufacturer')}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Model</div>
                        </div>
                        <input type="text" class="form-control text-right" name="model" value="{{old('model')}}">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">CPU</div>
                        </div>
                        <input type="text" class="form-control text-right" name="cpumodel" value="{{old('cpumodel')}}">
                    </div>
                </div>
                <div class="col-4 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Memory</div>
                        </div>
                        <select class="form-control" name='memory'>
                            @foreach(['1GB', '2GB', '3GB', '4GB', '6GB', '8GB', '10GB', '12GB', '16GB', '24GB', '32GB'] as $memory)
                            <option value="{{$memory}}" {{ $memory == old("memory") ? 'selected' : '' }}>{{$memory}}</option>
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
                            <option value="{{$hddtype}}" {{ $hddtype == old("hddtype") ? 'selected' : '' }}>{{$hddtype}}</option>
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
                            <option value="{{$officetype}}" {{ $officetype == old("officetype") ? 'selected' : '' }}>{{$officetype}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-5 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Office Key</div>
                        </div>
                        <input type="text" class="form-control text-right" name="officekey" value="{{old('officekey')}}">
                    </div>
                </div>
                <div class="col-3 mb-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Site</div>
                        </div>
                        <select class="form-control" name='site'>
                            @foreach($siteNames as $siteName)
                            <option value="{{$siteName->siteName}}" {{ $siteName->siteName == old("site") ? 'selected' : '' }}>{{$siteName->siteName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4 my-2">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Laptop Policy</label>
                        <input type="file" class="form-control-file" name="laptop_policy">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection