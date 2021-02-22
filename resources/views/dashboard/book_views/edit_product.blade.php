@extends('layouts.app')

@section('content')
    <div class="flex justify-center bg-gray-700 py-4">
        <div class="w-1/4 bg-gray-800 p-6 rounded-lg">
            <div class="flex justify-center items center text-gray-200 text-2xl pb-2">
                <span>
                    Updatnuť Produkt
                </span>
            </div>
            <form action="/dashboard/product/{{ $book->id }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                @include('dashboard.book_views.form')


                <button type="submit" class="mt-4 bg-blue-600 text-gray-200 text-xl px-4 py-3
                focus:outline-none rounded-full font-medium w-full transition duration-500 ease-in-out hover:bg-blue-700">
                    Updatnuť Produkt
                </button>
            </form>
        </div>
    </div>
@endsection
