@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-4 pb-5">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{ $post->image }}" />
            </a>
            <h5>{{$post->caption}}</h5>
        </div>
        @endforeach
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
