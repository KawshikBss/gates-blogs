@extends('layout')

@section('title', 'Gates - Signup')

@section('content')

<x-form-layout :fields="[
    ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'value' => old('name'), 'placeholder' => 'Enter Your Name',],
    ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'value' => old('email'), 'placeholder' => 'Enter Your Email',],
    ['name' => 'password', 'label' => 'Password', 'type' => 'password', 'placeholder' => 'Enter Your Password',],
    ]" :submitLabel="'Sign Up'" method="{{'POST'}}" action="{{ route('signup') }}">
</x-form-layout>

@endsection