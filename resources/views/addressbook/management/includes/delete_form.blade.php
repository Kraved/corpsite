<form action="{{ route('addressbook.management.destroy', $item->id) }}" method="POST" role="form">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Удалить</button>
</form>
