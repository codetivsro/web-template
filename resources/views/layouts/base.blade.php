<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }

        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'functionality_storage': 'denied',
            'security_storage': 'granted'
        });

        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    @livewireStyles
    @stack('head')
</head>
<body class="text-gray-800">
@yield('body')
@livewireScripts
@stack('scripts')
</body>
</html>