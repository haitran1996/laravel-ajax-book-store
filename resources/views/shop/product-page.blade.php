@extends('layout.shop')
@section('title','Product page')
@section('add-link')
    <link rel="stylesheet" href="{{asset("css/comment.css")}}">
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="{{route('shop.home')}}l">Home</a>
            <span class="breadcrumb-item active">Terms and Condition</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">
            <h1>7 Day Self publish How to Write a Book</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                   data-target="#myCarousel">
                                    <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                    <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                    <img src="{{asset('storage/images/'.$book->image)}}" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="col-md-6 slider-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's printer took a galley of type and Scrambled it to make a type and typesetting
                        industry. Lorem Ipsum has been the book. </p>
                    <p>t has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                    <ul>
                        <li>
                            <span class="name">Price</span><span class="clm">:</span>
                            <span class="price final">{{number_format($book->price)}} VND</span>
                        </li>
                    </ul>
                    <div class="btn-sec">

                        <a class="btn" id="add-to-cart" href="{{route('cart.add',$book->id)}}">Add To cart</a>
                        <button class="btn black">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <!-- Contenedor Principal -->
            <div class="comments-container">
                <h1>Comments</h1>

                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <div class="comment-avatar"><img
                                    src="{{asset('storage/images/7-thoi-quen-cua-ban-tre-thanh-dat.jpg')}}"
                                    alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin
                                            Hai Tran</a>
                                    </h6>
                                    <span>hace 20 minutos</span>
                                </div>
                                    <div class="status-upload">
                                        <form>
                                            <textarea placeholder="Share your think about our products?"></textarea>
                                            <button type="submit" class="btn btn-success green"><i
                                                    class="fa fa-send-o"></i>
                                                Send
                                            </button>
                                        </form>
                                    </div><!-- Status Upload  -->
                                </div><!-- Widget Area -->
                            </div>
                    </li>
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img
                                    src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"
                                    alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin
                                            Ortiz</a>
                                    </h6>
                                    <span>hace 20 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                    laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                        <!-- Respuestas de los comentarios -->
                        <ul class="comments-list reply-list">
                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                        src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                        alt="">
                                </div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a>
                                        </h6>
                                        <span>hace 10 minutos</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                        iure
                                        laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                        src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"
                                        alt="">
                                </div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin
                                                Ortiz</a></h6>
                                        <span>hace 10 minutos</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                        iure
                                        laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img
                                    src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                    alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                    <span>hace 10 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                    laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="related-books">
        <div class="container">
            <h2>You may also like these book</h2>
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
        </div>
    </section>
@endsection
{{--@section('add-js')--}}
{{--    <script>--}}
{{--        $("#form-add-cart").submit(function(e) {--}}

{{--            e.preventDefault(); // avoid to execute the actual submit of the form.--}}

{{--            let form = $(this);--}}
{{--            $(function () {--}}
{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        "X-CSRFToken": getCookie("csrftoken")--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: "{{route('cart.add')}}",--}}
{{--                data: form.serialize(), // serializes the form's elements.--}}
{{--                // success: function(data)--}}
{{--                // {--}}
{{--                //     alert(data)// show response from the php script.--}}
{{--                // }--}}
{{--            }).done(function (data) {--}}
{{--                    console.log(data);--}}
{{--            });--}}


{{--        });--}}
{{--        </script>--}}

{{--    @endsection--}}
