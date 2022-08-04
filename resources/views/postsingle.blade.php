
@extends('layouts.main')

@section('header')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By.<a href="/post?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/post?category={{ $post->category->slug }}"class="text-decoration-none" >{{ $post->category->nama }}</a></p>
                   
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src=" {{ asset('storage/'. $post->image)}}" alt="{{  $post->category->nama}}" class="img-fluid ">
                </div>
    
                @else
                     
                <img src="https://source.unsplash.com/1200x400? {{  $post->category->nama}}" alt="{{  $post->category->nama}}" class="img-fluid ">
    
                @endif
               
                <article class="my-3 fs-5">
                 {!! $post->body !!} 
                </article>

                 <a href="/post" class="d-block">Back To Event</a>

            </div>
        </div>
    </div>



@endsection
