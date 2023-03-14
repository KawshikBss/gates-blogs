@extends('layout')

@section('title', 'Gates - Create Blog')

@section('content')

<x-form-layout :fields="[
    ['name' => 'image', 'label' => 'Image', 'type' => 'file', 'accept' => 'image/*',],
    ['name' => 'anime', 'label' => 'Anime', 'type' => 'text', 'placeholder' => 'Which Anime are you reviewing?',],
    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'placeholder' => 'Title of the blog',],
    ['name' => 'body', 'label' => 'Body', 'type' => 'textarea', 'placeholder' => 'Body of the blog',],
    ]" method="POST" action="/posts" :submitLabel="'Post'" />

@endsection