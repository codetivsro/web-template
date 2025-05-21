@extends('layouts.base')

@section('body')
    @include('layouts.components.header')
    <main>{{ $slot }}</main>
    @include('layouts.components.footer')
@endsection