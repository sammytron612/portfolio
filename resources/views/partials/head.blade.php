<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<!-- SEO Meta Tags -->
<meta name="description" content="{{ $description ?? 'Kevin Wilson - Multi disciplined IT Professional with a passion for technology, AWS, web development, and IT solutions.' }}">
<meta name="keywords" content="{{ $keywords ?? 'Kevin Wilson, IT Professional, Web Developer, AWS, Laravel, PHP, JavaScript, Portfolio, Technology, Cloud Computing' }}">
<meta name="author" content="Kevin Wilson">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title ?? config('app.name') }}">
<meta property="og:description" content="{{ $description ?? 'Kevin Wilson - Multi disciplined IT Professional with a passion for technology, AWS, web development, and IT solutions.' }}">
<meta property="og:image" content="{{ asset('favicon.svg') }}">
<meta property="og:site_name" content="Kevin Wilson Portfolio">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $title ?? config('app.name') }}">
<meta property="twitter:description" content="{{ $description ?? 'Kevin Wilson - Multi disciplined IT Professional with a passion for technology, AWS, web development, and IT solutions.' }}">
<meta property="twitter:image" content="{{ asset('favicon.svg') }}">

<!-- Additional SEO -->
<meta name="theme-color" content="#27272a">
<meta name="msapplication-TileColor" content="#27272a">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Sitemap -->
<link rel="sitemap" type="application/xml" title="Sitemap" href="{{ route('sitemap') }}">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

<style>
/* Force dark mode styles */
html, html.dark {
    background-color: #27272a !important;
    color-scheme: dark !important;
}
body {
    background-color: #27272a !important;
    color: #e4e4e7 !important;
}
</style>

<script>
// Force dark mode as default - enhanced version
(function() {
    // Immediately set dark mode
    document.documentElement.classList.add('dark');
    document.documentElement.style.setProperty('background-color', '#27272a', 'important');
    document.body?.style.setProperty('background-color', '#27272a', 'important');

    // Set on document ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            document.documentElement.classList.add('dark');
            document.documentElement.style.setProperty('background-color', '#27272a', 'important');
            document.body.style.setProperty('background-color', '#27272a', 'important');
        });
    }

    // Set on Livewire navigation
    document.addEventListener('livewire:navigated', function() {
        setTimeout(function() {
            document.documentElement.classList.add('dark');
            document.documentElement.style.setProperty('background-color', '#27272a', 'important');
            document.body.style.setProperty('background-color', '#27272a', 'important');
        }, 0);
    });

    // Observer to maintain dark mode
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                if (!document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.add('dark');
                }
            }
        });
    });

    observer.observe(document.documentElement, { attributes: true });
})();
</script>


