@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-800 m-4 rounded-2xl">
        <div id="product-image" class="p-4">
            <img class="object-fill h-96 w-full" src="{{ asset('storage/' . $book->cover_img ) }}" alt="product image">
        </div>
        <div id="product-info" class="flex flex-col justify-between text-gray-200 text-xl">
            <div class="mb-8 mt-4">
                <span class="font-bold">Titul: </span><span>{{ $book->title }}</span>
            </div>
            <div class="mb-8">
                <span class="font-bold">Autor: </span><span>{{ $book->author }}</span>
            </div>
            <div class="mb-8">
                <span class="font-bold">ISBN: </span><span>{{ $book->isbn }}</span>
            </div>
            <div class="mb-8">
                <span class="font-bold">Cena: </span><span>{{ $book->price }}€</span>
            </div>
            <div class="mb-8">
                <span class="font-bold">Počet Kusov: </span><span>{{ $book->qty }}</span>
            </div>
        </div>
    </div>
@endsection
