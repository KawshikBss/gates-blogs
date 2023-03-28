@push('css')
<link rel="stylesheet" href="{{asset('css/components/carousel.css')}}">
@endpush
@props(['items'])
<div class="carousel-container">
    <span class="carousel-heading">
        <span class="carousel-section-name">{{$section?? 'Now Trending'}}</span>
        <span class="carousel-btn-container">
            <span class="carousel-btn">{{'<'}}</span>
            <span class="carousel-btn">{{'>'}}</span>
        </span>
    </span>
    <div class="carousel-items">
        @foreach($items as $item)
        <x-card :post="$item" />
        @endforeach
    </div>
</div>