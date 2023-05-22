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
                    @foreach ($data as $keys)
                        <hr>
                        <div>{{ $loop->index + 1 }}
                            {!! $keys->text !!}
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
