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
                    <input type="text" name="email" class="input {{$errors->has('email') ? 'is-danger' : 'is-info' }}" id='email' placeholder="Enter Email" value="{{ old('email') }}" required> 

                    </div>
                    @if ($errors->has('email'))
                            <p class="help m-t-5 is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="field">
                        <label for="password"> password</label>
                        <div class="control">
                           <input type="password" name="password" class="input {{$errors->has('password') ? 'is-danger' : 'is-info' }}" id='password' required> 
    
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



@endsection

@section('scripts')
    <script>
     var app = new Vue({
     el : '#app',
     data : {}
 });
    </script>
@endsection
