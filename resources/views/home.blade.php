@extends('layouts.app')
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:7px;
    }
</style>

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

                   <h1>{{ ucfirst(Auth::user()->name) }} Your Profile Details</h1>
                    <table style='width:100%'>
                        <tr>
                            <th>Name</th>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone No.</th>
                            <td>{{Auth::user()->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{Auth::user()->address}}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{Auth::user()->city}}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{Auth::user()->state}}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{Auth::user()->country}}</td>
                        </tr>
                        <tr>
                            <th>Zip</th>
                            <td>{{Auth::user()->zip}}</td>
                        </tr>
                    
                        
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
