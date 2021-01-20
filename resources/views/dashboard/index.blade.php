@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center pb-3">
        <h2>This Dashboard can manage some features of this website</h2>
    </div>

    <div class="form-group center">
        <label>Event Pages</label>
        <br>
        <a class="btn btn-primary" href={{route('events')}}>Click to manage event pages</a>
    </div>

@endsection
