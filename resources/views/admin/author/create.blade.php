@extends('layout.admin')
@section('title', 'Create user')
@section('content')
@section('path')
    <li><i class="fa fa-user"></i><a href="{{ route('admin.author.list') }}">Author</a></li>
    <li><i class="fa fa-user"></i>Create User</li>
@endsection
{{--@can('curd-user')--}}
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Form validations
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" method="post"
                          action="{{route('admin.author.store')}}">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="name" name="name" type="text" required />
{{--                                @error('name')--}}
{{--                                <p class="text-danger">{{$message}}</p>--}}
{{--                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
{{--    @endcan--}}
@endsection
