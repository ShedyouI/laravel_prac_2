<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Массивы</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans m-0 p-0">
    <header class="bg-gray-200 py-5 text-center">
        <div class="text-xl font-bold mb-2">Задание 2</div>
        <nav>
            <a href="{{ route('home') }}" class="mx-4 no-underline text-gray-800 font-bold hover:text-gray-600">Главная</a>
            <a href="{{ route('array') }}" class="mx-4 no-underline text-gray-800 font-bold hover:text-gray-600">Товары</a>
        </nav>
    </header>

    <main class="py-5 w-[800px] mx-auto bg-white min-h-[400px]">
        <h1 class="text-2xl mb-4">Список товаров</h1>

        <div class="mb-5 pb-3 border-b border-gray-200">
            <a href="{{ route('array.shuffle') }}" class="inline-block mr-3 py-2 px-4 bg-gray-300 text-gray-800 no-underline hover:bg-gray-400">Перемешать массив</a>
            <a href="{{ route('array.sort') }}" class="inline-block mr-3 py-2 px-4 bg-gray-300 text-gray-800 no-underline hover:bg-gray-400">Сортировать по цене</a>
            <a href="{{ route('array.filter') }}" class="inline-block mr-3 py-2 px-4 bg-gray-300 text-gray-800 no-underline hover:bg-gray-400">Фильтр (> 1000)</a>
            <a href="{{ route('array') }}" class="inline-block mr-3 py-2 px-4 bg-gray-300 text-gray-800 no-underline hover:bg-gray-400">Сбросить</a>
        </div>

        <div class="grid grid-cols-4 gap-5 mt-5">
            @foreach($array as $item)
                <div class="bg-white border border-gray-300 p-4 text-center">
                    <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" alt="{{ $item['title'] }}" class="max-w-full h-[120px] object-cover mb-2">
                    <h3 class="text-base mb-1">{{ $item['title'] }}</h3>
                    <p class="text-sm">Цена: {{ $item['price'] }} руб.</p>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>