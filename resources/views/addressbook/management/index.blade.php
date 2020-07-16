@extends('layouts.management')

@section('content')
    <section class="management-content">
        <div class="management-create-btn text-left ml-2">
            <a class="btn btn-primary" href="{{ route('addressbook.management.create') }}">Добавить</a>
        </div>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Компания</th>
                <th>ФИО</th>
                <th>Номер телефона</th>
                <th>Доп. номер</th>
                <th>Почта</th>
                <th>Кабинет</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->company }}</td>
                    <td><a href="{{ route('addressbook.management.edit', $item->id) }}">{{ $item->full_name }}</a></td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->add_number }}</td>
                    <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                    <td>{{ $item->cabinet }}</td>
                    <td>@include('addressbook.management.includes.delete_form')</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @if($data->all() > $data->count())
            {{ $data->links() }}
        @endif
    </section>
@endsection
