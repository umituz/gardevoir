@extends('gardevoir::auth.layouts.app')

@push('title')
    <title>{{ __('Login') }}</title>
@endpush

@section('form')
    <div class="relative bg-white bg-opacity-90 p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="absolute top-5 right-0 mr-5">
            @include('frontend.partials.language-switcher')
        </div>
        <h2 class="text-2xl font-bold mb-4">{{ __('Login') }}</h2>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf
            <div class="mb-4">
                <input type="text" name="login" placeholder="{{ __('Email or Username') }}" class="form-input w-full @error('login') border-red-500 @enderror" value="{{ old('login') }}" required>
                @error('login')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="{{ __('Password') }}" class="form-input w-full @error('password') border-red-500 @enderror" required>
                @error('password')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    @include('frontend.partials.recaptcha
