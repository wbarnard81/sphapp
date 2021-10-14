@extends('layouts.app') 

@section('content')
    <div class="container bg-white pb-4 mb-4">
        <div class="row">
            <div class="col-sm">
                <div class="col">
                    <form action="/settings" method="POST">
                        @csrf
                        <div class="form-group" style="margin: 0;">
                            <label for="siteName">
                                <h4>Add site name:</h4>
                            </label>
                        </div>
                        <div class="d-flex">
                            <input type="name" class="form-control col-6" name="siteName" aria-describedby="siteName">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>

                <div class="col mt-4">
                    <table class="table table-striped"  style="padding: 0; vertical-align:middle;">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Site Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siteNames as $key => $siteName)
                            <tr style="line-height: 1;">
                                <th style="padding: 0; vertical-align:middle;" scope="row">{{$key}}</th>
                                <td style="padding: 0; vertical-align:middle;">{{$siteName->siteName}}</td>
                                <td style="padding: 0; vertical-align:middle;">
                                    <div class="d-flex flex-row-reverse pr-2">
                                        <form action="/settings/{{$siteName->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm rounded-circle" style="padding: 0;">
                                            <svg 
                                                fill="none" 
                                                height="16" 
                                                stroke="#ff0000" 
                                                stroke-linecap="round" 
                                                stroke-linejoin="round" 
                                                stroke-width="2" 
                                                viewBox="0 0 24 24" 
                                                width="16" 
                                                xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                                <line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            </button>
                                        </form>
                                        <p class="mx-2">|</p>
                                        <div>
                                            <a href="/settings/{{$siteName->id}}/edit" class="btn btn-sm rounded-circle" style="padding: 0;">
                                                <svg 
                                                    height="16" 
                                                    viewBox="0 0 24 24" 
                                                    width="16" 
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polygon fill="none" points="14 2 18 6 7 17 3 17 3 13 14 2" stroke="#2F72FF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="3" x2="21" y1="22" y2="22"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-sm border-left">
                <h4 class="pb-2">Upload new:</h4>
                <form action="/settings/upload" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" id="it-policy" name="upload-type" value="it-policy" checked>
                            </div>
                        </div>
                        <label for="it-policy" class="form-control">IT Policy</label>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" id="email-policy" name="upload-type" value="email-policy">
                            </div>
                        </div>
                        <label for="email-policy" class="form-control">Email Policy</label>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" id="telephone-list" name="upload-type" value="telephone-list">
                            </div>
                        </div>
                        <label for="telephone-list" class="form-control">Telephone Extension List</label>
                    </div>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file-upload">
                            <label class="custom-file-label" for="file-upload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection