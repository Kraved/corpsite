@extends('layouts.management')

@section('content')
    <section class="management">
        <h1 class="management-title">Добавить ссылку</h1>
        <form action="{{ route('links.management.store') }}" method="POST">
            @method('POST')
            @csrf
        	<div class="form-group">
        		<label for="name">Введите название ссылки: </label>
        		<input type="text" class="form-control" name="name" id="name">
        	</div>

            <div class="form-group">
        		<label for="url">Введите ссылку: </label>
        		<input type="text" class="form-control" name="url" id="url">
        	</div>

        	<button type="submit" class="btn btn-success">Добавить</button>
        </form>

    </section>
@endsection
