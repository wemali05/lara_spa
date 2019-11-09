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

        <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
            <h1>
                <img src="/images/logo.svg" alt="lara_spa">
            </h1>
        </header>
        <div class="container px-8">

            <main class="flex">
                <aside class="w-1/5 pt-8">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-4 text-base md-5">The Brand</h5
                            class="uppercase font-bold mb-4 ">
                        <ul>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/colors">Colors</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/typography">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-6">
                        <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5 class="uppercase font-bold mb-4 ">
                        <ul>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/loaders-and-animation">Loaders and Animation
                                </router-link>
                            </li>
                            <li class="text-sm mb-4 leading-loose">
                                <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
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