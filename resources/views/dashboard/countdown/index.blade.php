@extends('dashboard.layouts.app')

@section('dashboardContent')

    <div class="center">
        <h2>
            The Countdown page

            @isset($countdown)
                <div class="float-right">
                    <a class="btn btn-default" href={{route('countdown.edit', $countdown->id)}}><i class="fas fa-cogs"></i>
                        Edit Countdown
                    </a>
                </div>
            @endisset
        </h2>
    </div>

    @if($countdown == null)
        <div>
            There is no Countdown timer for promotion events...
        </div>
        <div class="pt-3">
            <a class="btn btn-primary" href={{route('countdown.create')}}>Set Countdown</a>
        </div>
    @endif

    @isset($countdown->countdown_timer)
        <div>
            Countdown promotion event is set for {{$countdown->countdown_timer}}!
        </div>
    @endisset

@endsection

