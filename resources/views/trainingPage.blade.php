<!-- resources/views/welcome.blade.php -->
@extends('layouts.app-layout')

@section('title', 'Training')

@section('content')

    {{-- Section 1 --}}
    <div class="items-center justify-center bg-white">
        <div class="w-full h-72 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover" src="images\hero image.png">
            <div class="absolute inset-0 bg-white bg-opacity-50"></div>
            <div class="flex h-full items-center justify-center relative">
                <h1 class="text-4xl text-black font-semibold">TRAINING</h1>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <div class="bg-white max-w-full px-36 py-20 pb-0">
        <select class="bg-orange-500 rounded-[20px] px-4 py-2 hover:bg-orange-500" value=>
            <option value="full">Full</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
            <option value="category3">Category 3</option>
            <option value="category4">Category 4</option>
        </select>
    </div>

    {{-- SECTION 3 --}}
    <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-10 mx-36 mb-20 pt-10">
        {{-- CARD 1 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- CARD 2 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- CARD 3 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- CARD 4 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        
        {{-- CARD 5 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- CARD 6 --}}
        <div data-aos="fade-up" data-aos-duration="1500" 
            class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 max-w-1/3 h-auto bg-white border border-gray-200 rounded-lg shadow-2xl dark:bg-white dark:border-gray-100 hover:bg-orange-500">
            <a href="{{ route('training.detail') }}">
                <img class="w-full rounded-t-lg" src="images/dummyTrainingProgram.png" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('training.detail') }}">
                    <h6 class="mb-2 text-xl font-bold tracking-tight text-black dark:text-black">Strategi Komunikasi Gen Z Menghadapi Dunia Kerja</h6>
                </a>
                <p class="mb-3 text-sm font-normal text-black dark:text-black">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="{{ route('training.detail') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-orange-700 focus:outline-none">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

@endsection
