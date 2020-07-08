<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'corpsite') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Подключение редактора  nicEdit-->
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <!-- Редактор nicEdit будет включен на всех textarea!! -->
    <script type="text/javascript">
        //<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
        //]]>
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main class="main">
    @include('nav.nav')
    {{--    Добавить отображение navbar в зависимости от аутентификации --}}
    @if($errors->any())
        @include('layouts.includes.errors_block')
    @endif
    @if(session('success'))
        @include('layouts.includes.success_block')
    @endif

    @yield('content')

</main>
</body>
