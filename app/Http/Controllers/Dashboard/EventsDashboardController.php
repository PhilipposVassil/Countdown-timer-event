<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsDashboardController extends Controller
{
    public function validateEvents(){

        return request()->validate([
            'countdown' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    public function index()
    {
        $events = Events::all()->first();
        return view('dashboard.events.index' ,compact('events'));
    }

    public function create()
    {
        $events = Events::all()->first();

        if (!$events) {
            $time_now =  date("Y-m-d\TH:i");
            $time =  date("Y-m-d\TH:i",strtotime ("+1 hour"));
            return view('dashboard.events.create', compact('time_now','time'));
        }else{
            return redirect(route('events'));
        }
    }

    public function store(Request $request)
    {
        if ($request['image'] != null){
            $this->validateEvents();

            $events = Events::create([
                'countdown_timer' => $request['countdown'],
                'image' => $request['image'],
            ]);

            $bannerName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $bannerName);
            $events->update([
                'image' => $bannerName
            ]);
        }else{
            $request->validate([
                'image' => 'required',
            ]);
        }

        return redirect(route('events'));
    }

    public function edit(Events $events)
    {
        $time_now =  date("Y-m-d\TH:i");
        $current = $events->countdown_timer;
        $current_countdown = date("Y-m-d\TH:i:s", strtotime($current));
//        ddd($current_countdown);
        return view('dashboard.events.edit' ,compact('events','time_now','current_countdown'));
    }

    public function update(Request $request, Events $events)
    {
        $this->validateEvents();

        $events->update([
            'countdown_timer' => $request['countdown'],
        ]);

        if($request->disable == null){
            $events->update([
                'disable' => $request['enableHidden'],
            ]);
        }else{
            $events->update([
                'disable' => $request['disable'],
            ]);
        }

        if ($request['image'] != null){
            $bannerName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $bannerName);
            $events->update([
                'image' => $bannerName
            ]);
        }

        return redirect(route('events'));
    }
}
