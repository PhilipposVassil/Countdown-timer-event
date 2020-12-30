@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Add Banner
        </h2>
    </div>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.banner._form',['banner' => false,'submitButtonText' => 'Upload Banner'])
            </form>
        </div>
    </section>

@endsection

