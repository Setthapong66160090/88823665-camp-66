@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <!-- /.register-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <a href=""
                        class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                        <h1 class="mb-0"><b>Edit</b>User</h1>
                    </a>
                </div>
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Edit User</p>
                    <form action="{{ url('/user')}}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="name" value="{{ $user->name }}" id="registerFullName" type="text" class="form-control" placeholder="" />
                                <label for="registerFullName">Full Name</label>
                            </div>
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="email" value="{{ $user->email }}" id="registerEmail" type="email" class="form-control" placeholder="" />
                                <label for="registerEmail">Email</label>
                            </div>
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input name="password" id="registerPassword" type="password" class="form-control" placeholder="" />
                                <label for="registerPassword">Password</label>
                            </div>
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>

                    <!-- /.social-auth-links -->

                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection
