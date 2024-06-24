@extends('layouts.app')

@section('titles')
    О нас
@endsection

@section('content')
    @include('inc.header')
    <div class="dark:text-white">
        <div class="p-4 md:ml-64">
            <div class="p-4 border-20 border-blue-800 rounded-lg dark:border-gray-700 scroll-my-96">
                <div class="items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">

                    <p class="text-2xl text-black-1800 dark:text-white-500 py-5">Компания существует с 2018 года и на этом этапе проекта у нас есть другие
                        возможности для вашей пользы.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
