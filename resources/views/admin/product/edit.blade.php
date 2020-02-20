@extends('admin.home')
@section('content')
    <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control @error('name') alert-danger @enderror" value="{{$product->name}}">
        </div>
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" id="" class="form-control @error('price') alert-danger @enderror" placeholder="" aria-describedby="helpId" value="{{$product->price}}">
        </div>
        @error('price')
        <p class="text-danger">{{$message}}</p>
        @enderror
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
            <img src="{{ asset('storage/images/'.$product->image) }}" alt="No image">
            <input type="file" name="image" id="" class="form-control" value="{{$product->image}}">
        </div>
        @error('image')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="desc" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$product->desc}}">
        </div>
        @error('desc')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <input type="submit" class="btn btn-success" value="Create">
    </form>
@endsection
