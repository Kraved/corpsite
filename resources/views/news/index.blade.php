@extends('layouts.main')

@section('content')
    <section class="content  container-fluid  text-center">
    @foreach( $data as $item)
        <article class="news">
            <h1 class="news-title mb-5"><a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a></h1>

            <h4 class="news-text mb-4">{!! $item->text !!}</h4>

            <div class="news-info  d-flex  justify-content-between">
                <div class="news-author">{{ $item->user->name }}</div>
                <div class="news-date">{{ $item->created_at }}</div>
            </div>

        </article>
    @endforeach
    @if($data->all() > $data->count())
        {{ $data->links() }}
    @endif
    </section>
@endsection
