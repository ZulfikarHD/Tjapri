@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-10 max-w-7xl px-4">
        {{-- Slide Show Iklan --}}
        <div class="rounded-md bg-white shadow">
            <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 mb-2 flex justify-center p-0">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <a href="{{ 'dashboard' }}"
                            class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                            <img src="{{ asset('/images/1.jpg') }}" class="block w-full" alt="..." />
                            <div class="carousel-caption absolute hidden text-center md:block">
                                <h5 class="text-xl">First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <a href="https://filateli.co.id/"
                            class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                            <img src="{{ asset('/images/2.jpg') }}" class="block w-full" alt="..." />
                            <div class="carousel-caption absolute hidden text-center md:block">
                                <h5 class="text-xl">Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <a href="https://e-meterai.co.id/"
                            class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                            <img src="{{ asset('/images/3.jpg') }}" class="block w-full" alt="..." />
                            <div class="carousel-caption absolute hidden text-center md:block">
                                <h5 class="text-xl">Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 left-0 flex items-center justify-center border-0 p-0 text-center hover:no-underline hover:outline-none focus:no-underline focus:outline-none"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 right-0 flex items-center justify-center border-0 p-0 text-center hover:no-underline hover:outline-none focus:no-underline focus:outline-none"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- End Slide Show Iklan --}}
        {{-- Category --}}
        <div class="rounded-md bg-white shadow p-4 mt-8">
            <h5 class="border-b-2 pb-1.5 border-slate-200 font-bold text-lg">Kategori</h5>
            <div class="flex justify-start items-start overflow-auto gap-3 mx-4 my-2">
                {{-- Produk Exclusive --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/Peruri_logo.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Produk Eksklusif</h6>
                </div>
                {{-- Makanan --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/makanan.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Makanan</h6>
                </div>
                {{-- Elektronik --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/elektronik.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Elektronik</h6>
                </div>
                {{-- Jasa --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/jasa.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Jasa</h6>
                </div>
                {{-- Pakaian --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/pakaian.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Pakaian</h6>
                </div>
                {{-- Otomotif --}}
                <div class="flex flex-col gap-2 justify-center items-center px-3 py-2 border rounded-lg w-28 shadow h-36">
                    <img src="{{ asset('images/logo/otomotif.svg') }}" class="w-28">
                    <h6 class="text-center text-sm font-semibold text-slate-600">Otomotif</h6>
                </div>
            </div>
        </div>
        {{-- Produk Terbaru 1 --}}
        <div class="mt-4 flex justify-start">
            <div class="min-w-full rounded-lg bg-white px-6 py-2 shadow">
                <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Produk Terbaru</h5>
                <div class="flex justify-start items-start overflow-auto gap-3 mx-4 my-2">
                {{-- Item 1 --}}
                    <div class="inline-block w-40 max-w-sm rounded-lg border shadow-sm">
                        <a href="#">
                            <div class="flex flex-col justify-center">
                                <div class="h-40">
                                    <img class="h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-start">
                                    {{-- Penjelasan Produk --}}
                                    <div class="mt-2 p-3">
                                        <p class="line-clamp-2 text-sm font-light leading-tight text-gray-600">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.</p>
                                        <div class="mt-3 flex flex-nowrap">
                                            <span class="text-sm font-semibold text-orange-600">Rp.</span>
                                            <h6 class="inline-block text-base font-bold text-orange-600">850.000.000</h6>
                                        </div>
                                    </div>
                                    <div class="border p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="my-auto inline-block h-5 w-5 text-gray-500">
                                            <path fill-rule="evenodd"
                                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-light text-gray-500">Karawang</span>
                                    </div>
                                    {{-- Rating Produk --}}
                                    <div class="border p-1">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block h-5 w-5 fill-current text-yellow-500">
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
        {{-- Paling Sering Di Lihat --}}
        <div class="mt-4 flex justify-start">
            <div class="min-w-full rounded-lg bg-white px-6 py-2 shadow">
                <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Paling Sering Di Lihat</h5>
                <div class="flex justify-start items-start overflow-auto gap-3 mx-4 my-2">
                {{-- Item 1 --}}
                    <div class="inline-block w-40 max-w-sm rounded-lg border shadow-sm">
                        <a href="#">
                            <div class="flex flex-col justify-center">
                                <div class="h-40">
                                    <img class="h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-start">
                                    {{-- Penjelasan Produk --}}
                                    <div class="mt-2 p-3">
                                        <p class="line-clamp-2 text-sm font-light leading-tight text-gray-600">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.</p>
                                        <div class="mt-3 flex flex-nowrap">
                                            <span class="text-sm font-semibold text-orange-600">Rp.</span>
                                            <h6 class="inline-block text-base font-bold text-orange-600">850.000.000</h6>
                                        </div>
                                    </div>
                                    <div class="border p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="my-auto inline-block h-5 w-5 text-gray-500">
                                            <path fill-rule="evenodd"
                                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-light text-gray-500">Karawang</span>
                                    </div>
                                    {{-- Rating Produk --}}
                                    <div class="border p-1">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block h-5 w-5 fill-current text-yellow-500">
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
        {{-- Paling Sering Di Lihat --}}
        <div class="mt-4 flex justify-start">
            <div class="min-w-full rounded-lg bg-white px-6 py-2 shadow">
                <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Produk Lainnya</h5>
                <div class="flex justify-start items-start overflow-auto gap-3 mx-4 my-2">
                {{-- Item 1 --}}
                    <div class="inline-block w-40 max-w-sm rounded-lg border shadow-sm">
                        <a href="#">
                            <div class="flex flex-col justify-center">
                                <div class="h-40">
                                    <img class="h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-start">
                                    {{-- Penjelasan Produk --}}
                                    <div class="mt-2 p-3">
                                        <p class="line-clamp-2 text-sm font-light leading-tight text-gray-600">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.</p>
                                        <div class="mt-3 flex flex-nowrap">
                                            <span class="text-sm font-semibold text-orange-600">Rp.</span>
                                            <h6 class="inline-block text-base font-bold text-orange-600">850.000.000</h6>
                                        </div>
                                    </div>
                                    <div class="border p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="my-auto inline-block h-5 w-5 text-gray-500">
                                            <path fill-rule="evenodd"
                                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-light text-gray-500">Karawang</span>
                                    </div>
                                    {{-- Rating Produk --}}
                                    <div class="border p-1">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block h-5 w-5 fill-current text-yellow-500">
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
    </div>
@endsection