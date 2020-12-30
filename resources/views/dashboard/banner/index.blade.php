@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Banner of the home page

            @isset($banner->image)
                <div class="float-right">
                    <a class="btn btn-default" href={{route('banner.edit', $banner->id)}}><i class="fas fa-cogs"></i>
                        Edit Banner
                    </a>
                </div>
            @endisset
        </h2>
    </div>

    @if($banner == null)
        <div>
            Banner image does not exist...
        </div>
        <div class="pt-3">
            <a class="btn btn-primary" href={{route('banner.create')}}>Upload Banner image</a>
        </div>
    @endif

    @isset($banner->image)
        <ul class="list-unstyled">
            <li class="center">
                <img class="resize" src="/banner/{{$banner->image}}">
            </li>
        </ul>
    @endisset

@endsection

