@extends('layouts.manage')

@section('title', 'new page')
    


@section('content')
    
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title has-text-centered"> Create New Users</h1>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column is-7 is-offset-2">
        <form action="{{route('users.store')}}" method="POST">
             {{ csrf_field() }}
                <div class="field">
                    <label for="name">Username</label>
                    <p class="control">
                        <input type="text" class="input" id="name" name="name">
                    </p>
                </div>
                <div class="field">
                        <label for="email">Email</label>
                        <p class="control">
                            <input type="text" class="input" id="input" name="email">
                        </p>
                </div>
                <div class="field">
                        <label for="password">Password</label>
                        <p class="control">
                            <input type="password" class="input" id="password" name="password"  v-if="!auto_password">
                        </p>
                </div>
                <div class="field">
                    <b-checkbox name="auto_generate is-info" class="m-t-10"  v-model="auto_password"> Auto Generate Paasword</b-checkbox>
                </div>
                <button class="button is-outlined is-fullwidth is-info"> Create User</button>
        </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
    var app = new Vue({
      el : "#app",
      data: {
         auto_password: true
      },  
    });
    </script>
@endsection