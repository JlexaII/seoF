@extends('layouts.app')

@section('titles')
    Profil
@endsection

@section('content')
    <header class="flex items-center justify-between p-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">Boshiga</span>
        </a>
        <div class="flex gap-2">
            @if (Auth()->user()->email == 'dilimalikam@gmail.com')
                <a href="{{ route('Category') }}"
                    class="rounded-md bg-yellow-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-gray-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Kategoriya</a>
            @endif
            <a href="{{ route('Post') }}"
                class="rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-gray-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Kabinet</a>
            <form method="post" action="{{ route('logout') }}" class="flex">
                @csrf

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Chiqish</a>
            </form>
        </div>
    </header>
    <main>
        <div class="m-6 mb-12 rounded-xl p-6 shadow-xl sm:p-10">
            <form action="{{ route('Userprofile') }}" method="post">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        @error('name')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ismingiz</label>
                        @enderror
                        <input type="text" id="first_name" name="name" value="{{ $data->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nimajon(xon)">
                    </div>
                    <div>
                        @error('lastname')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="lastname"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Familiya</label>
                        @enderror
                        <input type="text" id="lastname" name="lastname" value="{{ $data->lastname }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nimajonov(va)">
                    </div>
                    <div>
                        @error('company')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Companiya</label>
                        @enderror
                        <input type="text" id="company" name="company" value="{{ $data->company }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Seo Fast">
                    </div>
                    <div>
                        @error('tel')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefon
                                raqam</label>
                        @enderror
                        <input type="tel" id="tel" name="tel" value="{{ $data->tel }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="+998991001010" pattern="+[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}">
                    </div>
                    <div>
                        @error('website')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sayt
                                sahifasi</label>
                        @enderror

                        <input type="url" id="website" name="website" value="{{ $data->website }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="SeoFast.uz">
                    </div>
                    <div>
                        @error('visitors')
                            <p class="text-red-600">{{ $message }}</p>
                        @else
                            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unikal
                                ko`rivchilar</label>
                        @enderror
                        <input type="number" id="visitors" name="visitors" value="{{ $data->visitors }}" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="">
                    </div>
                </div>
                <div class="mb-6">
                    @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                    @else
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-pochtangiz</label>
                    @enderror

                    <input id="email" value="{{ auth()->user()->email }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                        block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                        dark:focus:border-blue-500"
                        disabled>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" name="cheked" required
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Shrtlarni qabul
                        qildim <a href="{{ route('accept') }}" target="_blank"
                            class="text-blue-600 hover:underline dark:text-blue-500">va tanishdim</a>.</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Saqlash</button>
            </form>

        </div>
    </main>
@endsection
