@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        @foreach($books as $book)
            <div class="flex flex-col items-center h-96 bg-gray-800 mx-2 my-2 rounded-xl text-gray-200">
                <a href="" class="w-full flex justify-center pt-8">
                    <img class="object-fill h-52 " src="{{ asset('storage/' . $book->cover_img ) }}" alt="">
                </a>
                <div class="flex items-center justify-center p-1">
                    <span>{{ $book->title }}</span>
                </div>
                <div class="flex items-center justify-center p-1">
                    <span>{{ $book->author }}</span>
                </div>
                <button class="mt-4 rounded-full bg-green-400 w-36 h-10">
                    Pridať do Košíka
                </button>
            </div>
        @endforeach
    </div>

@endsection
