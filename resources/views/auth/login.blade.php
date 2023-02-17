@extends('front.layouts.layoutlogin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div style="background-color: #9de3eb; border:1px solid red; box-shadow: 10px 22px 20px 10px rgba(134, 30, 12, 0.361); border-radius:20px; margin-top:140px; margin-bottom:110px;" class="col-md-6">
                <h2 class="text-center text-uppercase text-black mt-3">{{ __('Prijavi se') }}</h2>
                   @if ($message=Session::get('success'))
                   <div style="color: rgb(26, 125, 26)" class="alert alert-info">{{$message}}</div>
                   @endif 
                <form method="POST" action="{{ route('login-user') }}" class="mb-2 mt-1" enctype="multipart/form-data">
                    @if (Session::has('fail'))
                    <div style="color: red; font-style: italic;" class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div id="basicInfo">
                        <label for="username"> Username: </label>
                        <input type="username" name="username" value="{{ old('username') }}" id="username" class="form-input size-sm" required/>
                        <p hidden id="usernameError" class="text-danger"> Username nije ispravan </p>
                        
                        <label class="mt-1" for="password"> Lozinka: </label>
                        <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-input size-sm" />
                        <p hidden id="passwordError" class="text-danger"> Loznika nije ispravna </p>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                        <button type="submit" style="background-color: rgb(52, 52, 91); color:white;" onClick="handleSubmit(event)" class="form-control form-control-lg">{{ __('Prijavi se') }}</button>
                        
                        <a style="float: right;" class="btn btn-link" href="{{ route('forget.password.get') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
