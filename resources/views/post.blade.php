

@extends('layouts.main')

@section('header')

    <h1 class="mb-3 text-center" >{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    
                    <button class="btn btn-dark" type="submit ">Search</button>
                  </div>
            </form>
        </div>
    </div>


    @if($posts->count())
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(0) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 " style="backgroud-color: rgba(0,0,0.5)"><a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->nama }}</a></div>

                        @if ($post->image)
                       
                            <img src=" {{ asset('storage/'. $post->image)}}" alt="{{  $post->category->nama}}" class="img-fluid">
                       
            
                        @else
                             
                        <img src="https://source.unsplash.com/500x400?{{  $post->category->nama}}" class="card-img-top" alt="{{  $post->category->nama}}">
            
                        @endif

                        
                            <div class="card-body">
                                <h5 class="card-title">{{  $post->title }}</h5>
                                <p>
                                    <small class="text-muted"> 
                                      By.<a href="/post?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{  $post->excerpt }}</p>
                                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif
    
    <div class="d-flex justify-content-end">
    {{ $posts->links() }}
    </div>

@endsection
