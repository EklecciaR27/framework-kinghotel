@extends('layouts.global')

@include('components.navbardashboard')

<section class="h-[700px] relative">
    <div class="container py-24 px-12 mx-auto">
        <div class="flex flex-col items-center z-28 md:flex-row">
            <div class="text-center mb-16 md:text-left md:w-1/2 md:pr-10">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-10">KING HOTEL Nusa Dua, Bali - INDONESIA</h1>
                <p class="leading-relaxed mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div><a href="" class="group relative bg-gray-900  px-0 py-2 w-28 font-bold flex justify-center gap-4 hover:bg-slate-800 ">
                    <p class="invisible">DISCOVER</p>
                    <p class="absolute text-white">DISCOVER</p>
                </a>
                </div>
            </div>

            <div class="md:w-1/2">
                <img src="{{ asset('assets/img/other4.jpg') }}" alt="resto" class="h-full w-full">
            </div>
        </div>
    </div>
</section>

