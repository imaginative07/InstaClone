@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-8 offset-2">
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{$post->image}}" class="w-100"/>
            </div>

            <div class="col-6">

                <div class="d-flex align-items-center">
                    <img src="{{$post->user->profile->profileImage()}}" width="40px" class="rounded-circle pr-3" />
                    <h4>{{$post->user->username}}</h4>
                </div>

                <hr />

                <div class="pt-2">
                    <h4>{{$post->caption}}</h4> 
                </div>

            </div>
        </div>
    </div>
    
</div>
@endsection
