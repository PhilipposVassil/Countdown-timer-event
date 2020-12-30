@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center pb-3">
        <h2>This Dashboard can manage some features of this website</h2>
    </div>
    <div class="form-row">
        <div class="form-group center col-md-6">
            <label>Banner Pages</label>
            <br>
            <a class="btn btn-primary" href={{route('banner')}}>Click to manage Banner pages</a>
        </div>

        <div class="form-group center col-md-6">
            <label>Countdown Pages</label>
            <br>
            <a class="btn btn-primary" href={{route('countdown')}}>Click to manage Countdown Pages</a>
        </div>
    </div>

@endsection
