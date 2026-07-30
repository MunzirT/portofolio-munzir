<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munzir Tamam - Professional System Engineer</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    <header id="main-header" class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-2xs">
        
        <nav class="max-w-7xl mx-auto px-4 sm:px-8 flex items-center justify-between h-20 transition-all duration-300" id="main-nav" aria-label="Main Navigation">
            
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight text-slate-900">
                Munzir<span class="text-blue-600">.</span>
            </a>
            
            <ul class="hidden md:flex items-center space-x-10 text-base font-bold text-slate-600">
                <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-blue-600' : 'hover:text-slate-900 transition-colors' }}">Home</a></li>
                <li><a href="{{ route('experience') }}" class="{{ Route::is('experience') ? 'text-blue-600' : 'hover:text-slate-900 transition-colors' }}">Experience</a></li>
                <li><a href="{{ route('skills') }}" class="{{ Route::is('skills') ? 'text-blue-600' : 'hover:text-slate-900 transition-colors' }}">Skills</a></li>
                <li><a href="{{ route('projects') }}" class="{{ Route::is('projects') ? 'text-blue-600' : 'hover:text-slate-900 transition-colors' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'text-blue-600' : 'hover:text-slate-900 transition-colors' }}">Contact</a></li>
            </ul>
            
            <div class="hidden md:block">
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl text-sm font-bold bg-blue-600 hover:bg-blue-500 text-white shadow-lg shadow-blue-600/20 transition-all">
                    Hire Me
                </a>
            </div>

            <button id="menu-toggle" class="md:hidden p-2 rounded-xl border border-slate-200 bg-slate-50 text-slate-700 font-bold cursor-pointer">
                ☰
            </button>
            
        </nav>

        <menu id="mobile-menu" class="hidden max-w-7xl mx-auto px-4 sm:px-8 pb-6 flex flex-col space-y-4 text-base font-bold text-slate-700 border-t border-slate-100 pt-4 md:hidden">
            <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-blue-600' : '' }}">Home</a></li>
            <li><a href="{{ route('experience') }}" class="{{ Route::is('experience') ? 'text-blue-600' : '' }}">Experience</a></li>
            <li><a href="{{ route('skills') }}" class="{{ Route::is('skills') ? 'text-blue-600' : '' }}">Skills</a></li>
            <li><a href="{{ route('projects') }}" class="{{ Route::is('projects') ? 'text-blue-600' : '' }}">Projects</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'text-blue-600' : '' }}">Contact</a></li>
            <li class="pt-2">
                <a href="{{ route('contact') }}" class="block text-center w-full py-3 rounded-xl bg-blue-600 text-white">Hire Me</a>
            </li>
        </menu>

    </header>

    <main class="pt-24 min-h-[calc(100vh-10rem)]">
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 bg-slate-50 py-10 text-sm text-slate-500 font-semibold">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <span class="text-base font-bold text-slate-900">Munzir.</span>
            <p>© 2026 Munzir Tamam. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="{{ env('LINKEDIN_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">LinkedIn</a>
                <a href="{{ env('GITHUB_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">GitHub</a>
                <a href="{{ env('INSTAGRAM_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">Instagram</a>
                <a href="mailto:{{ env('PORTFOLIO_EMAIL') }}" class="hover:text-slate-900 transition-colors">Email</a>
            </div>
        </div>
    </footer>

    <script>
        let lastScrollTop = 0;
        const header = document.getElementById('main-header');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuToggle = document.getElementById('menu-toggle');
        const nav = document.getElementById('main-nav');

        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;
            if (!mobileMenu.classList.contains('hidden')) return;

            // Efek Sembunyi / Muncul saat Scroll
            if (scrollTop > lastScrollTop && scrollTop > 80) {
                header.classList.remove('top-0');
                header.classList.add('-top-24');
            } else {
                header.classList.remove('-top-24');
                header.classList.add('top-0');
            }

            // Efek Ramping (Shrink) saat di-scroll ke bawah
            if (scrollTop > 20) {
                nav.classList.remove('h-20');
                nav.classList.add('h-16');
            } else {
                nav.classList.remove('h-16');
                nav.classList.add('h-20');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
        });

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>