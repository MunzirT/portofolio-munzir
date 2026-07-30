@extends('layouts.app')

@section('content')

    <section class="max-w-7xl mx-auto px-4 sm:px-8 pt-24 pb-20 grid gap-16 md:grid-cols-2 items-start">
        
        <aside class="flex flex-col justify-between h-full">
            <header>
                <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full text-sm font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider mb-6">
                    Get In Touch
                </span>
                <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Let's connect.
                </h1>
                <p class="mt-6 text-xl text-slate-500 leading-relaxed max-w-xl">
                    Whether you have a question about a system configuration, want to discuss an infrastructure deployment, or just want to say hello, I'd love to hear from you.
                </p>
            </header>

            <address class="mt-12 not-italic border-t border-slate-200 pt-8 space-y-6 text-lg font-medium text-slate-600">
                <p class="flex items-center gap-3">
                    <span class="text-blue-600 font-bold" aria-hidden="true">✉️</span>
                    <a href="mailto:{{ env('PORTFOLIO_EMAIL') }}" class="text-slate-900 font-bold hover:text-blue-600 transition-colors">{{ env('PORTFOLIO_EMAIL') }}</a>
                </p>
                <p class="flex items-center gap-3">
                    <span class="text-blue-600 font-bold" aria-hidden="true">🌐</span>
                    <span>Jakarta, Indonesia</span>
                </p>
            </address>

            <!-- Link Sosial Media Halaman Kontak -->
            <footer class="mt-12 flex gap-6 text-base font-bold text-slate-400">
                <a href="{{ env('LINKEDIN_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">LinkedIn</a>
                <a href="{{ env('GITHUB_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">GitHub</a>
                <a href="{{ env('INSTAGRAM_URL') }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">Instagram</a>
            </footer>
        </aside>

<!-- SISI KANAN: FORMULIR INTERAKTIF -->
        <form action="{{ route('contact') }}" method="POST" class="bg-slate-50/60 p-8 sm:p-10 rounded-3xl border border-slate-200/80 shadow-2xs space-y-8">
            @csrf
            
            <!-- Alert Notifikasi Sukses Otomatis -->
            @if(session('success'))
                <p class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 font-bold text-base rounded-xl">
                    ✅ {{ session('success') }}
                </p>
            @endif
            
            <!-- Input Row 1: Name -->
            <p class="flex flex-col space-y-2.5">
                <label for="name" class="text-base font-bold text-slate-800">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doc" 
                    class="w-full px-5 py-4 bg-white border border-slate-200 rounded-xl text-base font-medium placeholder-slate-400 focus:outline-hidden focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition-all">
            </p>

            <!-- Input Row 2: Email -->
            <p class="flex flex-col space-y-2.5">
                <label for="email" class="text-base font-bold text-slate-800">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com" 
                    class="w-full px-5 py-4 bg-white border border-slate-200 rounded-xl text-base font-medium placeholder-slate-400 focus:outline-hidden focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition-all">
            </p>

            <!-- Input Row 3: Message -->
            <p class="flex flex-col space-y-2.5">
                <label for="message" class="text-base font-bold text-slate-800">Message</label>
                <textarea id="message" name="message" rows="5" required placeholder="Describe your project or inquiry in detail..." 
                    class="w-full px-5 py-4 bg-white border border-slate-200 rounded-xl text-base font-medium placeholder-slate-400 focus:outline-hidden focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition-all resize-none"></textarea>
            </p>

            <!-- Action Button Submit -->
            <footer class="pt-2">
                <button type="submit" 
                    class="w-full py-4 px-6 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-base shadow-lg shadow-blue-600/10 transition-all transform hover:-translate-y-0.5 cursor-pointer">
                    Send Message
                </button>
            </footer>
        </form>

    </section>

@endsection