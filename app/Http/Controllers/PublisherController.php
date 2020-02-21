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
}
