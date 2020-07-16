@extends('layouts.main')

@section('content')
    <section class="content">
        <article class="links">
            <h1 class="content-title">Ссылки</h1>
            @foreach($data as $link)
                <div class="link">
                    <a class="link-text" href="{{ $link->url }}">{{ $link->name }}</a>
                </div>
            @endforeach
        </article>
    </section>
@endsection
