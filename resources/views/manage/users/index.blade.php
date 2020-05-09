@extends('layouts.manage')

@section('content')
<div class="container flex-container">
    <div class="columns">
        <div class="column is-3 is-hidden-mobile">
            <h1 class="title "> Manage Users</h1>
        </div>
        <div class="column is-1 is-offset-6">
        <a href="{{route('users.create')}}" class="button is-info"> <span class="icon"> <i class="fa fa-user-add"> </i></span> Create New Users</a>
        </div>
    </div>
</div>
<hr>
<div class="card box-shadow-card ">
    <div class="card-content">
       <table class="table is-narrow is-fullwidth is-striped">
    <thead>
        <tr><th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
    {{-- <tr class=" {{$user->id == Auth::user()->id ? "is-selected" : ""}}"> --}}
        <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->created_at->toFormattedDateString()}}</td>
                <th><a class='button is-info is-outlined' href="{{route('users.edit',$user->id)}}"><span class="icon"><i class="fa fa-pencil m-r-5"></i></span> Edit</a></th>
            </tr>
        @endforeach
        
    </tbody>
</table> 

    </div>
    
</div>
{{ $users->links()}}

    
@endsection