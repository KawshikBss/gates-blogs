@push('css')
<link rel="stylesheet" href="{{asset('css/components/card.css')}}">
@endpush

@props(['post'])

<div class="card-container">
    <img class="card-img" src="{{$post->image?? ''}}" />
    <span class="card-title">
        {{$post->title?? 'Title'}}</span>
    <p class="card-desc">
        @if($post->body)
        @if(strlen($post->body) > 40)
        {{substr($post->body, 0, 37)}}...
        @else
        {{$post->body}}
        @endif
        @endif
    </p>
    <a class="card-link" href="/posts/{{$post->id?? ''}}">Read More</a>
</div>