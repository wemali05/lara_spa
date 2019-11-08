<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">



</head>

<body class="font-sans">
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <h1>laravel</h1>
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5 class="uppercase font-bold mb-4">
                        <ul>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/">Logo</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Colors</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-6">
                        <h5 class="uppercase font-bold mb-4">Doodles</h5 class="uppercase font-bold mb-4">
                        <ul>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/">Mascot</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Illustrations</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Loaders and Animation</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/about">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>

                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>

            </main>
        </div>
    </div>


    <script src="/js/app.js"></script>
</body>

</html>