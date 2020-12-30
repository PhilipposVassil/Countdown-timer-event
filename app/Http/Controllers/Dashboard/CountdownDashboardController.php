<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Countdown;
use Illuminate\Http\Request;

class CountdownDashboardController extends Controller
{
    public function validateCountdown(){

        return request()->validate([
            'countdown' => 'required|date',
        ]);
    }

    public function index()
    {
        $countdown = Countdown::all()->first();
        return view('dashboard.countdown.index' ,compact('countdown'));
    }

    public function create()
    {
        $countdown = Countdown::all()->first();

        if (!$countdown){
            $time_now =  date("Y-m-d\TH:i");
            $time =  date("Y-m-d\TH:i",strtotime ("+1 hour"));
            return view('dashboard.countdown.create' , compact('time_now','time'));
        }else{
            return redirect(route('countdown'));
        }
    }

    public function store(Request $request)
    {
        $this->validateCountdown();

        Countdown::create([
            'countdown_timer' => $request['countdown'],
        ]);

        return redirect(route('countdown'));
    }

    public function edit(Countdown $countdown)
    {
        $time_now =  date("Y-m-d\TH:i");
        $current = $countdown->countdown_timer;
        $current_countdown = date("Y-m-d\TH:i:s", strtotime($current));
//        ddd($current_countdown);
        return view('dashboard.countdown.edit' ,compact('countdown','time_now','current_countdown'));
    }

    public function update(Request $request, Countdown $countdown)
    {
        $this->validateCountdown();

        $countdown->update([
            'countdown_timer' => $request['countdown'],
        ]);

        if($request->disable == null){
            $countdown->update([
                'disable' => $request['enableHidden'],
            ]);
        }else{
            $countdown->update([
                'disable' => $request['disable'],
            ]);
        }

        return redirect(route('countdown'));
    }
}
