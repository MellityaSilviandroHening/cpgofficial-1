@extends('layouts.app-layout')

@section('title', 'Detail Assesment Center')

@section('content')

    {{-- SECTION 1 --}}
    <div class="flex flex-wrap items-center justify-center bg-orange-500 px-36 pt-14 pb-20">
        <div class="xl:w-7/12 sm:w-full">
            <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full pr-10">
                <div class="w-full text-4xl text-white mb-5 font-bold">
                    {{ $assesment->title }}
                </div>

                <p class="text-sm leading-7 text-white w-full">
                    {{ $assesment->desc }}
                </p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-5/12 h-48 justify-center items-center sm:w-full sm:mt-5">
            <img class="h-56 object-cover w-full rounded-xl" src="{{ asset('assets/img/' . $assesment->pict) }}" alt="{{ $assesment->pict }}">
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">
        <div class="block w-full p-10 bg-white border border-gray-300 rounded-xl shadow-2xl">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Pentingnya Service Excellence</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <p class="text-base font-medium text-black mb-5">{{ $assesment->importance }}</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Pentingnya Sertifikasi BNSP</h5>
            <hr class="h-px my-3 border-0 bg-gray-800">
            <ul class="text-base font-medium text-black mb-5 list-disc pl-4">
                <li>Meningkatkan rasa percaya diri terhadap kemampuan yang dimiliki</li>
                <li>Lebih mudah bagi perusahaan untuk menyaring calon karyawan yang kompeten</li>
                <li>Membantu meningkatkan akses dalam mengembangkan diri</li>
                <li>Mampu mengetahui tingkat kemampuan</li>
                <li>Produktivitas kerja jadi meningkat</li>
            </ul>

            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-600">Unit Kompetensi</h5>
            <hr class="h-px my-3 border-0 bg-gray-800"> --}}
            {{-- <ul class="text-base font-medium text-black mb-5 list-disc pl-4">
                @foreach ($uk as $item)
                <li>{{ $item->uk}} </li>
                @endforeach
            </ul> --}}
        </div>
    </div>


    {{-- SECTION 3 --}}
    <div class="grid w-full justify-center items-center xl:flex xl:flex-row bg-black xl:p-24 sm:py-24">
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="text-5xl text-white mb-10 font-bold">
                Persyaratan
            </div>

            <div class="">
                <img class="object-cover w-full h-64 xl:w-[550px] rounded-[20px] mb-10" src="{{ asset('images/persyaratan.jpg') }}" alt="">
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="xl:w-1/2">
            <div class="display grid text-white">
                <div class="grid mb-10 max-w-[600px]">
                    @foreach ($syarat as $item)
                    <div class=" pr-2 mb-3">
                        <div class="font-normal mb-4 text-xl text-white ">
                            {{ $item->syarat }}
                        </div>
                        <hr class="h-px my-3 border-0 bg-white">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 4 --}}
    <div class="bg-white max-w-full text-center mt-20 mb-20">
        <div class="flex flex-col justify-center items-center">
            <div data-aos="fade-up" data-aos-duration="1500" class="text-4xl font-bold text-black max-w-full text-center mb-7">
                Upcoming Certification
            </div>

            {{-- <a data-aos="fade-up" data-aos-duration="1500" href="#" class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105"> --}}
                <img data-aos="fade-up" data-aos-duration="1500" class="flex items-center justify-center object-cover rounded-t-lg w-80" src="{{ asset('assets/img/' . $assesment->pictagenda) }}"
                    alt="{{ $assesment->pictagenda }}" />
            {{-- </a> --}}
        </div>
    </div>

    {{-- SECTION 5 --}}
    <div data-aos="fade-up" data-aos-duration="1500" class="mx-36 my-20">

        <div class="flex flex-wrap items-center justify-center bg-black p-10 border border-gray-300 rounded-xl shadow-2xl">
            <div class="xl:w-3/4 sm:w-full">
                <div data-aos="fade-up" data-aos-duration="1500" class="max-w-full pr-10">
                    <div class="w-full text-4xl text-orange-500 mb-5 font-bold">
                        Investasi Sekarang!
                    </div>

                    <p class="text-sm leading-7 text-white w-full mb-5">
                        Saatnya untuk membangun kompetensi personal melalui PT Citra Prestasi Gemilang. Banyak sekali training provider yang hanya menjembatani kebutuhan pelatihan dan pencapaian kompetensi personal sebagai azas formalitas usaha.
                        Disini kami menawarkan dan menjalankan hal yang berbeda. Dari kualitas bimbingan teknis yang diberikan oleh para praktisi industri dengan pengalaman kerja lebih dari 20 tahun dan kualitas materi yang relevan dengan kebutuhan industri saat ini.
                        Kerja sama dengan seluruh LSP P3 dalam semua skema sertifikasi memegang prinsip kejujuran, profesional, dan needs oriented.

                        <br>
                        <br>Jangan ragu untuk mengenal kami lebih dekat. Hubungi:
                        <br>0811 360 215
                    </p>

                    <a href="https://wa.me/62811360215?text=saya%20tertarik%20untuk%20berinvestasi%20di%20Citra%20Prestasi%20Gemilang" target="_blank">
                        <button
                            class="text-white bg-orange-600 font-medium rounded-full text-sm px-10 py-3 text-center hover:bg-orange-700">Whatsapp
                        </button>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500"
                class="xl:w-1/4 h-64 justify-center items-center sm:w-full sm:mt-5">
                <img class="h-64 object-cover w-full rounded-xl" src="{{ asset('/images/investasi-sekarang.png') }}">
            </div>
        </div>


    </div>

@endsection
