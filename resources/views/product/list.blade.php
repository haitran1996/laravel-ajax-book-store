@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Advanced Table
            </header>

            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_profile"></i>Name</th>
                    <th><i class="icon_calendar"></i>Price</th>
                    <th><i class="icon_pin_alt"></i>Image</th>
                    <th><i class="icon_mail_alt"></i> Description</th>

                </tr>
                <tr>
                    @forelse($products as $key=> $product)
                    <td>{{++$key}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->desc}}</td>
                    <td><img src="{{asset("storage/images/".$product->image)}}" alt="No image" style="width: 200px"></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                            <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                            <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                    </td>
                </tr>
                        @empty
                    <tr>
                        <td colspan="4" style="text-align: center">No data display</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection
