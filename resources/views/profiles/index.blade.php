@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-3">
            <img class="p-5 w-100 rounded-circle" src="{{$user->profile->profileImage()}}" />
        </div>

        <div class="col-9 p-5">
            <div class="d-flex align-items-center pb-3">
                <strong>{{ $user->username }}</strong> 
                <follow-button user_id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

            <a href="/p/create">Create</a> | 
            <a href="/profile/{{$user->id}}/edit">Edit</a>

            <div class="d-flex pt-3">
                <div class="pr-4"><strong>{{$postsCount}} Posts</strong></div>
                <div class="pr-4"><strong>{{$followersCount}} followers</strong></div>
                <div class="pr-4"><strong>{{$followingCount}} following</strong></div>
            </div>

            <div class="pt-4">
                <strong>{{$user->profile->title}}</strong>
                <p>{{$user->profile->description}}</p>
                <a href="#">{{$user->profile->url ?? "freecodecamp.org"}}</a>
            </div>

            

        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 pb-5">
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{ $post->image }}" />
                </a>
            </div>
        @endforeach
    </div>

</div>
@endsection
