<div class="mx-8 bg-gray-800 rounded-xl">
    <div id="user-table-upper-panel"
         class="min-w-full bg-primary text-gray-400 flex justify-between items-center p-4"
    >
        <h1 class="font-bold text-3xl">Produkty</h1>
        <a
            href="{{ route('create_product') }}"
            class="focus:outline-none py-2 px-4 bg-blue-400 active:bg-nutrivit-color rounded-3xl mr-4 text-gray-200
              transition duration-500 ease-in-out transform hover:bg-blue-500">
            <span>Pridať Produkt</span>
        </a>
    </div>

    @if($books->count())
    <div class="w-full overflow-x-auto text-gray-200">
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-600">
            <tr class="py-2">
                <th scope="col" class="flex pl-6 py-3 text-center font-bold text-gray-200 uppercase">
                    Titul
                </th>
                <th scope="col" class="py-3 text-center font-bold text-gray-200 uppercase">
                    Autor
                </th>
                <th scope="col" class="py-3 text-center font-bold text-gray-200 uppercase">
                    ISBN
                </th>
                <th scope="col" class="py-3 text-center font-bold text-gray-200 uppercase">
                    Počet
                </th>
                <th scope="col" class="py-3 text-center font-bold text-gray-200 uppercase">
                    Cena
                </th>
                <th scope="col" class="py-3 text-center font-bold text-gray-200 uppercase">
                    Možnosti
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 bg-gray-800">
            @foreach($books as $book)
            <tr class="transition duration-300 ease-in-out hover:bg-gray-700 cursor-pointer">
                <td class="px-6 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-14 w-10">
                            <img class="h-14 w-10" src="{{ asset('storage/' . $book->cover_img ) }}" alt="book cover">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-200">
                                {{ $book->title }}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-200">{{ $book->author }}</div>
                </td>
                <td class="py-4 whitespace-nowrap">
                    <span>{{ $book->isbn }}</span>
                </td>
                <td class="text-gray-200">
                    <span>{{ $book->price }}</span>
                </td>
                <td class="">
                    <span>{{ $book->qty }}</span>
                </td>
                <td class="py-4 whitespace-nowrap text-right text-sm font-medium">
                    <div class="flex justify-center px-2">
                        <button
                            class="focus:outline-none w-12 h-12 mr-4 bg-blue-500 rounded-full text-gray-200 transition duration-500 ease-in-out hover:bg-blue-700">
                            <a href="/dashboard/product/{{ $book->id }}">
                                <span class="flex justify-center items-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                          </span>
                            </a>
                        </button>
                        <button
                            id="update-button"
                            class="focus:outline-none w-12 h-12 bg-green-500 mr-4 rounded-full text-gray-200 transition duration-300 ease-in-out hover:bg-green-700">
                            <a href="/dashboard/product/{{ $book->id }}/edit">
                                <span class="flex justify-center items-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                              </path>
                            </svg>
                          </span>
                            </a>
                        </button>
                        <form action="/dashboard/product/{{ $book->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button
                                class="focus:outline-none w-12 h-12 bg-red-500 rounded-full text-gray-200 transition duration-500 ease-in-out hover:bg-red-700">
                          <span class="flex justify-center items-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                              </path>
                            </svg>
                          </span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div id="products-table-empty-table-text" class="flex justify-center items-center h-20 py-2 text-gray-200 text-xl">
        <span>Neboli nájdené žiadne produkty</span>
    </div>
    @endif
    <div class="border-t h-12">
        Footer
    </div>
</div>
