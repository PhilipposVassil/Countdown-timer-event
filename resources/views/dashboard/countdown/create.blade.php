@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Choose date and time for the Countdown
        </h2>
    </div>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('countdown.store')}}">
                @csrf
                @include('dashboard.countdown._form',['countdown' => $time,'checkbox' => false,'submitButtonText' => 'Add Countdown'])
            </form>
        </div>
    </section>

@endsection

