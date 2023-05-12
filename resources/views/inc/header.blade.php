<header class="flex items-center justify-between p-6">
    <a href="/" class="flex items-center gap-2">
        <img class="h-10 text-green-600" src="images/SF.png" alt="SF">
        <span class="text-xl font-black">SeoFast</span>
    </a>
    <div>
        <a href="{{ route('yangi') }}"
            class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-red shadow-lg transition duration-150
            ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500
            focus:ring-offset-2">Yangiliklar</a>
        <a href="{{ route('narx') }}"
            class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-red shadow-lg transition duration-150 ease-in-out
            hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500
            focus:ring-offset-2">Narxlar</a>
        <a href="{{ route('bizh') }}"
            class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-red shadow-lg transition duration-150
            ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500
            focus:ring-offset-2">Biz haqimizda</a>
    </div>
    <div>

    </div>
    <div>
        @guest
            <a href="{{ route('login') }}"
                class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Kirish</a>
            <a href="{{ route('register') }}"
                class="rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Ro`yhat</a>
        @endguest
        @auth
            <a href="{{ route('dashboard') }}"
                class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Kabinet</a>
        @endauth
    </div>
</header>
