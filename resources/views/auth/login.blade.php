@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-700 py-4">
        <div class="w-1/5 bg-gray-800 p-6 rounded-lg">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div id="register-input-field-email">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}"
                    >

                    @error('email')
                    <div class="flex justify-center text-red-500 pt-4 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div id="register-input-field-password">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('password') border-red-500 @enderror"
                    >

                    @error('password')
                    <div class="flex justify-center text-red-500 pt-4 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center pt-4 pl-2">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label class="text-lg text-gray-200" for="remember">Remember Me</label>
                    </div>
                </div>



                @if(session()->has('status'))
                    <div class="flex justify-center items-center bg-red-200 w-full h-10
                    border-2 border-red-500 mt-4 rounded-2xl">
                    <span class="text-red-500">
                        {{ session('status') }}
                    </span>
                    </div>
                @endif

                <button type="submit" class="mt-4 bg-blue-600 text-gray-200 text-xl px-4 py-3
                focus:outline-none rounded-full font-medium w-full transition duration-500 ease-in-out hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
