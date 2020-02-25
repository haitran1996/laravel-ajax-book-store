@extends('layout.shop')
@section('title', 'Books')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="{{route('shop.home')}}">Home</a>
            <span class="breadcrumb-item active">Products</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h2>highly recommendes books</h2>
            <div class="recomended-sec">
                <div class="row">
                    @foreach($recommendes as $book)
                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <img src="{{asset("storage/images/".$book->image)}}" alt="img">
                                <h3>{{ $book->name }}</h3>
                                <h6><span class="price">{{ number_format($book->price) }} VND</span> / <a
                                        href="{{route('product.show', $book->id)}}">Buy Now</a></h6>
                                <div class="hover">
                                    <a href="{{route('product.show', $book->id)}}">
                                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <h2>recently added books to our store</h2>
            <div class="recent-book-sec">
                <div class="row">
                    @foreach($books as $key => $book)
                    <div class="col-md-3">
                        <div class="item">
                            <img src="{{ asset('storage/images/'.$book->image) }}" alt="img"
                                 style="    ">
                            <h3><a href="#">{{ $book->name }}</a></h3>
                            <h6><span class="price">$ {{number_format($book->price)}}
                                </span> / <a href="{{route('product.show', $book->id)}}">Buy Now</a></h6>
                        </div>
                    </div>
                        @endforeach
                </div>
                <div class="btn-sec">
{{--                    <a href="#" class="btn gray-btn">load More books</a>--}}
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </section>
    @endsection
