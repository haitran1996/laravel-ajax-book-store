@extends('layout.admin')
@section('title', 'Create user');
@section('content')
    @section('path')
        <li><i class="fa fa-user"></i><a href="{{ route('admin.user.index') }}">User</a></li>
        <li><i class="fa fa-user"></i>Create User</li>
        @endsection
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Form validations
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" method="post" action="{{route('admin.user.store')}}">
                            @csrf
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="name"
                                           value="{{old('name')}}" minlength="5" type="text" required />
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="cemail"
                                           value="{{old('email')}}" type="email" name="email" required />
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cpassword" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="cpassword" type="password"
                                           value="{{old('password')}}" name="password" required />
                                    @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-2">Re-type Password <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="" type="password"
                                           name="password_confirmation" required />
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
    @endsection
