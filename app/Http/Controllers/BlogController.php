<?php

namespace App\Http\Controllers;

use App\Contracts\Blog\BlogServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogServiceInterface $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $posts = DB::table('blogs')->paginate(1);
        return view('blog.list',compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $this->blogService->create($request);
        return back();
    }
}
