@extends('layout')

@section('content')
<div class="flex flex-col items-center justify-center p-4 pt-24">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow">
        <h1 class="text-3xl font-bold mb-6">Login</h1>
        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your email">
                @error('email')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" value="{{old('password')}}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your password">
                @error('password')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="flex items-center justify-end mb-4">
                <a href="#" class="text-sm text-blue-500 hover:text-blue-600">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-green-600 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">Login</button>
        </form>
    </div>
</div>
    
@endsection