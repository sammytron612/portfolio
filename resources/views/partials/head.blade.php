<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

<script>
// Comprehensive dark mode solution
(function() {
    // Function to apply dark mode
    function applyDarkMode() {
        const isDark = localStorage.getItem('darkMode') !== 'false';
        if (isDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        return isDark;
    }

    // Apply dark mode immediately
    applyDarkMode();

    // Global toggle function
    window.toggleDarkMode = function() {
        const currentMode = localStorage.getItem('darkMode') !== 'false';
        const newMode = !currentMode;
        localStorage.setItem('darkMode', newMode);
        applyDarkMode();
    };

    // Listen for Livewire navigation events
    document.addEventListener('livewire:navigated', function() {
        setTimeout(applyDarkMode, 10);
    });

    // Listen for regular page navigation
    document.addEventListener('DOMContentLoaded', function() {
        applyDarkMode();
    });
})();
</script>


