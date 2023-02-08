<header>
    <div class="container">
        <a href="{{ route ("home") }}">
        <img src="{{ Vite::asset("resources/assets/img/dc-logo.png") }}" alt="img">
        </a>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($menu_db as $item)
                <li>{{ $item['text'] }}</li>
                @endforeach
            </li>
            </ul>
        </nav>
    </div>
</header>

