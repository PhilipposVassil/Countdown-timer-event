<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Countdown;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countdown = Countdown::all()->first();
        $banner = Banner::all()->first();
        return view('welcome', compact('countdown','banner'));
    }
}
