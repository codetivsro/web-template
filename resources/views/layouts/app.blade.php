@extends('layouts.base')

@section('title', $title ?? '')

@section('body')
    <x-admin-bar/>
    <x-header/>
    <main>{{ $slot }}</main>
    <x-footer/>
@endsection