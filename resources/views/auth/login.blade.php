@extends('layouts.app')

@section('titles')
    Вход в кабинет
@endsection

@section('content')
    <header class="flex items-center justify-between p-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">Вход в кабинет</span>
        </a>
        <div>
            <a href="{{ route('register') }}"
                class="rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Регистрация</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
        <div class="mx-auto max-w-md">
            <svg class="mx-auto h-12 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
            </svg>
            <h2 class="mt-2 text-2xl font-bold text-gray-900 sm:mt-6 sm:text-3xl">Добро пожаловать!</h2>
        </div>
        <div class="mx-auto mt-6 w-full max-w-md rounded-xl bg-white/80 p-6 shadow-xl backdrop-blur-xl sm:mt-10 sm:p-10">
            @if (session('status'))
                <div class="flex gap-3 rounded-md border border-green-500 bg-green-50 p-4 mb-6">
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-sm font-medium text-green-800">{{ session('status') }}</h3>
                </div>
            @endif
            <form action="{{ route('login') }}" method="post" autocomplete="off">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">электронный адрес</label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="{{ $errors->has('email') ? 'text-red-400' : 'text-gray-400' }} h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            class="{{ $errors->has('email') ? 'text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500 border-red-300' : 'border-gray-300 focus:border-green-500 focus:ring-green-500 placeholder:text-gray-400' }} w-full rounded-md pl-10 text-sm"
                            placeholder="имя@майл.ру" />
                        @error('email')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @enderror
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Пароль</label>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="{{ $errors->has('password') ? 'text-red-400' : 'text-gray-400' }} h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="{{ $errors->has('password') ? 'text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500 border-red-300' : 'border-gray-300 focus:border-green-500 focus:ring-green-500 placeholder:text-gray-400' }} w-full rounded-md pl-10 text-sm"
                            placeholder="минимум 8 символов" />
                        @error('password')
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @enderror
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500" />
                        <label for="remember" class="text-sm text-gray-900">Запомнить</label>
                    </div>
                    <a href="{{ route('password.request') }}"
                        class="text-sm font-medium text-green-600 hover:text-green-500">Восстановить пароль?</a>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-md bg-green-600 py-2 px-4 font-semibold text-white 
                        shadow-lg transition duration-150 ease-in-out hover:bg-green-900 hover:shadow-xl focus:shadow-xl focus:outline-none 
                        focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Вход</button>
                    <br>

                    <div class="flex flex-col space-y-2">
                        <a href="{{ url('auth/google') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mb-2">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M21.35 11.1H12v2.8h5.6C17 16.6 15.3 18 12 18c-3.3 0-6-2.7-6-6s2.7-6 6-6c1.5 0 2.8.5 3.9 1.4L19 4.3C17.3 2.9 14.8 2 12 2 6.5 2 2 6.5 2 12s4.5 10 10 10c5.2 0 9.3-3.7 9.3-9 0-.6 0-1.2-.1-1.8.2-.2.2-.4.2-.6z">
                                </path>
                            </svg>
                            <span>Вход с Google</span>
                        </a>

                        <a href="{{ url('auth/facebook') }}"
                            class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded inline-flex items-center mb-2">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.5 12C22.5 6.76 18.24 2.5 13 2.5S3.5 6.76 3.5 12c0 4.87 3.52 8.92 8.11 9.74v-6.89h-2.44v-2.85h2.44V9.94c0-2.42 1.46-3.75 3.66-3.75 1.04 0 1.94.08 2.2.11v2.55h-1.51c-1.19 0-1.42.57-1.42 1.39v1.83h2.83l-.37 2.85h-2.46v6.89C18.98 20.92 22.5 16.87 22.5 12z">
                                </path>
                            </svg>
                            <span>Вход с Facebook</span>
                        </a>

                        <a href="{{ url('auth/twitter') }}"
                            class="bg-blue-400 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded inline-flex items-center mb-2">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.95 4.57c-.88.39-1.83.65-2.83.77a4.92 4.92 0 0 0 2.15-2.71c-.95.56-2 1-3.14 1.22a4.92 4.92 0 0 0-8.38 4.48A13.96 13.96 0 0 1 1.64 3.15a4.92 4.92 0 0 0 1.52 6.56 4.85 4.85 0 0 1-2.23-.62v.06c0 2.34 1.67 4.3 3.89 4.75a4.92 4.92 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42 9.87 9.87 0 0 1-6.1 2.1c-.39 0-.78-.02-1.17-.07a13.93 13.93 0 0 0 7.55 2.21c9.05 0 14-7.49 14-14 0-.21 0-.42-.02-.63A10.02 10.02 0 0 0 24 4.6c-.88.39-1.83.65-2.83.77a4.92 4.92 0 0 0 2.15-2.71z">
                                </path>
                            </svg>
                            <span>Вход с Twitter</span>
                        </a>

                        <a href="{{ url('auth/instagram') }}"
                            class="bg-gradient-to-br from-purple-500 to-pink-500 hover:from-purple-950 hover:to-pink-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mb-2">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.73 0 8.332.01 7.93.06 7.528.12 7.187.304 6.908.608c-.28.304-.505.663-.674 1.078-.168.415-.253.867-.253 1.358v7.824c0 .491.085.943.253 1.358.17.415.394.774.674 1.078.279.304.62.488 1.022.552.411.064.812.085 1.211.064.399.021.781.042 1.147.064.366-.022.715-.043 1.044-.064.33.021.661.042.993.064.332.021.663.043.993.064.33-.021.682-.043 1.057-.064.375.021.756.042 1.147.064.401-.064.742-.248 1.022-.552.28-.304.505-.663.674-1.078.168-.415.253-.867.253-1.358v-7.824c0-.491-.085-.943-.253-1.358-.17-.415-.394-.774-.674-1.078-.279-.304-.62-.488-1.022-.552-.411-.064-.812-.085-1.211-.064-.399-.021-.781-.042-1.147-.064-.366.022-.715.043-1.044.064-.33-.021-.661-.042-.993-.064-.332-.021-.663-.043-.993-.064-.33.021-.682.043-1.057.064-.375-.021-.756-.042-1.147-.064-.401.064-.742.248-1.022.552-.28.304-.505.663-.674 1.078-.168.415-.253.867-.253 1.358v7.824c0 .491.085.943.253 1.358.17.415.394.774.674 1.078.279.304.62.488 1.022.552.411.064.812.085 1.211.064.399.021.781.042 1.147.064.366-.022.715-.043 1.044-.064.33.021.661.042.993.064.332.021.663.043.993.064.33-.021.682-.043 1.057-.064.375.021.756.042 1.147.064.401-.064.742-.248 1.022-.552.28-.304.505-.663.674-1.078.168-.415.253-.867.253-1.358v-7.824c0-.491-.085-.943-.253-1.358-.17-.415-.394-.774-.674-1.078-.279-.304-.62-.488-1.022-.552-.411-.064-.812-.085-1.211-.064-.399-.021-.781-.042-1.147-.064-.366.022-.715.043-1.044.064-.33-.021-.661-.042-.993-.064-.332-.021-.663-.043-.993-.064-.33.021-.682.043-1.057.064-.375-.021-.756-.042-1.147-.064-.401.064-.742.248-1.022.552-.28.304-.505.663-.674 1.078-.168.415-.253.867-.253 1.358z">
                                </path>
                            </svg>
                            <span>Вход с Instagram</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
