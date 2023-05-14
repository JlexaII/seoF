@extends('layouts.app')

@section('titles')
    Biz haqimizda
@endsection

@section('content')
    @include('inc.header')
    <div class="flex flex-row">
        <div class="basis-1/4">@include('inc.sidebar')</div>
        <div class="basis-1/4"><h1>Biz haqimizda</h1></div>
    </div>
@endsection
