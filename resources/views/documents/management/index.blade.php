@extends('layouts.management')

@section('content')
    <section class="management-content">
        <div class="management-create-btn text-left ml-2">
            <a class="btn btn-primary" href="{{ route('documents.management.create') }}">Добавить</a>
        </div>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Путь</th>
                <th>Тип</th>
                <th>Загрузил</th>
                <th>Дата добавления</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->path }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>@include('documents.management.includes.delete_form')</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
    </section>
@endsection
