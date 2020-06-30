@extends('layouts.main')

@section('content')
    @foreach( $data as $item)
        <a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a>
        <br>
        {{ $item->created_at }}
        <br>
        {{ $item->author }}
        <br>
        {{ $item->text }}
        <br>
        -----------------------------
        <br>
    @endforeach
    @if($data->all() > $data->count())
        {{ $data->links() }}
    @endif
@endsection
