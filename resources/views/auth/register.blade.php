@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-700 py-4">
        <div class="w-1/5 bg-gray-800 p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div id="register-input-field-name">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name"
                           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}"
                    >

                    @error('name')
                        <div class="flex justify-center text-red-500 pt-4 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div id="register-input-field-username">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('username') border-red-500 @enderror"
                           value="{{ old('username') }}"
                    >

                    @error('username')
                    <div class="flex justify-center text-red-500 pt-4 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
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
                <div id="register-input-field-password-repeat">
                    <label for="password_confirmation" class="sr-only">Password Repeat</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat The Password"
                           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('password_confirmation') border-red-500 @enderror"
                    >

                    @error('password_confirmation')
                    <div class="flex justify-center text-red-500 pt-4 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="mt-4 bg-blue-600 text-gray-200 text-xl px-4 py-3
                focus:outline-none rounded-full font-medium w-full transition duration-500 ease-in-out hover:bg-blue-700">
                    Register
                </button>
            </form>
        </div>
    </div>
@endsection
