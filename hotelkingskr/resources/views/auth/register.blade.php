<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logohotel.png') }}">
    <title>King Hotel Nusa Dua - Bali</title>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- kiri -->
            <form action="{{ route('auth.register.action') }}" method="post">
                @csrf
                <div class="flex flex-col justify-center md:p-14">
                    <span class="mb-3 text-4xl font-bold">Hi! Register Here</span>
                    <span class="font-light text-gray-500 mb-8">
                        Create an Account || Kings Hotel Nusa Dua
                    </span>
                    @if (session('error'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500 text-center">
                            <p class="text-red-500">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                    <!-- Pesan success -->
                    @if (session('success'))
                        <div class="mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500 text-center">
                                <p class="text-green-500">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="py-0">
                        <span class="mb-2 text-md">Name</span>
                        <input type="text"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="name" />
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Username</span>
                        <input type="text"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="username" />
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Password</span>
                        <input type="password" name="password"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                    </div>
                    <div class="py-2">
                        <span class="mb-2 text-md">Confirm Password</span>
                        <input type="password" name="confirm_password"
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                    </div>
                    <div class="flex justify-between w-full py-4">
                        <div class="mr-24">
                            <input type="checkbox" name="ch" id="ch" class="mr-2" />
                            <span class="text-md">Remember for 30 days</span>
                        </div>
                        <span class="font-bold text-md">Forgot password</span>
                    </div>
                    <button type="submit"
                        class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                        Sign Up
                    </button>

                    <div class="text-center text-gray-400">
                        Have account?
                        <a href="{{ route('auth.login') }}" class="font-bold underline text-blue-500">Sign In Here</a>
                    </div>
                </div>


            </form>
            <!-- kanan -->
            <div class="relative">
                <img src= "{{ asset('assets/img/beachview.jpg') }}" alt="img"
                    class="w-[500px] h-full hidden rounded-r-2xl md:block object-cover" />
            </div>

        </div>
    </div>
</body>

</html>
