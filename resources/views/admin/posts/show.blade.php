@extends('layouts.app')

@section('content')

    <div class="container">

        <div>
            <span class="font-weight-bold">Title</span>
            {{ $post->title}}
        </div>
        <div>
            <span class="font-weight-bold">Content</span>
            {{ $post->content}}
        </div>
        <div>
            <span class="font-weight-bold">Slug</span>
            {{ $post->slug}}
        </div>

        <div>
            <span class="font-weight-bold">Category</span>
            {{ $post->category}}
        </div>

        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary" >BACK</a>

    </div>

@endsection