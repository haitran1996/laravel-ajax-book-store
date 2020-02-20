@extends('layout.admin')
@section('title','List Category')
@section('content')

        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <form method="post" action="{{route('category.search')}}" class="form-inline my-2 my-lg-0">
                        @csrf
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
                        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" >
                    </form>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><h3><i class=""></i> #</h3></th>
                            <th><h3><i class="icon_profile"></i> Book Title</h3></th>
                            <th><h3><i class="icon_calendar"></i> Description</h3></th>
                            <th></th>
                        </tr>
                        @forelse($categories as $key => $category)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a
                                            href="{{route('category.edit', $category->id)}}" class="btn btn-primary"><i class="icon_plus_alt2"></i></a>
                                    <a
                                            href="{{route('category.delete', $category->id)}}" class="btn btn-danger"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="icon_close_alt2"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No user to display!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{$categories->links()}}
                    </div>
                </section>
            </div>
        </div>

@endsection
