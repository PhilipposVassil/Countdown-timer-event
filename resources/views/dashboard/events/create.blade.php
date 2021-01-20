@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Create an Event
        </h2>
    </div>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('events.store')}}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.events._form',['countdown' => $time,'checkbox' => false,'banner' => false,'submitButtonText' => 'Create Event'])
            </form>
        </div>
    </section>

@endsection

