@extends('layouts.main')
@section('content')
<form action="{{ route('news.update', $data->id) }}" method="POST" role="form">
    @method('PATCH')
    @csrf
	<div class="form-group">
		<label for=""></label>
		<input type="text" class="form-control" name="title" id="" value="{{ $data->title }}" >
	</div>
	<div class="form-group">
		<label for=""></label>
		<input type="text" class="form-control" name="text" id="" value="{{ $data->text }}" >
	</div>
	<div class="form-group">
		<label for=""></label>
		<input type="text" class="form-control" name="published" id="" value="{{ $data->published }}" >
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
