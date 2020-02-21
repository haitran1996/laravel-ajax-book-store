<?php

namespace App\Http\Controllers;

use App\Contracts\Publisher\PublisherServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    protected $publisherService;
    public function __construct(PublisherServiceInterface $publisherService)
    {
        $this->publisherService = $publisherService;
    }

    public function index()
    {
        $publishers = DB::table('publishers')->paginate(5);
        return view('admin.publisher.list', compact('publishers'));
    }


    public function create()
    {
        return view('admin.publisher.create');
    }

    public function store(Request $request)
    {
        $this->publisherService->create($request);
        return back();
    }

    public function delete($id)
    {
        $this->publisherService->delete($id);
        return back();
    }

    public function edit($id)
    {
        $publisher = $this->publisherService->findById($id);
        return view('admin.publisher.edit',compact('publisher'));
    }

    public function update(Request $request,$id)
    {
        $this->publisherService->edit($request,$id);
        return redirect()->route('admin.publisher.list');
    }


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $publishers = $this->publisherService->search($request->keyword);
            if ($publishers) {
                $output = '';
                foreach ($publishers as $key => $publisher) {
                    $output .= "<tr>".
                        "<td>$publisher->name</td>".
                        "<td></td>".
                        "<td>".
                        "<div class='btn-group'>".
                        "<a class='btn btn-primary' href=".route('admin.publisher.edit', $publisher->id)."><i class='icon_plus_alt2'></i></a>".
                        "<a class='btn btn-danger' href=".route('admin.publisher.delete', $publisher->id)."><i class='icon_close_alt2'></i></a>".
                        "</div>".
                        "</td></tr>";
                }
            };
            if ($output == '') {
                $output= "<tr><td>No data searched. Try another keyword!</td></tr>";
            }
            return Response($output);
        }
//        $users = $this->userService->search($request->keyword);
//        return view('admin.user.index', compact('users'));
    }
}
