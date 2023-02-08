<header>
    <div class="container">
        <a href="{{ route ("home") }}">
        <img src="{{ Vite::asset("resources/assets/img/dc-logo.png") }}" alt="img">
        </a>
        <nav>
            <ul>
                @foreach ($menu_db as $item)
                <li>{{ $item['text'] }}</li>
                @endforeach
            </li>
            </ul>
        </nav>
    </div>
</header>

