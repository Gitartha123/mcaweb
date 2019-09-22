<?php

namespace App\Http\Controllers;

use App\adminpanel;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('AddPost');
    }


    public function store(Request $request)
    {
        $addpost = new adminpanel();
        $addpost->title = $request->title;
        $addpost->description = $request->details;

        $addpost->save();

        return redirect()->back()->with('message', 'Submitted Successfully');
    }
}
