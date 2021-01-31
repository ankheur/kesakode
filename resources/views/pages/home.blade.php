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
        <div class="relative flex items-center justify-center container mx-auto h-48 overflow-hidden">
            <h1 class="z-10 text-5xl text-white font-medium absolute">Kesakode</h1>
            <img class="opacity-60" src="{{ asset('img/kesakode_homepage.jpg') }}" alt="">
        </div>
    </header>

    <nav>
        <div class="container mx-auto flex flex-row items-center py-4">
            <form class="md:w-2/3" action="/search/results">
                <label for="search_field" class="sr-only">Search</label> 
                <div class="relative text-gray-400 focus-within:text-gray-600 min-w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414   1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div> 
                    <input id="text" type="search" placeholder="Rechercher.." tabindex="0" spellcheck="false" autocomplete="off" class="py-3 px-4 bg-white placeholder-gray-400 text-gray-900 rounded-lg shadow-md appearance-none w-full block pl-12 focus:outline-none">
                </div>
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
        <article id="category_web" class="flex flex-row text-center py-20 border-b-2 border-gray-200">
            <div class="md:w-1/4 flex items-center justify-center group relative overflow-hidden rounded-l-lg bg-gradient-to-r from-indigo-500 to-indigo-300">
                <h2 class="text-3xl text-white font-medium">Langages Web</h2>
            </div>
            <ul class="md:w-3/4 grid grid-cols-3 gap-y-24 shadow-lg rounded-r-lg overflow-hidden bg-white p-10">
                @foreach($topics as $topic)
                    <li class="flex items-center justify-center"><a href="{{ url($topic->category->slug . '/' . $topic->slug) }}" class="flex items-center justify-center w-24 h-24 border-2 border-gray-200 rounded-full border-opacity-0 hover:border-opacity-100"><img src="{{ $topic->logo}}" alt="" width="50"></a></li>
                @endforeach
            </ul>
        </article>
        <article id="category_logiciel" class="flex flex-row text-center py-20 border-b-2 border-gray-200">
            <div class="md:w-1/4 flex items-center justify-center group relative overflow-hidden rounded-l-lg bg-gradient-to-r from-red-900 to-red-700">
                <h2 class="text-3xl text-white font-medium">Outils</h2>
            </div>
            <ul class="md:w-3/4 grid grid-cols-3 gap-y-24 shadow-lg rounded-r-lg overflow-hidden bg-white p-10">
                <li><a href="{{ url('webpack') }}">Webpack</a></li>
                <li>VSCode</li>
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