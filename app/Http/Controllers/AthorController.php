<?php

namespace App\Http\Controllers;

use App\Contracts\Author\AuthorServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorServiceInterface $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        $authors = DB::table('authors')->paginate(5);
        return view('admin.author.list', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $this->authorService->create($request);
        return back();
    }

    public function delete($id)
    {
        $this->authorService->delete($id);
        return back();
    }

    public function edit($id)
    {
        $author = $this->authorService->findById($id);
        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $this->authorService->edit($request, $id);
        return redirect()->route('admin.author.list');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $authors = $this->authorService->search($request->keyword);
            if ($authors) {
                $output = '';
                foreach ($authors as $key => $author) {
                    $output .= "<tr>".
                        "<td>$author->name</td>".
                        "<td></td>".
                        "<td>".
                        "<div class='btn-group'>".
                        "<a class='btn btn-primary' href=".route('admin.author.edit', $author->id)."><i class='icon_plus_alt2'></i></a>".
                        "<a class='btn btn-danger' href=".route('admin.author.delete', $author->id)."><i class='icon_close_alt2'></i></a>".
                        "</div>".
                        "</td></tr>";
                }
            };
            if ($output == '') {
                $output= "<tr><td>No data searched. Try another keyword!</td></tr>";
            }
            return Response($output);
        }
    }
}

