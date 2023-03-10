@extends('layout')

@section('title', 'Gates - Login')

@section('content')

<x-form-layout :fields="[
    ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'value' => old('email'), 'placeholder' => 'Enter Your Email',],
    ['name' => 'password', 'label' => 'Password', 'type' => 'password', 'placeholder' => 'Enter Your Password',],
    ]" :submitLabel="'Login'" method="{{'POST'}}" action="{{ route('login') }}">
</x-form-layout>

@endsection