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
                        <p class="section-post-new-description">
                            @if($posts[0]->body)
                            @if(strlen($posts[0]->body) > 40)
                            {{substr($posts[0]->body, 0, 37)}}...
                            @else
                            {{$posts[0]->body}}
                            @endif
                            @endif
                        </p>
                        <a class="section-post-new-read-btn" href="/posts/{{$posts[0]->id}}">Read Full</a>
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
                            <span class="section-post-new-tag">{{$posts[1]->tag?? ''}}</span>
                            <span class="section-post-new-time">{{$posts[1]->created_at?? ''}}</span>
                        </span>
                        <h5 class="section-post-new-title">{{$posts[1]->title?? ''}}</h5>
                        <p class="section-post-new-description">
                            @if($posts[1]->body)
                            @if(strlen($posts[1]->body) > 40)
                            {{substr($posts[1]->body, 0, 37)}}...
                            @else
                            {{$posts[1]->body}}
                            @endif
                            @endif
                        </p>
                        <a class="section-post-new-read-btn" href="/posts/{{$posts[1]->id}}">Read Full</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <p>None</p>
    @endif
</div>

<x-carousel :items="$posts" />

@endif

@endsection