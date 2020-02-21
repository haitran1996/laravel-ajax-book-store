@extends('layout.admin')
@section('title','List Bublishers')
@section('repo','publisher')
@section('content')
@section('path')
    <li><i class="fa fa-user"></i><a href="{{route('admin.publisher.list')}}">Publisher</a></li>
    <li><i class="fa fa-th-list"></i>Publisher list</li>
@endsection
<!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Advanced Table
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon_profile"></i>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($publishers as $publisher)
                    <tr>
                        <td>{{ $publisher->name }}</td>
                        <td></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{route('admin.publisher.edit', $publisher->id)}}"><i class="icon_plus_alt2"></i></a>
                                <a class="btn btn-danger" href="{{route('admin.publisher.delete', $publisher->id)}}"><i class="icon_close_alt2"></i></a>
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
                {{$publishers->links()}}
            </div>
        </section>
    </div>
</div>
