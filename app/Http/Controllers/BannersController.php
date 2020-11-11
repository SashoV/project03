<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Requests\CreateBannerRequest;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners', ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createBanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBannerRequest $request)
    {
        try {
            $input = $request->all();

            $banner = new Banner();
            $banner->title = $input['title'];
            $banner->description = $input['description'];
            $banner->banner_url = $input['banner_url'];
            $banner->save();

            return redirect()->route('adminBanners')->withSuccess('New Banner created!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'An error occurred, try again!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.editBanner', ['banner' => $banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBannerRequest $request, $id)
    {
        $input = $request->all();

        try {
            $banner = Banner::findOrFail($id);
            $banner->title = $input['title'];
            $banner->description = $input['description'];
            $banner->banner_url = $input['banner_url'];
            $banner->save();

            return redirect()->route('adminBanners')->withSuccess('Banner updated!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('An error occurred, try again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
