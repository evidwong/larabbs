<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Request $request, Category $category, Topic $topic)
    {
        $topics = $topic->WithOrder($request->order)->where('category_id', $category->id)->with('user', 'category')->paginate(30);
        return view('topics.index', compact('category', 'topics'));
    }
}
