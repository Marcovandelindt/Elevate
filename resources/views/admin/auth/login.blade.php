@extends('admin.layouts.admin')

@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-8 col-sm-12">
                <div class="card authentication-card">
                    <div class="card-header">
                        <h3>Elevate - Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf

                            @if (session('error'))
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation"></i> <span class="error-text">{{ session('error') }}</span>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email"
                                       value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" name="login">Login!</button>
                            </div>
                            <div class="form-group">
                                <div class="float-right">
                                    <a class="link" href="#">Whoops! Forgot my password...</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
