<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('index');
    }
}
