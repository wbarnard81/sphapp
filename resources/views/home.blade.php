@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="flex-row">
                        <div class="d-flex justify-content-around">
                            @if (Auth::check())
                            <div><a href="/computers" class="btn btn-primary btn-lg">SPH Computers.</a></div>
                            <div><a href="/birthdays" class="btn btn-success btn-lg">SPH Birthdays.</a></div>
                            <div><a href="/pcreturns" class="btn btn-warning btn-lg">PC Returns.</a></div>
                            <div><a href="/pcmove" class="btn btn-info btn-lg">PC Moves.</a></div>
                            @endif
                            @guest
                            <div><a href="/pcreturns/create" class="btn btn-warning btn-lg">Log PC Return.</a></div>
                            <div><a href="/pcmove/create" class="btn btn-info btn-lg">Log PC Movement.</a></div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 h-25">
            <div class="card">
                <div class="card-header">SPH Policies and Procedures.</div>
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <div class="col text-center">
                                <p>
                                    <a href="/SPH/IT Policy.pdf" target="blank" class="btn btn-sm btn-secondary">IT Policy</a>
                                </p>
                            </div>
                            <div class="col text-center">
                                <p>
                                    <a href="/SPH/OoO Email Policy.pdf" target="blank" class="btn btn-sm btn-secondary">Email Policy</a>
                                </p>
                            </div>
                            <div class="col text-center">
                                <p>
                                    <a href="/SPH/Extension List 2021.pdf" target="blank" class="btn btn-sm btn-secondary">Extension List</a>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <span class="align-middle text-warning">
                    <svg fill="currentColor" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 9v-1.974h2v1.974h5v-4h2v4h5v-2h2v2h.755c1.803.091 3.243 1.646 3.243 3.519 0 .961-.382 1.829-.998 2.458v9.023h-22v-9.02c-.43-.438-.747-.993-.9-1.621-.067-.276-.1-.558-.1-.841 0-2.009 1.629-3.479 3.242-3.518h.758zm17 11h-18v2h18v-2zm-18-4.027v2.027h18v-2.027l-.407.025c-.775 0-1.541-.27-2.154-.79-.576.488-1.333.789-2.155.789-.812 0-1.566-.295-2.142-.779-.581.487-1.341.78-2.136.78-.807 0-1.575-.292-2.149-.78-.586.491-1.346.78-2.137.78-.775 0-1.526-.26-2.16-.79-.561.479-1.328.79-2.154.79l-.406-.025zm.29-4.973c-.627.049-1.243.635-1.288 1.421-.051.887.632 1.585 1.454 1.576 1.176-.014 1.915-.86 2.117-1.997.217.88.986 1.975 2.145 1.996 1.156.021 1.99-.959 2.161-1.958l.008-.038c.199 1.04.99 1.996 2.109 1.996 1.155 0 1.917-.872 2.172-1.996.248 1.138 1.035 1.994 2.117 1.997 1.108.003 1.955-.928 2.203-1.997.188.828.804 1.985 2.051 1.998.759.008 1.46-.65 1.46-1.483 0-.837-.649-1.481-1.318-1.517l-17.391.002zm.863-4.451c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.154-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809zm13.999-.026c-1.896-.621-1.35-3.444.891-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.884 1.809zm-6.999-2c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809z"/></svg>
                    </span>
                    <span class="align-middle ml-2">Birthdays this Month.</span>
                </div>

                <div class="card-body">
                    <div class="row justify-content-around row-cols-4">
                        @foreach ($birthdays as $birthday)
                            <p class="col-md-auto border border-success">{{ $birthday->firstname }} {{ $birthday->lastname }} ({{ $birthday->site }})</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
