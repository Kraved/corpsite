@extends('layouts.management')
@section('content')
    <section class="management">
        <h1 class="management-title">Добавить запись</h1>
        <form action="{{ route('addressbook.management.store') }}" method="POST" role="form">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="full_name">Введите ФИО: </label>
                <input type="text" class="form-control" name="full_name" id="full_name">
            </div>
            <div class="form-group">
                <label for="company">Введите компанию: </label>
                <input type="text" class="form-control" name="company" id="company">
            </div>
            <div class="form-group">
                <label for="number">Введите номер телефона: </label>
                <input type="tel" class="form-control" name="number" id="number">
            </div>
            <div class="form-group">
                <label for="add_number">Введите дополнительный номер телефона: </label>
                <input type="text" class="form-control" name="add_number" id="add_number">
            </div>
            <div class="form-group">
                <label for="email">Введите почту: </label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="cabinet">Введите кабинет: </label>
                <input type="text" class="form-control" name="cabinet" id="cabinet">
            </div>

            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </section>
@endsection
