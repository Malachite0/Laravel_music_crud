<nav class="mb-6">
    <ul class="flex space-x-4">
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'font-bold' : '' }}">Home</a></li>
        <li><a href="{{ route('albums.list') }}" class="{{ request()->is('albums*') ? 'font-bold' : '' }}">Albums</a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'font-bold' : '' }}">Over ons</a></li>
        <li><a href="{{ route('music.create') }}" class="{{ request()->is('music/create') ? 'font-bold' : '' }}">Toevoegen</a></li>
    </ul>
</nav>
