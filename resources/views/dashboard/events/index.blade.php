@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            Event home page

            @isset($events->image)
                <div class="float-right">
                    <a class="btn btn-default" href={{route('events.edit', $events->id)}}><i class="fas fa-cogs"></i>
                        Edit this Event
                    </a>
                </div>
            @endisset
        </h2>
    </div>

    @if($events == null)
        <div>
           There no events right now...
        </div>
        <div class="pt-3">
            <a class="btn btn-primary" href={{route('events.create')}}>Create an event</a>
        </div>
    @endif

    @isset($events->countdown_timer)
        @if($events->disable == "0")
            <div>
                Countdown promotion event is set for {{$events->countdown_timer}}!
            </div>
        @else
            <div>
                Countdown promotion event is set for {{$events->countdown_timer}} but you disable it earlier!
            </div>
        @endif
    @endisset

    @isset($events->image)
        <div class="pt-3">
            <div>
                Banner of the event:
            </div>
            <ul class="list-unstyled">
                <li>
                    <img class="resize" src="/banner/{{$events->image}}">
                </li>
            </ul>
        </div>
    @endisset

@endsection

