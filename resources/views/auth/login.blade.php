@extends('layouts.app')

@section('content')



<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card box-shadow-card">
            <div class="card-content">
                <h2 class="title has-text-centered">Welcome Back</h2>
            <form action="{{route('login')}}" method='POST' role='form'>
            {{ csrf_field() }}
                <div class="field">
                    <label for="email m-t-20"> Email Address</label>
                    <div class="control">
                    <input type="text" class="input {{$errors->has('email') ? 'is-danger' : 'is-info' }}" id='email' placeholder="Enter Email" value="{{ old('email') }}" required> 

                    </div>
                    @if ($errors->has('email'))
                            <p class="help m-t-5 is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="field">
                        <label for="password"> password</label>
                        <div class="control">
                           <input type="password" class="input {{$errors->has('password') ? 'is-danger' : 'is-info' }}" id='password' required> 
    
                        </div>
                        @if ($errors->has('password'))
                            <p class="help m-t-5 is-danger">{{$errors->first('password')}}</p>
                        @endif
                        
                </div>
                <b-checkbox name="remember" class="m-t-10"> Remember Me</b-checkbox>
                <button class="button is-info  is-outlined  m-t-50 is-fullwidth"> Log in</button>
            </form>
            </div>
        <h5 class="has-text-centered"> <a href="{{route('password.request')}}" class='is-muted'>Forgot Password?</a></h5>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}
                {{-- </div>
            </div> --}}
        {{-- </div>
    </div>
</div> --}}
@endsection
