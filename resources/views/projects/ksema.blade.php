@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-8 py-10">

    <!-- Tombol Kembali -->
    <nav aria-label="Breadcrumb" class="mb-8">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">
            &larr; Back to Overview
        </a>
    </nav>

    <!-- Header Proyek KSEMA -->
    <header class="mb-10 pb-8 border-b border-slate-200">
        <p class="flex items-center gap-3 mb-3">
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700 uppercase tracking-wider">DEPLOYED</span>
            <span class="text-sm font-semibold text-slate-500">Systems Tech</span>
        </p>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            PIC off KSEMA Security System Architecture
        </h1>
        <p class="mt-2 text-lg text-slate-600 max-w-3xl">
            Infrastructure provisioning and server designed for high-availability enterprise environments.
        </p>
    </header>

    <!-- Layout Grid Utama -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

        <!-- Kolom Kiri: Image Slider Alpine.js & Overview (Span 2) -->
        <article class="lg:col-span-2 space-y-8">
            
            <!-- Slider Alpine.js -->
            <figure x-data="{ 
                activeSlide: 0,
                slides: [
                    { 
                        image: '{{ asset('images/KSEMA-1.jpg') }}', 
                        title: 'KSEMA Infrastructure Overview', 
                        desc: 'System architecture and core deployment configuration.' 
                    },
                    { 
                        image: '{{ asset('images/KSEMA-2.jpg') }}', 
                        title: 'Network & Cluster Topology', 
                        desc: 'High-availability nodes and automated resource management.' 
                    }
                ],
                next() { this.activeSlide = (this.activeSlide === this.slides.length - 1) ? 0 : this.activeSlide + 1; },
                prev() { this.activeSlide = (this.activeSlide === 0) ? this.slides.length - 1 : this.activeSlide - 1; }
            }" class="bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/80 overflow-hidden m-0">
                
                <section class="relative aspect-video bg-slate-900 overflow-hidden">
                    <template x-for="(slide, index) in slides" :key="index">
                        <article x-show="activeSlide === index" 
                                 x-transition:enter="transition opacity duration-300 ease-out"
                                 class="absolute inset-0">
                            <img :src="slide.image" :alt="slide.title" class="w-full h-full object-cover">
                            <figcaption class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-slate-950/80 to-transparent text-white">
                                <h3 class="text-xl font-bold" x-text="slide.title"></h3>
                                <p class="text-sm text-slate-300 mt-1" x-text="slide.desc"></p>
                            </figcaption>
                        </article>
                    </template>

                    <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-slate-900/60 hover:bg-slate-900 text-white transition-all">❮</button>
                    <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 p-3 rounded-full bg-slate-900/60 hover:bg-slate-900 text-white transition-all">❯</button>
                </section>

                <footer class="p-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-slate-500">
                    <span x-text="`Image ${activeSlide + 1} of ${slides.length}`"></span>
                </footer>
            </figure>

            <!-- Deskripsi Detail Proyek -->
            <section class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-xs space-y-6">
                <h2 class="text-2xl font-bold text-slate-900">Project Overview</h2>
                <p class="text-slate-600 leading-relaxed">
                    Perancangan dan pengelolaan infrastruktur KSEMA difokuskan pada keandalan sistem, optimasi alokasi resource server, serta kemudahan manajemen operasi harian.
                </p>
                <section class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                    <article class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <h4 class="font-bold text-slate-900 text-sm">System Operations</h4>
                        <p class="text-xs text-slate-500 mt-1">Infrastructure Provisioning, Network Routing, & Monitoring</p>
                    </article>
                    <article class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <h4 class="font-bold text-slate-900 text-sm">Target Infrastructure</h4>
                        <p class="text-xs text-slate-500 mt-1">Enterprise Servers, Linux Operating Systems, Network Trunks</p>
                    </article>
                </section>
            </section>
        </article>

        <!-- Kolom Kanan: Technologies & Capabilities (Span 1) -->
        <aside class="space-y-8 lg:sticky lg:top-28">
            <section class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-4">Technologies Used</h3>
                <ul class="flex flex-wrap gap-2 list-none p-0">
                    <li class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700">Linux Debian/Ubuntu</li>
                    <li class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700">Networking & Routing</li>
                    <li class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700">Security Device by Thales</li>
                </ul>
            </section>

            <section class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-4">Key Capabilities</h3>
                <ul class="space-y-3 text-sm text-slate-600 list-none p-0">
                    <li class="flex items-start gap-2"><span class="text-blue-600 font-bold">•</span> High availability network and system configuration.</li>
                    <li class="flex items-start gap-2"><span class="text-blue-600 font-bold">•</span> Resource optimization and hardware health checking.</li>
                    <li class="flex items-start gap-2"><span class="text-blue-600 font-bold">•</span> Secure and isolated environment setup.</li>
                </ul>
            </section>
        </aside>

    </section>
</main>
@endsection