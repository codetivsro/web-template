@extends('layouts.base')

@section('body')
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="w-full max-w-[295px]">
            <div>{{ $slot }}</div>
        </div>
    </div>
@endsection