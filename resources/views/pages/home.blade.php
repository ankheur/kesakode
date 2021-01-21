<!doctype html>
<html>
<head>
    <title>Accueil - Kesakode</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Kesakode">
    <meta name="description" content="bla">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-900 leading-normal font-sans bg-gray-100">
<div id="app">
    <header id="header">
        <div class="container mx-auto flex flex-row items-center h-48 overflow-hidden">
            <img src="{{ asset('img/kesakode_homepage.jpg') }}" alt="">
        </div>
    </header>

    <nav>
        <div class="container mx-auto flex flex-row items-center py-4">
            <form class="md:w-2/3" action="/search/results">
                <input class="w-full p-2 border-2 rounded-lg bg-white shadow-md text-gray-700 font-normal focus:outline-none focus:font-semibold" type="text" name="recherche" placeholder="Rechercher">
            </form>

            <div class="md:w-2/6 flex flex-row items-center justify-around">
                <a class="p-4" href="{{ route('roadmap') }}">
                    Roadmap
                </a>
                <a class="p-4" href="{{ route('debuter') }}">
                   Premiers pas 
                </a>
                <a class="p-4" href="{{ route('kesakoi') }}">
                   Kesakoi ?
                </a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto flex flex-col">
        
        <article id="" class="flex flex-row items-center text-center py-20 border-b-2 border-gray-200">
            <h2 class="md:w-1/4 text-2xl">Web</h2>
            <ul class="md:w-3/4 grid grid-cols-3 gap-y-24">
                <li><a href="{{ url('html') }}">HTML</a></li>
                <li>CSS</li>
                <li>JS</li>
                <li>PHP</li>
                <li>Node</li>
                <li>Python</li>
            </ul>
        </article>
        <article id="" class="flex flex-row items-center text-center py-20">
            <h2 class="md:w-1/4 text-2xl">Logiciel</h2>
            <ul class="md:w-3/4 grid grid-cols-3 gap-y-24">
                <li>Foo</li>
                <li>Bar</li>
                <li>Baz</li>
            </ul>
        </article>
        
    </main>
</div>

<script>
    // oh yeah, rollin' that custom js ✨
    function toggleNav() {
        var menu = document.getElementById('hamburger-menu');

        console.log(menu.classList.contains('hidden'));

        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
</script>
</body>
</html>