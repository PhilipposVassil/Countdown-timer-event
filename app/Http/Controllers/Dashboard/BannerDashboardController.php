<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerDashboardController extends Controller
{
    public function validateBanner(){

        return request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    public function index()
    {
        $banner = Banner::all()->first();
        return view('dashboard.banner.index' ,compact('banner'));
    }

    public function create()
    {
        $banner = Banner::all()->first();

        if (!$banner->image) {
            return view('dashboard.banner.create');
        }else{
            return redirect(route('banner'));
        }
    }

    public function store(Request $request)
    {
        if ($request['image'] != null){
            $this->validateBanner();

            $banner = Banner::create([
                'image' => $request['image'],
            ]);

            $bannerName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $bannerName);
            $banner->update([
                'image' => $bannerName
            ]);
        }else{
            $request->validate([
                'image' => 'required',
            ]);
        }

        return redirect(route('banner'));
    }

    public function edit(Banner $banner)
    {
        return view('dashboard.banner.edit' ,compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $this->validateBanner();

        if ($request['image'] != null){
            $bannerName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $bannerName);
            $banner->update([
                'image' => $bannerName
            ]);
        }

        return redirect(route('banner'));
    }
}
