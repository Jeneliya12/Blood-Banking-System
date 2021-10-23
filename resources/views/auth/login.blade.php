@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background:   #800000; color:white"><h2>Login</h2></div>

                <div class="card-body" style="background:   #800000; color:white">
                                   
                    <form method="POST" action="/login">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if($errors->first('email'))
                                <div>
                                    {{$errors->first('email')}}
                                </div>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"name="password">
                                @if($errors->first('password'))
                                <div role="alert">
                                   {{$errors->first('password')}}
                                </div>
                                @endif
                            </div>        
                        </div>
                        <div class="form-group row">
                            <label for="roles" class="col-md-4 col-form-label text-md-right" name="usertype">Usertype</label>
                            <div class="col-md-6">
                                <select name="usertype">
                                 <option value="admin" class="disabled">Select Roles<option> 
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                              @if($errors->first('usertype'))
                                <div role="alert">
                                   {{$errors->first('usertype')}}
                                </div>
                                @endif
                        </div>
                       <!--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
 -->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a href="register" class="btn btn-primary">SignUp</a> 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
