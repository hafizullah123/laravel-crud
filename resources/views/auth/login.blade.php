@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required autofocus
                       class="block w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500" />
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                       class="block w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500" />
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" name="remember" id="remember_me" class="mr-2">
                    <span class="text-sm">Remember Me</span>
                </label>
            </div>

            <div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
                    Login
                </button>
            </div>
        </form>
        
        <div class="mt-4 text-center">
            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot Your Password?</a>
        </div>
    </div>
</div>
@endsection
