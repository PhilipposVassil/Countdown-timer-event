@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Edit date and time for the Countdown
        </h2>
    </div>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('countdown.update', $countdown->id)}}">
                @csrf
                @method('PATCH')
                @include('dashboard.countdown._form',['countdown' => $current_countdown,'checkbox' => true,'submitButtonText' => 'Update Countdown'])
            </form>
        </div>
    </section>

@endsection

