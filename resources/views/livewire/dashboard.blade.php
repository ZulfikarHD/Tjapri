<div class="container px-4 py-10 mx-auto max-w-7xl">
    {{-- Slide Show Iklan --}}
    <div class="bg-white shadow-lg drop-shadow-lg rounded-2xl">
        <div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
            {{-- Carousel Botom Button--}}
            <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>
            {{-- Carousel Item --}}
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                    <a href="{{ 'dashboard' }}"
                        class="block w-full text-gray-500 transition ease-in-out hover:text-slate-800"">
                        <img src="{{ asset('/images/1.jpg') }}" class="block w-full rounded-2xl" alt="..." />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </a>
                </div>
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <a href="https://filateli.co.id/"
                        class="block w-full text-gray-500 transition ease-in-out hover:text-slate-800">
                        <img src="{{ asset('/images/2.jpg') }}" class="block w-full rounded-2xl" alt="..." />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </a>
                </div>
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <a href="https://e-meterai.co.id/"
                        class="block w-full text-gray-500 transition ease-in-out hover:text-slate-800">
                        <img src="{{ asset('/images/3.jpg') }}" class="block w-full rounded-2xl" alt="..." />
                        <div class="absolute hidden text-center carousel-caption md:block">
                            <h5 class="text-xl">Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </a>
                </div>
            </div>
            {{-- Carousel Previous Button --}}
            <button
                class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
                <span class="inline-block w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            {{-- Carousel Next Button --}}
            <button
                class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
                <span class="inline-block w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>
    </div>
    {{-- End Slide Show Iklan --}}
    {{-- Category --}}
    <div class="p-4 mt-8 bg-white shadow drop-shadow-md rounded-2xl">
        <h5 class="border-b-2 pb-1.5 border-slate-200 font-bold text-lg">Kategori</h5>
        <div class="flex items-start justify-start gap-3 mx-4 my-2 overflow-auto">
            {{-- Produk Exclusive --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/Peruri_logo.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Produk Eksklusif</h6>
            </div>
            {{-- Makanan --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/makanan.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Makanan</h6>
            </div>
            {{-- Elektronik --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/elektronik.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Elektronik</h6>
            </div>
            {{-- Jasa --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/jasa.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Jasa</h6>
            </div>
            {{-- Pakaian --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/pakaian.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Pakaian</h6>
            </div>
            {{-- Otomotif --}}
            <div class="flex flex-col items-center justify-center gap-2 px-3 py-2 border rounded-lg shadow w-28 h-36">
                <img src="{{ asset('images/logo/otomotif.svg') }}" class="w-28">
                <h6 class="text-sm font-semibold text-center text-slate-600">Otomotif</h6>
            </div>
        </div>
    </div>
    {{-- Produk Terbaru 1 --}}
    <div class="flex justify-start p-4 mt-4 bg-white shadow drop-shadow-md rounded-2xl">
        <div class="min-w-full px-6 py-2 bg-white rounded-lg">
            <h5 class="pb-2 mb-2 text-xl font-bold leading-tight text-gray-900 border-b-2">Produk Terbaru</h5>
            <div class="flex items-start justify-start gap-3 mx-4 my-2 overflow-auto">
                {{-- Item --}}
                @foreach ($terbaru as $new)
                <div class="inline-block w-40 max-w-sm border rounded-lg shadow-sm">
                    <a href="{{ route('product.product-details',['id' => $new->id]) }}">
                        <div class="flex flex-col justify-center">
                            <div class="h-40">
                                <img class="object-cover w-full h-full rounded-t-md"
                                    src="{{ asset('images/product/'.App\Models\ProductPicture::where('product_id',$new->id)->value('foto')) }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-start">
                                {{-- Penjelasan Produk --}}
                                <div class="p-3 mt-2">
                                    <h6 class="text-sm font-extrabold text-gray-800 line-clamp-2">{{ $new->nama }}</h6>
                                    <p class="text-sm font-medium leading-tight text-gray-500 line-clamp-2">{{
                                        $new->deskripsi }}</p>
                                    <div class="flex gap-0.5 mt-2 flex-nowrap">
                                        <p class="inline-block text-base font-bold text-orange-600">Rp. </p>
                                        <h5 class="inline-block text-base font-bold text-orange-600">{{
                                            number_format($new->harga,0) }}</h5>
                                    </div>
                                </div>
                                <div class="p-1 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="inline-block w-5 h-5 my-auto text-gray-500">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">Karawang</span>
                                </div>
                                {{-- Rating Produk --}}
                                <div class="p-1 border">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 text-yellow-500 fill-current">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">4.8 | <span
                                            class="font-semibold text-blue-500">{{ number_format($new->quantity)
                                            }}</span>
                                        In Stock</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                {{-- End Item 1 --}}
            </div>
        </div>
    </div>
    {{-- Paling Sering Di Lihat --}}
    <div class="flex justify-start p-4 mt-4 bg-white shadow drop-shadow-md rounded-2xl">
        <div class="min-w-full px-6 py-2 bg-white rounded-lg">
            <h5 class="pb-2 mb-2 text-xl font-bold leading-tight text-gray-900 border-b-2">Paling Sering Di Lihat</h5>
            <div class="flex items-start justify-start gap-3 mx-4 my-2 overflow-auto">
                {{-- Item 1 --}}
                <div class="inline-block w-40 max-w-sm border rounded-lg shadow-sm">
                    <a href="#">
                        <div class="flex flex-col justify-center">
                            <div class="h-40">
                                <img class="object-cover w-full h-full"
                                    src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-start">
                                {{-- Penjelasan Produk --}}
                                <div class="p-3 mt-2">
                                    <p class="text-sm font-light leading-tight text-gray-600 line-clamp-2">Lorem ipsum
                                        dolor sit amet
                                        consectetur
                                        adipisicing
                                        elit.</p>
                                    <div class="flex mt-3 flex-nowrap">
                                        <span class="text-sm font-semibold text-orange-600">Rp.</span>
                                        <h6 class="inline-block text-base font-bold text-orange-600">850.000.000</h6>
                                    </div>
                                </div>
                                <div class="p-1 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="inline-block w-5 h-5 my-auto text-gray-500">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">Karawang</span>
                                </div>
                                {{-- Rating Produk --}}
                                <div class="p-1 border">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 text-yellow-500 fill-current">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">4.8 | <span
                                            class="font-semibold text-blue-500">45</span>
                                        Terjual</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- End Item 1 --}}
            </div>
        </div>
    </div>
    {{-- Barang Lainnya --}}
    <div class="flex justify-start p-4 mt-4 bg-white shadow drop-shadow-md rounded-2xl">
        <div class="min-w-full px-6 py-2 bg-white rounded-lg">
            <h5 class="pb-2 mb-2 text-xl font-bold leading-tight text-gray-900 border-b-2">Produk Lainnya</h5>
            <div class="flex items-start justify-start gap-3 mx-4 my-2 overflow-auto">
                @foreach ($lainnya as $lain)
                {{-- Item 1 --}}
                <div class="inline-block w-40 max-w-sm border rounded-lg shadow-sm">
                    <a href="{{ url('/detailProduk') }}">
                        <div class="flex flex-col justify-center">
                            <div class="h-40">
                                <img class="object-cover w-full h-full rounded-t-md"
                                    src="{{ asset('images/product/'.App\Models\ProductPicture::where('product_id',$lain->id)->value('foto')) }}"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-start">
                                {{-- Penjelasan Produk --}}
                                <div class="p-3 mt-2">
                                    <h6 class="text-sm font-extrabold text-gray-800 line-clamp-2">{{ $lain->nama }}</h6>
                                    <p class="text-sm font-medium leading-tight text-gray-500 line-clamp-2">{{
                                        $lain->deskripsi }}</p>
                                    <div class="flex gap-0.5 mt-2 flex-nowrap">
                                        <p class="inline-block text-base font-bold text-orange-600">Rp. </p>
                                        <h5 class="inline-block text-base font-bold text-orange-600">{{
                                            number_format($lain->harga,0) }}</h5>
                                    </div>
                                </div>
                                <div class="p-1 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="inline-block w-5 h-5 my-auto text-gray-500">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">Karawang</span>
                                </div>
                                {{-- Rating Produk --}}
                                <div class="p-1 border">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block w-5 h-5 text-yellow-500 fill-current">
                                        <path
                                            d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                        </path>
                                    </svg>
                                    <span class="text-sm font-light text-gray-500">4.8 | <span
                                            class="font-semibold text-blue-500">{{ number_format($lain->quantity)
                                            }}</span>
                                        In Stock</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- End Item 1 --}}
                @endforeach
            </div>
        </div>
    </div>
</div>
