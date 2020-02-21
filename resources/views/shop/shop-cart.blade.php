@extends('layout.shop')
@section('title','Shop-cart')
@section('add-link')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
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
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your
                    delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>$59</span></li>
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$61</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{route('checkout.show')}}">
                            Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection
@section('add-js')
    <script>
        let proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            let $button = $(this);
            let oldValue = $button.parent().find('input').first().val();
            let newVal = 1;
            if ($button.hasClass('inc')) {
                newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    newVal = parseFloat(oldValue) - 1;
                }
                ;
            }
            $button.parent().find('input').first().val(newVal);
            let id = $button.parent().find('input').last().val();
            console.log(id);
            $.ajax({
                type: 'post',
                url: "{{route('cart')}}/" + id,
                data: {
                    'quantity': newVal
                },
                success: function (data) {
                    console.log(data);
                }
            });
        });
        $.ajaxSetup({
            headers: {
                'csrftoken': "{{csrf_token()}}"
            }
        });
    </script>
@endsection
