<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans m-0 p-0">
    <header class="bg-gray-200 py-5 text-center border-b-2 border-gray-300">
        <div class="text-xl font-bold mb-2">Мой Сайт</div>
        <nav>
            <a href="{{ route('home') }}" class="mx-4 no-underline text-gray-800 font-bold hover:text-gray-600">Главная</a>
            <a href="{{ route('array') }}" class="mx-4 no-underline text-gray-800 font-bold hover:text-gray-600">Массивы</a>
        </nav>
    </header>

    <main class="py-5 w-[800px] mx-auto bg-white min-h-[400px]">
        <h1 class="text-2xl mb-4">Добро пожаловать</h1>
        <img src="{{ Vite::asset('resources/images/home_img.jpg') }}" alt="Главная картинка" class="max-w-full mb-4">
        <p class="leading-6">Это контентная часть главной страницы. Здесь может быть любой текст, описывающий ваш проект или учебное задание по Laravel.</p>
    </main>
</body>
</html>