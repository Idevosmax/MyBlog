@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card box-shadow-card">
            <div class="card-content">
                <h2 class="title has-text-centered">Join The Community</h2>
            <form action="{{route('register')}}" method='POST' role='form'>
            {{ csrf_field() }}
                <div class="field">
                    <label for="name m-t-20"> Username</label>
                    <div class="control">
                    <input type="text" name='name' class="input {{$errors->has('name') ? 'is-danger' : 'is-info' }}" id='name' placeholder="Enter Username" value="{{ old('name') }}" required> 

                    </div>
                    @if ($errors->has('name'))
                            <p class="help m-t-5 is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="field">
                        <label for="email m-t-20"> Email Address</label>
                        <div class="control">
                        <input type="text" class="input {{$errors->has('email') ? 'is-danger' : 'is-info' }}" id='email' name='email' placeholder="Enter Email" value="{{ old('email') }}" required> 
    
                        </div>
                        @if ($errors->has('email'))
                                <p class="help m-t-5 is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                <div class="columns">
                    <div class="column">
                            <div class="field">
                                    <label for="password">  Password</label>
                                    <div class="control">
                                       <input type="password" name='password' class="input {{$errors->has('password') ? 'is-danger' : 'is-info' }}" id='password' required> 
                
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help m-t-5 is-danger">{{$errors->first('password')}}</p>
                                    @endif
                                    
                            </div>
                    </div>
                    <div class="column">
                            <div class="field">
                                    <label for="password_confirmation"> Confirm  Password</label>
                                    <div class="control">
                                       <input type="password" name='password_confirmation' class="input {{$errors->has('password_confirmation') ? 'is-danger' : 'is-info' }}" id='password_confirmation' required> 
                
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                        <p class="help m-t-5 is-danger">{{$errors->first('password_confirmation')}}</p>
                                    @endif
                                    
                            </div>
                    </div>
                </div>
                
                
               
                <button class="button is-info  is-outlined  m-t-20 is-fullwidth">Register </button>
            </form>
            </div>
        <h5 class="has-text-centered"> <a href="{{route('login')}}" class='is-muted'>Already registered? Login</a></h5>
        </div>
    </div>
</div>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
