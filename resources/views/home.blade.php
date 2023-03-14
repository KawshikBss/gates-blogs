@extends('layout')

@push('css')
<link rel="stylesheet" href="{{asset('css/components/sectionnewPost.css')}}">
@endpush

@section('title', 'Gates')

@section('content')

@include('components/banner')

@if($posts)

<div class="section">
    <h5 class="section-heading">New & Trendy</h5>
    <hr class="section-break" />
    @if(isset($posts) && count($posts))
    <div class="section-posts-new">
        <div class="section-post-new">
            <img class="section-post-new-img" src="{{$posts[0]->image?? ''}}">
            <div class="section-post-new-info-wrapper">
                <div class="section-post-new-info-inner">
                    <div class="section-post-new-info">
                        <span class="section-post-new-stamps">
                            <span class="section-post-new-tag">{{$posts[0]->tag?? ''}}</span>
                            <span class="section-post-new-time">{{$posts[0]->created_at?? ''}}</span>
                        </span>
                        <h5 class="section-post-new-title">{{$posts[0]->title?? ''}}</h5>
                        <p class="section-post-new-description">{{$posts[0]->body?? ''}}</p>
                        <a class="section-post-new-read-btn">Read Full</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-posts-new">
        <div class="section-post-new" style="flex-direction: row-reverse;">
            <img class="section-post-new-img" src="{{$posts[1]->image?? ''}}">
            <div class="section-post-new-info-wrapper">
                <div class="section-post-new-info-inner">
                    <div class="section-post-new-info">
                        <span class="section-post-new-stamps">
                            <span class="section-post-new-tag">{{$posts[0]->tag?? ''}}</span>
                            <span class="section-post-new-time">{{$posts[0]->created_at?? ''}}</span>
                        </span>
                        <h5 class="section-post-new-title">{{$posts[0]->title?? ''}}</h5>
                        <p class="section-post-new-description">{{$posts[0]->body?? ''}}</p>
                        <a class="section-post-new-read-btn">Read Full</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <p>None</p>
    @endif
</div>

@foreach($posts as $post)

<h1>{{$post->title}}</h1>

@endforeach

@endif

@endsection