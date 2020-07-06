@extends('layouts.main')


@section('content')
    <section class="content  container-fluid  text-center">
        <article class="regulations mb-5">
            <h1 class="regulations-title  mb-5">Положения</h1>
            @foreach($data['regulations'] as $item)
                <div class="document">
                    <a class="document-name" href="{{ asset($item->path) }}" download>{{ $item->name }}</a>
                    <a class="document-btn btn" href="{{ asset($item->path) }}" download>скачать</a>
                </div>

            @endforeach
        </article>
        <article class="templates">
            <h1 class="templates-title  mb-5">Шаблоны документов</h1>
            @foreach($data['templates'] as $item)
                <div class="document">
                    <a class="document-name" href="{{ asset($item->path) }}" download>{{ $item->name }}</a>
                    <a class="document-btn btn" href="{{ asset($item->path) }}" download>скачать</a>
                </div>
            @endforeach
        </article>
    </section>
@endsection
