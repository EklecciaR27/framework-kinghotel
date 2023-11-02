<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class=" flex items-center justify-center bg-gray-900 sticky top-0 z-10">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-white">KING Hotel Nusa Dua, Bali </span>
</div>
<nav class="flex flex-row p-4 px-4 justify-between items-center bg-gray-900 z-4 sticky top-20 z-10">
    <ul class="hidden lg:flex items-center gap-12 justify-center basis-1/2 text-white ml-60">
        <li><a href="#">Home</a></li>
        <li><a href="#">The Resort</a></li>
        <li><a href="#">The Room & Suites</a></li>
        <li><a href="#">Dining</a></li>
        <li><a href="#">Our Hotel</a></li>
        {{-- <li><a href="{{ url('data/reservasi') }}">Database</a></li> --}}
    </ul>
    <div class="hidden lg:flex justify-end mr-52">
             @include('components.button',['nama' => 'LOGIN'])
    </div>

    <div id="hamburger" class="lg:hidden cursor-pointer">
        <i class="fa-solid fa-bars"></i>
    </div>
</nav>

{{-- <div class="flex items-center justify-center bg-gray-900">
    <a href="#" class="basis-1/14 items-center flex flex-row" >
        <img src="{{ asset('assets/img/logohotel.png') }}" alt="Logo" class="w-fit h-20 mr-2">
    </a>
    <span class="flex flex-row text-lg font-bold text-white">KING Hotel Nusa Dua, Bali </span>
</div>
<nav class="flex flex-row p-4 px-4 justify-between items-center bg-gray-900 z-4 sticky top-0">
    <ul class="flex flex-row gap-12 justify-center basis-1/2 text-white ml-60">
        <li><a href="#">Home</a></li>
        <li><a href="#">The Resort</a></li>
        <li><a href="#">The Room & Suites</a></li>
        <li><a href="#">Dining</a></li>
        <li><a href="#">Our Hotel</a></li>
    </ul>
    <div class="flex justify-end mr-52">
        @include('components.button',['nama' => 'BOOK'])
    </div>
</nav> --}}

