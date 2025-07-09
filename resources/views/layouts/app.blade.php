@extends('layouts.base')

@section('title', $title ?? '')

@section('body')
    <x-header/>
    <main>{{ $slot }}</main>
    <x-footer/>
@endsection