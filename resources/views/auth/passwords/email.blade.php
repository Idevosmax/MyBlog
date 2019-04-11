@extends('layouts.app')

@section('content')

    @if (session('status'))
    <div class="notification is-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

<div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-50">
            <div class="card box-shadow-card">
                    
                <div class="card-content">
                    <h2 class="title has-text-centered">Reset Password</h2>
                <form action="{{route('password.email')}}" method='POST' role='form'>
                {{ csrf_field() }}
                    <div class="field">
                        <label for="email m-t-20"> Email Address</label>
                        <div class="control">
                        <input type="text" class="input {{$errors->has('email') ? 'is-danger' : 'is-info' }}" id='email' placeholder="Enter Email" value="{{ old('email') }}" required autofocus> 
    
                        </div>
                        @if ($errors->has('email'))
                                <p class="help m-t-5 is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    
                    <button class="button is-info  is-outlined  m-t-30 is-fullwidth"> Get Reset Link</button>
                </form>
                </div>
            <h5 class="has-text-centered"> <a href="{{route('login')}}" class='is-muted'><span class='icon'> <i class='fa fa-arrow-left'></i> </span> Login instead?</a></h5>
            </div>
        </div>
    </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
