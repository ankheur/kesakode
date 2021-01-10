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
        <div class="container mx-auto flex flex-row items-center border-b-2 border-gray-200 py-4 mb-6">
            <div class="md:w-1/4">
                <a href="/" class="font-bold text-gray-700 hover:text-gray-700 text-xl">Kesakode</a>
            </div>

            <form class="md:w-1/2" action="/search/results">
                <input class="w-full p-2 border-2 rounded-lg bg-white shadow-md text-gray-700 font-normal focus:outline-none focus:font-semibold" type="text" name="q" placeholder="Search the docs">
            </form>

            <div class="flex flex-row items-center">
                <a class="w-5 mr-4" href="https://statamic.com/discord">
                    
                </a>
                <a class="w-5" href="https://github.com/doublethreedigital/docs-starter-kit">
                    
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto flex flex-col md:flex-row">
        <div class="md:w-1/4">
            <div class="px-2">
                <button class="w-full bg-gray-200 p-2 rounded-lg mb-2 text-center text-gray-800 font-semibold uppercase md:hidden" onclick="toggleNav()">
                    Toggle Navigation
                </button>
            </div>

            <div id="hamburger-menu" class="flex flex-col hidden md:block">
                <div id="" class="flex flex-col mb-6 p-2">
                    <h3 class="font-bold uppercase text-sm text-gray-600 mb-1">a</h3>

                    <ul class="flex flex-col m-0 list-none">
                        
                        <li id="" class="hover:ml-2 mt-1 mb-1">
                            <a class=" text-yellow-500 font-semibold text-gray-900 hover:text-yellow-500 text-md" href="">
                                b
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="hidden md:flex flex-col text-xs my-4 p-2 text-gray-700">
                <a class="mb-1" href="https://statamic.com">Powered by Statamic</a>
            </div>
        </div>

        <div class="md:w-1/2 p-2 md:p-0">
            <article id="" class="md:w-full">
                
            </article>
        </div>
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