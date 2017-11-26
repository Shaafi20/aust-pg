<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public $title = 'blog';

    public function __construct()
    {
        $this->middleware("auth")->except(["index", "show"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // home page
        $posts = Post::latest()->published()->paginate(2);

//        dd($blogs);
        return view('blog.index', compact( 'posts'))->withTitle($this->title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // showing the blog create page
        return view('blog.create')->withTitle($this->title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        // creating a new blog

        // validating inputs
        $this->validate($request, [
            'post_title' => 'required|string',
            'post_body' => 'required|string',
        ]);

        // storing in database

        $newBlog = Post::create([
            'title' => \request('post_title'),
            'slug' => \request('post_title'),
            'body' => \request('post_body'),
            'category_id' => 1,
            'author_id' => auth()->id(),
//            'post_status' => 'published'
        ]);

        if ($newBlog) {
            return redirect()->route('blog.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Post::where('slug', $slug) -> first();
        // displaying a single blog post
        $comments = $blog->comments;
        return view('blog.show', compact('blog', 'comments'))
            ->withTitle($this->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {
        //
//        dd($request->body);

        $blog->addComment($request->body, \auth()->id());

        return redirect()->route('blog.show', ['blog' => $blog->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        //
    }

}
