<nav class="container-fluid">
    <div class="nav  row justify-content-between">
        <div class="nav-logo  col-2">
            <a href="{{ route('news.index') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="logo"></a>
        </div>

        <div class="col-7 navbar">
            <div class="nav-item"><a href="{{ route('news.index') }}">Новости</a></div>
            <div class="nav-item"><a href="{{ route('documents.index') }}">Шаблоны документов</a></div>
            <div class="nav-item"><a href="{{ route('addressbook.index') }}">Адресная книга</a></div>
            <div class="nav-item"><a href="{{ route('birthday.index') }}">Дни Рождения</a></div>
            <div class="nav-item"><a href="{{ route('links.index') }}">Полезные ссылки</a></div>

            @guest
                <div class="nav-item"><a href="{{ route('login') }}">Войти</a></div>
                <div class="nav-item"><a href="{{ route('register') }}">Регистрация</a></div>
            @endguest

            @auth
                <div class="nav-item"><a href="https://help2.admin24.ru/f4ae33f3cd0f0d3b49509396972f7eb9">Заявки в IT</a></div>

                <div class="nav-item dropdown">
                    <a class="nav-item-menu" data-toggle="dropdown" href="">
                        <img class="ellipsis-icon" src="{{ asset('images/ellipsis.svg') }}" alt="ellipsis">
                    </a>
                    <div class="dropdown-menu management-dropdown-menu">
                        <a class="dropdown-item" href="{{ route('news.management.index') }}">Новости</a>
                        <a class="dropdown-item" href="{{ route('documents.management.index') }}">Документы</a>
                        <a class="dropdown-item" href="{{ route('addressbook.management.index') }}">Адресная книга</a>
                        <a class="dropdown-item" href="{{ route('birthday.management.index') }}">Дни Рождения</a>
                        <a class="dropdown-item" href="{{ route('links.management.index') }}">Ссылки</a>
                    </div>
                </div>
                <div class="nav-item"><a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}</a></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>

    </div>
</nav>
{{--<div class="dropdown">--}}
{{--    <button class="btn btn-primary " type="button"  >--}}
{{--        Кнопка выпадающего списка--}}
{{--    </button>--}}

{{--</div>--}}
