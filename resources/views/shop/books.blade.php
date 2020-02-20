@extends('layout.shop')
@section('title', 'Books')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Products</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h2>highly recommendes books</h2>
            <div class="recomended-sec">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img1.jpg" alt="img">
                            <h3>how to be a bwase</h3>
                            <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                            <div class="hover">
                                <a href="product-single.blade.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img2.jpg" alt="img">
                            <h3>How to write a book...</h3>
                            <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                            <span class="sale">Sale !</span>
                            <div class="hover">
                                <a href="product-single.blade.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img3.jpg" alt="img">
                            <h3>7-day self publish...</h3>
                            <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                            <div class="hover">
                                <a href="product-single.blade.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="images/img4.jpg" alt="img">
                            <h3>wendy doniger</h3>
                            <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                            <div class="hover">
                                <a href="product-single.blade.php">
                                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>recently added books to our store</h2>
            <div class="recent-book-sec">
                <div class="row">
                    @foreach($books as $key => $book)
                    <div class="col-md-3">
                        <div class="item">
                            <img src="{{ asset('storage/'.$book->image) }}" alt="img">
                            <h3><a href="#">{{ $book->name }}</a></h3>
                            <h6><span class="price">$ {{number_format($book->price)}}
                                </span> / <a href="{{route('cart')}}">Buy Now</a></h6>
                        </div>
                    </div>
                        @endforeach
                </div>
                <div class="btn-sec">
                    <a href="products.html" class="btn gray-btn">load More books</a>
                </div>
            </div>
        </div>
    </section>
    @endsection