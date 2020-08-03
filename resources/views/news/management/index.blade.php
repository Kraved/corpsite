@extends('layouts.management')

@section('content')
    <section class="management-content">
        <div class="management-create-btn">
            <a class="btn btn-primary" href="{{ route('news.management.create') }}">Добавить</a>
        </div>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Заголовок</th>
                    <th>Содержимое</th>
                    <th>Автор</th>
                    <th>Дата добавления</th>
                    <th>Редактировать</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr @if ($item->published == false)
                    style="background-color: #649985"
                @endif>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->text }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><a class="btn btn-danger" href="{{ route('news.management.edit', $item->id) }}">Редактировать</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
    </section>
@endsection
