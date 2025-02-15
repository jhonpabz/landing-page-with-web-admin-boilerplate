<?php
use App\Models\Link;

$navLinks = Link::where('kind', 'like', 'nav-link-%')->get();
?>

<header class="w-full bg-red-700 p-4 flex justify-center">
    <nav class="flex space-x-4">
        @foreach ($navLinks as $link)
            <a href="{{ $link->website }}" target="_blank"
                class="{{ $link->kind }} flex items-center space-x-2 bg-red-500 px-4 py-2 text-white rounded-full hover:bg-red-600">
                <span>{{ ucfirst($link->description) }}</span>
            </a>
        @endforeach
    </nav>
</header>
