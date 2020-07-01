@extends('layouts.main')
@section('content')
    <section class="content">
        <table class="table table-bordered table-hover addressbook">
            <h1 class="addressbook-title  text-center  mb-5">Адресная книга</h1>
            <thead>
            <tr>
                <th>Компания</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Доб.</th>
                <th>Почта</th>
                <th>Кабинет</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $data as $item)
                <tr>
                    <td>{{ $item->company }}</td>
                    <td>{{ $item->full_name }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->add_number }}</td>
                    <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                    <td>{{ $item->cabinet }}</td>
                </tr>
            @endforeach()
            </tbody>
        </table>
    </section>
@if($data->all() > $data->count())
    {{ $data->links() }}
@endif
@endsection
