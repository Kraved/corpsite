@extends('layouts.management')
@section('content')
    <section class="management">
        <h1 class="management-title">Добавить документ</h1>
        <form action="{{ route('documents.management.store') }}" method="POST" enctype=multipart/form-data>
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="document-name">Введите отображаемое имя документа: </label>
                <input type="text" class="form-control" name="name" id="document-name" >
            </div>

            <div class="form-group">
                <label for="document-type">Введите тип документа: </label>
                <select name="type" id="document-type" class="form-control">
                    <option value="regulations">Положения</option>
                    <option value="templates" selected>Шаблоны</option>
                </select>
            </div>

            <div class="form-group" >
                <input type="file" class="form-control-file" name="file">
            </div>

            <button type="submit" class="btn btn-primary">Добавить документ</button>
        </form>
    </section>
@endsection
