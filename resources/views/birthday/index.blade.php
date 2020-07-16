@extends('layouts.main')

@section('content')
    <section class="content">
        <article class="birthday">
            {!! $data->text !!}
        </article>
    </section>
@endsection

