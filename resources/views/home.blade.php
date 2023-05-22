@extends('layouts.app')

@section('titles')
    SeoFast
@endsection

@section('content')
    @include('inc.header')
    @include('inc.sidebar')
    <div class="dark:text-white">
        <div class="p-4 sm:ml-64">
            <div class="p-4">
                <div>
                    @foreach ($posts as $keys)
                        <hr>
                        <div>
                            <h1 class="text-5xl text-gray-900 dark:text-white bg-blue-500 rounded my-5 rotate-90">{{ $keys->category->name }}</h1>
                        </div>
                        <div>{!! $keys->text !!}</div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
