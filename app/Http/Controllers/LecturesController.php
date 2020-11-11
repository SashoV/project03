<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateLectureRequest;
use App\Lecture;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures = Lecture::paginate(6);
        return view('admin.lectures', ['lectures' => $lectures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.createLecture', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLectureRequest $request)
    {
        $input = $request->all();

        try {

            $lecture = new Lecture();
            $lecture->title = $input['title'];
            $lecture->category_id = $input['category_id'];
            $lecture->description = $input['description'];
            $lecture->date_added = $input['date_added'];

            $lecture->save();
            return redirect()->route('adminLectures')->withSuccess('Lecture saved!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('An error occurred, try again!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $lecture = Lecture::findOrFail($id);
            $lecture->delete();
            return redirect()->route('adminLectures')->withSuccess('Lecture deleted!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('An error occurred, try again!');
        }
    }
}
