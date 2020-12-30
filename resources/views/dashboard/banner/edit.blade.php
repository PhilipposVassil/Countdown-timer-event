@extends('dashboard.layouts.app')

@section('dashboardContent')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Banner
        </h1>
    </section>

    <!-- Main content -->
    <section class="content-header">
        <div class="container">
            <form method="POST" action="{{route('banner.update', $banner->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('dashboard.banner._form',['banner' => $banner->image,'submitButtonText' => 'Update Banner'])
            </form>
        </div>
    </section>
    <!-- /.content -->

@endsection
