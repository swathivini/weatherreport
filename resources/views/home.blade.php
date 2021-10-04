@extends('layouts.app')

@section('content')

<div class="container">
   <!--  <div class="row justify-content-center">
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

                </div>
            </div>
        </div>
    </div> -->
    <h1>Weather Report</h1>
    <x-weather-widget place='Bangalore'/>
    <x-weather-widget place='Delhi'/>
    <x-weather-widget place='London'/>
</div> 
@endsection
