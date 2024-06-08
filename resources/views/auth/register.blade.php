@extends('gardevoir::auth.layouts.app')

@push('title')
    <title>{{ __('Register') }}</title>
@endpush

@section('form')
    <div class="relative register-container bg-white bg-opacity-90 p-8 rounded-lg shadow-lg w-full max-w-4xl mx-auto">
        <div class="absolute top-5 right-0 mr-5">
            @include('frontend.partials.language-switcher')
        </div>
        <h2 class="text-2xl font-bold mb-4">{{ __('Register') }}</h2>

        <form class="register-form" method="POST" action="{{ route('register') }}" id="registerForm">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <input type="text" name="first_name" placeholder="{{ __('First Name') }}" class="form-input w-full @error('first_name') border-red-500 @enderror" value="{{ old('first_name') }}" required autofocus>
                    @error('first_name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" name="last_name" placeholder="{{ __('Last Name') }}" class="form-input w-full @error('last_name') border-red-500 @enderror" value="{{ old('last_name') }}" required>
                    @error('last_name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <input type="email" name="email" placeholder="{{ __('Email') }}" class="form-input w-full @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                @error('email')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <input type="password" name="password" placeholder="{{ __('Password') }}" class="form-input w-full @error('password') border-red-500 @enderror" required>
                    @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" class="form-input w-full" required>
                </div>
            </div>

            <div class="mt-4">
                @includeWhen(view()->exists('frontend.auth.register.channel'), 'frontend.auth.register.channel')
            </div>

            <div class="mt-4 flex items-start space-x-2">
                <input type="checkbox" name="accept_terms" id="accept_terms" class="form-checkbox mt-1">
                <label for="accept_terms" class="text-sm text-gray-700">
                    <a href="#" class="text-blue-500 underline">{{ __('QR Level Terms of Use') }}</a> ve
                    <a href="#" class="text-blue-500 underline">{{ __('Privacy Policy') }}</a> {{ __('I have read, understood and accept.') }}
                </label>
            </div>
            <div class="mt-4 flex items-start space-x-2">
                <input type="checkbox" name="accept_transfer" id="accept_transfer" class="form-checkbox mt-1">
                <label for="accept_transfer" class="text-sm text-gray-700">
                    <a href="#" class="text-blue-500 underline">{{ __('Privacy Policy') }}</a> {{ __('I consent to the transfer of my personal data abroad.') }}
                </label>
            </div>

            <div class="mt-4">
                @include('frontend.partials.recaptcha', ['formId' => 'registerForm', 'buttonText' => __('Register')])
            </div>
        </form>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="text-blue-500">{{ __('Already have an account? Login') }}</a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .register-container {
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        .form-input {
            border: 1px solid #ddd;
            padding: 0.75rem;
            border-radius: 0.375rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #3182ce;
        }

        .form-checkbox {
            height: 1.25rem;
            width: 1.25rem;
            border: 2px solid #ddd;
            border-radius: 0.25rem;
            appearance: none;
            -webkit-appearance: none;
            outline: none;
            cursor: pointer;
        }

        .form-checkbox:checked {
            background-color: #3182ce;
            border-color: #3182ce;
        }

        .form-checkbox:checked:after {
            content: "✔";
            display: block;
            text-align: center;
            color: white;
        }

    </style>
@endpush
