<?php

namespace App\Http\Controllers;

use App\Contracts\User\UserServiceInterface;
use App\Http\Requests\RequestFormUser;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
//        if (!Gate::allows("crud-user")){
//            abort(403);
//        }

        $paginate =10;
        $users = $this->userService->all($paginate);
        return view('admin.user.list',compact('users'));
    }

    public function showFormCreate()
    {
        return view('admin.user.create');
    }

    public function store(RequestFormUser $request)
    {
        if ($this->userService->create($request)) {
            $notification = $this->getToarstrNoti('success', 'create');
        } else {
            $notification = $this->getToarstrNoti('error', 'create');
        }

        return back()->with('notification', $notification);

    }

    public function showFormEdit($id)
    {
        $user = $this->userService->getById($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(RequestFormUser $request, $id)
    {
        if ($this->userService->edit($request, $id)) {
            $notification = $this->getToarstrNoti('success', 'update');
        } else {
            $notification = $this->getToarstrNoti('error', 'update');
        }

        return back()->with('notification', $notification);
    }

    public function getToarstrNoti($typeAlert, $action)
    {
        if ($typeAlert == "success") {
            return array([
               'message' =>  "The user have been $action",
                'alert-type' => $typeAlert
            ]);
        }
        return array([
            'message' =>  "Something wrong, try again!",
            'alert-type' => $typeAlert
        ]);
    }

    public function delete($id)
    {
        if ($this->userService->delete($id)) {
            $notification = $this->getToarstrNoti('success', 'delete');
        } else {
            $notification = $this->getToarstrNoti('error', 'delete');
        }

        return back()->with('notification', $notification);
    }

    public function search(Request $request)
    {
//        if ($request->ajax()) {
//            $output = '';
//            $users = $this->userService->search($request->keyword);
//            if ($users) {
//                foreach ($users as $key => $user) {
//                    //
//
//                }
//            }
//
//            return Response($output);
//        }
        $users = $this->userService->search($request->keyword);
        return view('admin.user.index', compact('users'));
    }
}
