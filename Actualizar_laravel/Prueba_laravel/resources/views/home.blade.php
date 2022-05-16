@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <br>
                    <a href="{{route('ver','1')}}">middleware ver..</a>
                    <br>
                    <a href="{{route('admin')}}">Admin ver..</a>
                </div>
                @if (session('mensaje'))
                    <div class="text-danger text-center">{{session('mensaje')}}</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
