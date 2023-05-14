@extends('layouts.app')

@section('titles')
    Narxlar
@endsection

@section('content')
    @include('inc.header')
    <div class="flex flex-row">
        <div class="basis-1/4">@include('inc.sidebar')</div>
        <div class="basis-1/4">
            <h1>Barcha narx navo</h1>
        </div>
    </div>
@endsection
