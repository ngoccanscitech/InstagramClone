@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="row">
            <div class="col-5 offset-4">
                <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-5 offset-4">
                <p><span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span> {{$post->caption}}
                </p>
            </div>
        </div>
        @endforeach
   
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
        {{$posts->links()}}
        </div>
        
    </div>
    @endsection