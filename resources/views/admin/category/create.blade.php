@extends('layout.admin')
@section('title','Create Category')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                        @csrf
                    <header class="panel-heading">
                        <h1>Create Categories</h1>
                    </header>
                        <div class="form-group">
                            <label><h3><i class="icon_profile"></i> Book Title</h3></label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group">
                            <label><h3><i class="icon_calendar"></i> Description</h3></label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </section>
            </div>
        </div>

@endsection
