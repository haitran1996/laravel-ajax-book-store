@extends('admin.home')
@section('content')
    <form action="{{route('admin.blog.store')}}" method="post" >
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title"class="form-control" value="">
        </div>
        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" name="content"class="form-control" placeholder="" aria-describedby="helpId" value="">
        </div>
        <input type="submit" class="btn btn-success" value="Create">
    </form>
@endsection
