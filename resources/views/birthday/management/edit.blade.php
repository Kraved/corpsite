@extends('layouts.management')

@section('content')
    <section class="management">
        <h1 class="management-title">Редактировать запись</h1>
        <form action="{{ route('birthday.management.update', $data->id) }}" method="POST">
            @csrf
            @method('PATCH')
        	<div class="birthday form-group">
        		<label for="birthday-text"></label>
        		<textarea class="birthday__text" name="text" id="birthday-text">
                    {{ $data->text }}
                </textarea>
        	</div>

        	<button type="submit" class="btn btn-success">Редактировать</button>
        </form>
    </section>

@endsection
