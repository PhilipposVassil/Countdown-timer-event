<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Events::all()->first();
        return view('welcome', compact('events'));
    }
}
