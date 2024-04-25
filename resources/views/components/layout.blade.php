<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-black">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between py-12">
                    <div class="flex flex-1 justify-between">
                        <a href="/shop" class="text-white uppercase text-3xl px-3 py-2 font-medium rounded-lg"
                            aria-current="page">Shop</a>
                        <a href="/faq" class="text-white uppercase text-3xl px-3 py-2 font-medium rounded-lg"
                            aria-current="page">FAQ</a>
                    </div>
                    <div class="flex flex-1 justify-center">
                        <a href="/">
                            <img width="96" height="96" src="/img/logo.png" alt="myDrugs Logo">
                        </a>
                    </div>
                    <div class="flex flex-1 justify-between">
                        <a href="/safety" class="text-white uppercase text-3xl px-3 py-2 font-medium rounded-lg"
                            aria-current="page">Safety</a>
                        <a href="/contact" class="text-white uppercase text-3xl px-3 py-2 font-medium rounded-lg"
                            aria-current="page">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
            </div>
        </header> --}}
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
