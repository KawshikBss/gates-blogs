@extends('layout')

@push('css')
<link rel="stylesheet" href="{{asset('css/singlePost.css')}}">
@endpush

@section('title', "Gates - {$post->title}")

@section('content')

<div class="single-post-container">
    <img src="../{{$post->image?? ''}}" class="single-post-img" />

    <span class="single-post-heading">
        <span class="single-post-section-name">{{$post->title?? 'Post Title'}}</span>
    </span>
    <p class="single-post-desc">{{$post->body?? 'Post Description'}}</p>
    <hr />
    
</div>

@endsection