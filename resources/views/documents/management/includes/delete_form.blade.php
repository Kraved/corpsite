<form action="{{ route('documents.management.destroy', $item->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Удалить</button>
</form>
