@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="login-card">
                <form class="theme-form login-form" method="POST" action="{{ route("login") }}">
                    @csrf
                    <h4>Login</h4>
                    <h6>Welcome back! Log in to your account.</h6>
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                            <input class="form-control" name="email" type="email" required placeholder="Enter your Email" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control" type="password" name="password" required>
                            <div class="show-hide"><span class="show"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

