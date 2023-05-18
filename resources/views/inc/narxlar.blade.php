@extends('layouts.app')

@section('titles')
    Narxlar
@endsection

@section('content')
    @include('inc.header')
    <div class="dark:text-white">
        <div class="p-4 md:ml-64">
            <div class="flex p-4 dark:border-gray-700 scroll-my-96">
                <div class="grid grid-cols-2 gap-4 mb-4 border border-spacing-25">
                    <div class="flex items-center justify-center rounded bg-gray-50 h-25 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 border rounded"><img src="/images/erkin.png" alt=""></p>
                    </div>
                    <div class="flex items-center justify-center rounded bg-gray-50 h-25 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 border rounded"><img src="/images/tezkor.png" alt=""></p>
                    </div>
                    <div class="flex items-center justify-center rounded bg-gray-50 h-25 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 border rounded"><img src="/images/jiddiy.png" alt=""></p>
                    </div>
                    <div class="flex items-center justify-center rounded bg-gray-50 h-25 dark:bg-gray-800">
                        <p class="text-2xl text-gray-400 dark:text-gray-500 border rounded"><img src="/images/vip.png" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
