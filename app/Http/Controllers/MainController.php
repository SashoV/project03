<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('home.home', ['categories' => $categories]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $banners = Banner::all();
        $category = Category::findOrFail($id);
        $i = count($category->lectures);
        foreach ($category->lectures as $lecture) {
            $lecture->index = $i--;
        }

        return view('home.category', ['categories' => $categories, 'category' => $category, 'banners' => $banners]);
    }
}
