@extends('layouts.app')

@section('titles')
    Категории
@endsection

@section('content')
    <header class="flex items-center justify-between p-6">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">Главная</span>
        </a>
        <div class="flex gap-2">
            <a href="{{ route('Post') }}"
                class="rounded-md bg-green-600 py-2 px-4 font-semibold text-white shadow-lg transition duration-150 ease-in-out hover:bg-gray-700 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Кабинет</a>
            <form method="post" action="{{ route('logout') }}" class="flex">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Выход</a>
            </form>
        </div>
    </header>
    <div class="m-6 mb-12 rounded-xl p-6 shadow-xl sm:p-10">
        <button data-modal-target="TwoModal" data-modal-toggle="TwoModal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Добавить категории
        </button>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Дерево
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Наименование
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Редактировать
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Удалить
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @if ($categories->isEmpty())
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                0
                            </th>
                            <td>
                                <p class="px-6 py-4">Каталог не найден.</p>
                            </td>
                            <td>
                                <p class="px-6 py-4">Не найден.</p>
                            </td>
                            <td>
                                <p class="px-6 py-4">Не найден.</p>
                            </td>
                        @else
                            @foreach ($categories as $category)
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $category->parent_id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $category->name }}
                                </td>
                                <td class="px-6 py-4">
                                    Редактировать
                                </td>
                                <td class="px-6 py-4">
                                    Удалить
                                </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
