@extends('layout.admin')
@section('title','update Category')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                    @csrf
                    <header class="panel-heading">
                        <h1>Create Categories</h1>
                    </header>
                    <div class="form-group">
                        <label><h3><i class="icon_profile"></i> Book Title</h3></label>
                        <input type="text" class="form-control" name="name" required value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                        <label><h3><i class="icon_calendar"></i> Description</h3></label>
                        <input type="text" class="form-control" name="description" required value="{{$category->description}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </section>
        </div>
    </div>

@endsection
