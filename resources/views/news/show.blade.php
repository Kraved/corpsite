@extends('layouts.main')

@section('content')
    <section class="content  container-fluid  text-center">
            <article class="news">
                <h1 class="news-title mb-5"><a href="{{ route('news.show', $data->id) }}">{{ $data->title }}</a></h1>

                <h4 class="news-text mb-4">{{ $data->text }}</h4>

                <div class="news-info  d-flex  justify-content-between">
                    <div class="news-author">{{ $data->author }}</div>
                    <div class="news-date">{{ $data->created_at }}</div>
                </div>
            </article>
    </section>
@endsection
