@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('admin.posts.update', ['post'=> $post->id])}}" method="POST">

        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="title">Category</label>
            <select name="category_id" class="form-control @error('title') is-invalid @enderror" id="category_id">
                    <option {{ (old('category_id', $post->category_id)=="")?'selected': ''}} value="">nessuna categoria</option>
                @foreach ($categories as $category)

                    <option {{ (old('category_id')==$category->id)?'selected': ''}}  value="{{ $category->id }}">{{ $category->name }}</option>
                    
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                
            @enderror
            
        </div>

        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" required id="title" name='title'  max="255" value="{{ old('title', $post->title)}}" >
            <small class="form-text text-muted">Title</small>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name='content' required>{{ old('content', $post->content)}}</textarea>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                
            @enderror 
        </div>

        <button type="submit" class="btn btn-primary mb-5">Update </button>
    </form>

</div>


@endsection