<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('main')) active @endif" aria-current="page" href="{{ route('main') }}">
                    <span data-feather="home"></span>
                    Главная
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('user.index.*')) active @endif" href="{{ route('user.index') }}">
                    <span data-feather="file"></span>
                    Личный кабинет
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('user.download.*')) active @endif" href="{{ route('user.download') }}">
                    <span data-feather="layers"></span>
                    Выгрузка данных
                </a>
            </li>
        </ul>
    </div>
</nav>