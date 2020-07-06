@extends('layouts.main')

@section('content')
<section class="content">
    <h1 class="content-title">Дни Рождения</h1>
    <article class="birthday">
        <h1 class="birthday-title">Январь</h1>
        {{ $data['January']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Февраль</h1>
        {{ $data['February']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Март</h1>
        {{ $data['March']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Апрель</h1>
        {{ $data['April']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Май</h1>
        {{ $data['May']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Июнь</h1>
        <div class="birthday-text">{{ $data['June']->text }}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Июль</h1>
        {{ $data['July']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Август</h1>
        {{ $data['August']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Сентябрь</h1>
        {{ $data['September']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Октябрь</h1>
        {{ $data['October']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Ноябрь</h1>
        {{ $data['November']->text }}
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Декабрь</h1>
        {{ $data['December']->text }}
    </article>
</section>

@endsection
