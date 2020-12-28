<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Countdown;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
