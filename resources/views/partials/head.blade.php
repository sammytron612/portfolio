
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>{{ $title ?? config('app.name') }} | Kevin Wilson Portfolio</title>
<meta name="description" content="Portfolio of Kevin Wilson, a multi-disciplined IT professional specializing in IT support, systems administration, networking, and web development.">
<meta name="keywords" content="Kevin Wilson, IT Professional, Portfolio, Web Development, Systems Administration, Networking, Laravel, Livewire, PHP, Python, AWS, Cloud, Support, Projects">
<meta name="author" content="Kevin Wilson">
<meta property="og:title" content="{{ $title ?? config('app.name') }} | Kevin Wilson Portfolio">
<meta property="og:description" content="Portfolio of Kevin Wilson, a multi-disciplined IT professional specializing in IT support, systems administration, networking, and web development.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('storage/og-image.png') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title ?? config('app.name') }} | Kevin Wilson Portfolio">
<meta name="twitter:description" content="Portfolio of Kevin Wilson, a multi-disciplined IT professional specializing in IT support, systems administration, networking, and web development.">
<meta name="twitter:image" content="{{ asset('storage/og-image.png') }}">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link href="https:///prismjs@v1.x/themes/prism.css" rel="stylesheet" />

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
