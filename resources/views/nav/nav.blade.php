<nav class="container-fluid">
    <div class="row justify-content-between nav">
        <div class="col-2 nav-logo">
            <a href="{{ route('news.index') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>

        <div class="col-7 navbar">
            <div class="nav-item"><a href="{{ route('news.index') }}">Новости</a></div>
            <div class="nav-item"><a href="">Шаблоны документов</a></div>
            <div class="nav-item"><a href="{{ route('addressbook.index') }}">Адресная книга</a></div>
            <div class="nav-item"><a href="">Дни Рождения</a></div>
            <div class="nav-item"><a href="">Полезные ссылки</a></div>
            <div class="nav-item"><a href="">Заявки в IT</a></div>
            <div class="nav-item">
                <a class="nav-item-menu" href=""><img class="ellipsis-icon" src="{{ asset('images/ellipsis.svg') }}"
                                                      alt="ellipsis"></a>
            </div>
        </div>

    </div>
</nav>
