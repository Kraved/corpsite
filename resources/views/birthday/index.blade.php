@extends('layouts.main')

@section('content')
<section class="content">
    <h1 class="content-title">Дни Рождения</h1>
    <article class="birthday">
        <h1 class="birthday-title">Январь</h1>
        <div class="birthday-text">{!! $data['January']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Февраль</h1>
        <div class="birthday-text">{!! $data['February']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Март</h1>
        <div class="birthday-text">{!! $data['March']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Апрель</h1>
        <div class="birthday-text">{!! $data['April']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Май</h1>
        <div class="birthday-text">{!! $data['May']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Июнь</h1>
        <div class="birthday-text">{!! $data['June']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Июль</h1>
        <div class="birthday-text">{!! $data['July']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Август</h1>
        <div class="birthday-text">{!! $data['August']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Сентябрь</h1>
        <div class="birthday-text">{!! $data['September']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Октябрь</h1>
        <div class="birthday-text">{!! $data['October']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Ноябрь</h1>
        <div class="birthday-text">{!! $data['November']->text !!}</div>
    </article>
    <article class="birthday">
        <h1 class="birthday-title">Декабрь</h1>
        <div class="birthday-text">{!! $data['December']->text !!}</div>
    </article>
</section>

@endsection
