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
        $posts = DB::table('blogs')->paginate(2);
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

    public function delete($id)
    {
        $this->blogService->delete($id);
        return back();
    }

    public function edit($id)
    {
        $post = $this->blogService->findById($id);
        return view('blog.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
        $this->blogService->edit($request,$id);
        return redirect()->route('admin.blog.list');
    }
}
