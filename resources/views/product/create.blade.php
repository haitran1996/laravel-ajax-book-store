@extends('admin.home')
@section('content')
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="">Category</label><br>--}}
{{--            <select name="category" id="" class="form-control">--}}
{{--                @foreach($categories as $category)--}}
{{--                    <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif--}}
{{--                    >{{ $category->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="desc" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
        </div>
        <input type="submit" class="btn btn-success" value="Create">
    </form>
    @endsection
