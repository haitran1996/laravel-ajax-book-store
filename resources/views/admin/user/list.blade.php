@extends('layout.admin')
@section('title','List Users')
@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.home') }}">Home</a></li>
                    <li><i class="fa fa-table"></i>Table</li>
                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class="icon_profile"></i> Name</th>
                            <th><i class="icon_calendar"></i> Created date</th>
                            <th><i class="icon_mail_alt"></i> Email</th>
                            <th><i class="icon_pin_alt"></i> Role</th>
                            <th></th>
                        </tr>
                        @forelse($users as $user)
                            <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->created_date  }}</td>
                            <td>{{ $user->email }}</td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{route('admin.user.edit', $user->id)}}"><i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                    <a class="btn btn-danger" href="{{route('admin.user.delete', $user->id)}}"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td>No user to display!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{$users->links()}}
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
    @endsection
