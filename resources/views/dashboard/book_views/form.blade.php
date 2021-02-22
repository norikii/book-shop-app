<div id="register-input-field-title">
    <label for="title" class="sr-only">Titul</label>
    <input type="text" name="title" id="title" placeholder="Titul"
           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('title') border-red-500 @enderror"
           value="{{ old('title') ?? $book->title }}"
    >

    @error('title')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<div id="register-input-field-author">
    <label for="author" class="sr-only">Autor</label>
    <input type="text" name="author" id="author" placeholder="Autor"
           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('author') border-red-500 @enderror"
           value="{{ old('author') ?? $book->author }}"
    >

    @error('author')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<div id="register-input-field-isbn">
    <label for="isbn" class="sr-only">ISBN</label>
    <input type="text" name="isbn" id="isbn" placeholder="ISBN"
           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('isbn') border-red-500 @enderror"
           value="{{ old('isbn') ?? $book->isbn }}"
    >

    @error('isbn')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<div id="register-input-field-price">
    <label for="price" class="sr-only">Cena</label>
    <input type="text" name="price" id="price" placeholder="Cena"
           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('price') border-red-500 @enderror"
           value="{{ old('price') ?? $book->price }}"
    >

    @error('price')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<div id="register-input-field-qty">
    <label for="qty" class="sr-only">Počet</label>
    <input type="text" name="qty" id="qty" placeholder="Počet"
           class="focus:outline-none focus:border-blue-500
                           bg-gray-700 w-full h-10 border-2 mt-4
                           border-gray-200 p-4 rounded-2xl text-gray-200 text-lg
                           @error('qty') border-red-500 @enderror"
           value="{{ old('qty') ?? $book->qty }}"
    >

    @error('qty')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<div id="register-input-field-cover-img" class="flex mt-4 order-2 bg-gray-700 border-2 border-gray-200
                    rounded-2xl transition duration-200 ease-in-out hover:border-blue-600">
    <label class="flex flex-col items-center w-1/2 px-4 py-6
                    text-gray-200 cursor-pointer">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="flex justify-center items center mt-2leading-normal">Vybrať Obrázok</span>
        <input id="cover_img" name="cover_img" type='file' class="hidden" />
    </label>
    <div id="image-container" class="flex justify-center items-center p-2 w-1/2 ">

        <img
            id="image-preview"
            src=""
            alt="product upload image preview"
            class="hidden"
        >
        <span id="image-preview-text" class="flex justify-center text-gray-200 items-center w-full h-full">
                            Náhľad Obrázku
                        </span>
    </div>


    @error('cover_img')
    <div class="flex justify-center text-red-500 pt-4 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
<script type="text/javascript">
    const imageUpload = document.getElementById('cover_img');
    const previewContainer = document.getElementById('image-container');
    const imagePreview = document.getElementById('image-preview');
    const imagePreviewText = document.getElementById('image-preview-text');

    // image upload
    imageUpload.addEventListener('change', function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();
            // hiding the preview text
            imagePreviewText.style.display = 'none';
            // showing the text image
            imagePreview.style.display = 'block'

            // reading the image from the input
            reader.addEventListener('load', function () {
                imagePreview.setAttribute('src', this.result);
            });

            reader.readAsDataURL(file);
        } else {
            imagePreview.style.display = null
            imagePreviewText.style.display = null
            imagePreview.setAttribute('src', '');
        }
    });
</script>
