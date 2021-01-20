@extends('dashboard.layouts.app')

@section('dashboardContent')

    <!-- Content Header (Page header) -->
    <section class="center">
        <h1>
            Edit this Event
        </h1>
    </section>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('events.update', $events->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('dashboard.events._form',['countdown' => $current_countdown,'checkbox' => true,'banner' => $events->image,'submitButtonText' => 'Update Banner'])
            </form>
        </div>
    </section>
    <!-- /.content -->

@endsection
