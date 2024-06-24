@extends('layouts.app')

@section('titles')
    Кабинет
@endsection

@section('content')
    {{-- @dd(get_defined_vars()); --}}
    <header class="flex items-center justify-between p-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">
                Главное
            </span>
        </a>
        <div class="flex gap-2">
            @if (Auth()->user()->email == 'dilimalikam@gmail.com')
                <a href="{{ route('Category') }}"
                    class="rounded-md bg-yellow-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-gray-700
                    hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Категория</a>
                <a href="{{ route('moderation') }}"
                    class="rounded-md bg-yellow-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-gray-700
                    hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Модерация</a>
            @endif
            <a href="{{ route('Userprofile') }}"
                class="rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Профиль</a>
            <form method="post" action="{{ route('logout') }}" class="flex">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Выход</a>
            </form>
        </div>
    </header>
    <main>
        <div class="m-6 mb-12 rounded-xl p-6 shadow-xl sm:p-10">
            <div class="relative overflow-x-auto">
                <!-- Modal toggle -->
                <button data-modal-target="OneModal" data-modal-toggle="OneModal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Добавление
                </button>
                <div class="px-6 py-3"> @error('texted')
                        <p class="text-red-600">{{ $message }}</p>
                    @else
                        <p>Текст</p>
                    @enderror
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Текст
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Модерация
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Удалить
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->index + 1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {!! $key->text !!}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($key->status == 1)
                                        На модерации
                                    @else
                                        Напечатоно
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <button>Удалить</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->onEachSide(0)->links() }}
        </div>
        <link rel="stylesheet" href="chosen/chosen.min.css">
        <script src="chosen/jquery.js"></script>
        <script src="chosen/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-chosen').chosen({
                    width: '100%',
                    no_results_text: 'Нет запроса:',
                    placeholder_text_single: 'Категории'
                });
            });
        </script>
    </main>
    <br>
    <hr><br>
@endsection
