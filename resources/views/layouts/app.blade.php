@extends('layouts.base')

@section('title', $title ?? '')

@section('body')
    @include('layouts.components.header')
    <main>{{ $slot }}</main>
    @include('layouts.components.footer')
@endsection