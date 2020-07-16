@extends('layouts.management')

@section('content')
    <section class="management">
        <article class="links">
            <h1 class="content-title">Ссылки</h1>

            @foreach($data as $item)
                <div class="link d-flex justify-content-center">
                    <a class="link-text mr-5" href="{{ $item->url }}">{{ $item->name }}</a>
                    @include('links.management.includes.delete_form')
                </div>
            @endforeach
            <a class="btn btn-primary mb-3" href="{{ route('links.management.create') }}">Добавить новую ссылку</a>
        </article>
    </section>
@endsection
