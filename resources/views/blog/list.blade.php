@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <form method="post" action="" class="form-inline my-2 my-lg-0">
                @csrf
                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
                <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search" >
            </form>
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><h3><i class="icon_profile"></i> Post Title</h3></th>
                    <th><h3><i class="icon_calendar"></i> Content</h3></th>
                    <th></th>
                </tr>
                @forelse($posts as  $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a
                                href="" class="btn btn-primary"><i class="icon_plus_alt2"></i></a>
                            <a
                                href="" class="btn btn-danger"
                                onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="icon_close_alt2"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No post to display!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div>
                {{$posts->links()}}
            </div>
        </section>
    </div>
</div>
@endsection
