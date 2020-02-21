@extends('layout.admin')
@section('repo','Product')
@section('content')
@section('path')
    <li><i class=""></i><a href="{{route('product.list')}}">Product</a></li>
    <li><i class="fa fa-th-list"></i>Product list</li>
@endsection
<div class="row">
    <div class="col-lg-12">

        <section class="panel">
            <header class="panel-heading">
                Advanced Table
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>STT</th>
                    <th><i class="icon_profile"></i>Name</th>
                    <th><i class="icon_pin_alt"></i>Image</th>
                    <th><i class="icon_calendar"></i>Price</th>
                    <th><i class="icon_mail_alt"></i> Description</th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="list-product">
                @forelse($products as $key=> $product)
                    <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$product->name}}</td>
                        <td><img src="{{asset("storage/images/".$product->image)}}" alt="No image" style="height: 100px"></td>
                        <td>{{$product->price}}</td>
                    <td>{{$product->desc}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success" href="{{route('product.edit',$product->id)}}"><i class="icon_check_alt2"></i></a>
                            <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}" onclick="return confirm('Are you sure ?')"><i class="icon_close_alt2"></i></a>
                        </div>
                    </td>
                </tr>
                        @empty
                    <tr>
                        <td colspan="6" style="text-align: center">No data display</td>
                    </tr>
                @endforelse
                </tbody>
                </tbody>
            </table>
        </section>
        {{$products->links()}}
    </div>
</div>

<script>
    $('#product').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            type: 'GET',
            url: '{{ route('product.search') }}',
            data: {
                'keyword': $value
            },
            success:function(data){
                if (data) {
                    $('tbody').html(data);
                } else {
                    $('tdoby').html("<tr><td>No data searched! Try another keyword!</td></tr>");
                }
            }
        });
    });
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
