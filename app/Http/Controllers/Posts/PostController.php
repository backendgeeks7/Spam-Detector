<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\Posts\CreatePostRequest;
use Illuminate\Contracts\Foundation\Application;

class PostController extends Controller
{
    /**
     * Show Create a new Post Form View.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * @param CreatePostRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CreatePostRequest $request)
    {
        Post::create($request->validated());

        return back()->with(['success' => 'Your Post added successfully!']);
    }
}
