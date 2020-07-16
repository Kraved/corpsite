@extends('layouts.management')

@section('content')
<section class="management">
    <article class="birthday">
        <div class="birthday__btn  text-left  mb-3">
            <a class="btn  btn-success" href="{{ route('birthday.management.edit', $data->id) }}">Редактировать</a>
        </div>
        <div class="birthday__text  mb-3">
            {!! $data->text !!}
        </div>
        <div class="birthday_date  text-left  mb-3">{{ $data->updated_at }}</div>
        <div class="birthday__btn  text-left">
            <a class="btn  btn-success" href="{{ route('birthday.management.edit', $data->id) }}">Редактировать</a>
        </div>
    </article>
</section>

@endsection
