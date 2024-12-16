<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen font-sans">

    <main class="flex flex-col items-center justify-center">
        {{-- HEADER --}}
        <header class="bg-white w-full px-5 mb-14 mx-20">
            <div class="flex items-center justify-between min-h-[90px] mx-24">
                <div class="flex space-x-4">
                    <div class="w-10 h-auto ">
                        <img src="{{ asset('src/images/logo.png') }}" alt="logo">
                    </div>
                    <div class="flex flex-col items-start justify-center">
                        <h2 class="text-lg font-semibold text-left">Caffeinated</h2>
                        <p class="text-sm font-medium text-left">Inventory</p>
                    </div>
                </div>
                <div class="bg-black text-white px-4 py-1 text-xs rounded-2xl ">
                    account
                </div>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
    </main>

</body>

</html>
