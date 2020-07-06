<nav class="container-fluid">
    <div class="nav  row justify-content-between">
        <div class="nav-logo  col-2">
            <a href="{{ route('news.index') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>

        <div class="col-7 navbar">
            <div class="nav-item"><a href="{{ route('news.index') }}">Новости</a></div>
            <div class="nav-item"><a href="{{ route('documents.index') }}">Шаблоны документов</a></div>
            <div class="nav-item"><a href="{{ route('addressbook.index') }}">Адресная книга</a></div>
            <div class="nav-item"><a href="{{ route('birthdays.index') }}">Дни Рождения</a></div>
            <div class="nav-item"><a href="{{ route('links.index') }}">Полезные ссылки</a></div>
            <div class="nav-item"><a href="https://help2.admin24.ru/f4ae33f3cd0f0d3b49509396972f7eb9">Заявки в IT</a></div>
            <div class="nav-item">
                <a class="nav-item-menu" href=""><img class="ellipsis-icon" src="{{ asset('images/ellipsis.svg') }}"
                                                      alt="ellipsis">
                </a>
            </div>
        </div>

    </div>
</nav>

