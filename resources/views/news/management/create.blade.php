@extends('layouts.main')

@section('content')
<form action="{{ route('news.store') }}" method="POST" role="form">
    @method("POST")
    @csrf
	<div class="form-group">
		<label for=""></label>
		<input type="text" class="form-control" name="title" id="" placeholder="Input title">
	</div>
	<div class="form-group">
		<label for=""></label>
		<input type="text" class="form-control" name="text" id="" placeholder="Input text">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
