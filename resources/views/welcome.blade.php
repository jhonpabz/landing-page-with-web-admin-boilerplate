<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JhonPabz Network</title>

    <!-- Add Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/script.js'])

    <!-- Add Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <x-navbar />
    <div class="text-center px-8 py-2">
        <x-banner-swipper />
        <x-h5-links-dynamic />
        <x-h5-links-hardcode />
        <x-h5-links />
        <h1 class="mb-8">JhonPabz Network</h1>
        <a href="/jhonpabz" class="btn">Lets Go!</a>
    </div>
</body>

</html>
