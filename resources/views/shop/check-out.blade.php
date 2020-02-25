@extends('layout.shop')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="{{route('shop.home')}}l">Home</a>
            <span class="breadcrumb-item active">Check Out</span>
        </div>
    </div>
    <div id="edit-profile" class="tab-pane">
        <section class="panel">
            <div class="panel-body bio-graph-info">
                <div class="container">
                <h1>Check Out</h1>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="f-name" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="l-name" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="l-name" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="c-name" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Birthday</label>
                        <div class="col-lg-12">
                            <input type="date" class="form-control" id="b-day" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="email" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="mobile" placeholder=" ">
                        </div>
                    </div>
                    <section id="cart_items">
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Item</td>
                                        <td class="description"></td>
                                        <td class="price">Price</td>
                                        <td class="quantity">Quantity</td>
                                        <td class="total">Total</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($cart)
                                    @forelse($cart->items as $key => $item)
                                        <tr>
                                            <td class="cart_product">
                                                <a href=""><img src="{{asset('storage/images/'.$item->product->image)}}"
                                                                style="margin-left: -21px; width: 100px" alt=""></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href="{{route('product.show', $item->product->id)}}">{{$item->product->name}}</a></h4>
                                            </td>
                                            <td class="cart_price">
                                                <p>{{number_format($item->product->price)}} VND</p>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="pro-qty">
                                                    <input class="quantity_input" type="text" name="quantity" value="1"
                                                           autocomplete="on" size="2">
                                                    <input type="hidden" value="{{$key}}">
                                                </div>
                                            </td>
                                            <td class="cart_total">
                                                <p class="cart_total_price">{{number_format($item->totalPrice)}} VND</p>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="cart_quantity_delete" href="{{route('cart.delete', $key)}}"><i
                                                        class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No shop cart. Back to shop page!</td>
                                        </tr>
                                    @endforelse
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Check Out</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                        </div>
                    </section>
                </form>
            </div>
        </section>
    </div>
@endsection
