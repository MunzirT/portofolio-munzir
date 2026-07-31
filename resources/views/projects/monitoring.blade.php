@extends('layouts.app')

@section('content')
<main class="bg-slate-50/50 min-h-screen pt-28 pb-20 px-4 sm:px-8">
    <article class="max-w-6xl mx-auto">
        
        <!-- Breadcrumb Navigation -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-6 uppercase tracking-wider">
            <a href="{{ route('projects') }}" class="hover:text-blue-600 transition-colors">Projects</a>
            <span aria-hidden="true">&gt;</span>
            <span class="text-slate-700">Integrated Monitoring Systems</span>
        </nav>

        <!-- Main Header -->
        <header class="mb-10">
            <p class="flex items-center gap-3 mb-3">
                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 font-bold text-xs rounded-full uppercase tracking-wider">ACTIVE PRODUCTION</span>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Enterprise Network & Telemetry</span>
            </p>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                Integrated Monitoring Systems
            </h1>
            <p class="mt-4 text-slate-600 text-lg leading-relaxed max-w-3xl">
                Arsitektur pemantauan telemetri terpadu skala besar untuk mengawal ketersediaan infrastruktur nasional, mencakup ERI Korlantas, analitik EAVIS, site ETLE terdistribusi, serta kesehatan cluster server secara real-time.
            </p>
        </header>

        <!-- Interactive Image Gallery Slider (Full-Width / Single Slide View) -->
        <section x-data="{ 
            active: 0, 
            slides: [
                { 
                    img: '{{ asset("images/prtg-1.png") }}', 
                    title: 'Main Dashboard KORLANTAS - ERI Korlantas Overview', 
                    desc: 'Monitoring visual tersentralisasi untuk traffic dan ketersediaan node ERI Korlantas.' 
                },
                { 
                    img: '{{ asset("images/prtg-2.png") }}', 
                    title: 'PRTG Device Dashboard - ERI Korlantas Overview', 
                    desc: 'Status riil kesehatan server, interface jaringan, dan latensi antar site.' 
                },
                { 
                    img: '{{ asset("images/prtg-3.png") }}', 
                    title: 'Core and Remote Probe Overview - Paessler PRTG Network Monitor', 
                    desc: 'Topologi infrastruktur Core & Remote Probe untuk menangani ribuan sensor.' 
                },
                { 
                    img: '{{ asset("images/grafana-1.png") }}', 
                    title: 'ETLE Site & Network Grafana Monitoring', 
                    desc: 'Visualisasi metrik jaringan dan ketersediaan site ETLE terdistribusi.' 
                },
                { 
                    img: '{{ asset("images/grafana-2.png") }}', 
                    title: 'ETLE Site & Network Grafana Monitoring (System Health)', 
                    desc: 'Telemetri resource fisik server, CPU, RAM, dan status SSD DWPD.' 
                }
            ],
            next() { this.active = (this.active + 1) % this.slides.length },
            prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length }
        }" class="relative mb-16 select-none">
            
            <!-- Main Full-Width Image Container -->
            <figure class="relative w-full h-[400px] sm:h-[550px] bg-slate-900 rounded-3xl overflow-hidden shadow-md border border-slate-200/80 m-0">
                <template x-for="(slide, index) in slides" :key="index">
                    <section x-show="active === index" 
                             x-transition:enter="transition ease-out duration-300 transform"
                             x-transition:enter-start="opacity-0 scale-98"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-200 transform"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-98"
                             class="absolute inset-0 w-full h-full">
                        <!-- Menggunakan object-contain agar seluruh gambar terlihat jelas tanpa terpotong -->
                        <img :src="slide.img" :alt="slide.title" class="w-full h-full object-contain bg-slate-950/80">
                        
                        <!-- Caption Overlay -->
                        <figcaption class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-slate-950/95 via-slate-950/70 to-transparent p-6 sm:p-8 text-white z-10">
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-400" x-text="`0${index + 1} / 0${slides.length}`"></span>
                            <h3 class="text-lg sm:text-2xl font-bold mt-1" x-text="slide.title"></h3>
                            <p class="text-xs sm:text-sm text-slate-300 mt-1 leading-relaxed max-w-3xl" x-text="slide.desc"></p>
                        </figcaption>
                    </section>
                </template>

                <!-- Tombol Navigasi Kiri (Prev) -->
                <button @click="prev()" aria-label="Previous Slide" class="absolute left-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-slate-900/60 hover:bg-slate-900/90 text-white border border-white/20 shadow-lg flex items-center justify-center font-bold text-xl transition-all hover:scale-110 cursor-pointer z-20 backdrop-blur-xs">
                    &#8249;
                </button>

                <!-- Tombol Navigasi Kanan (Next) -->
                <button @click="next()" aria-label="Next Slide" class="absolute right-4 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-slate-900/60 hover:bg-slate-900/90 text-white border border-white/20 shadow-lg flex items-center justify-center font-bold text-xl transition-all hover:scale-110 cursor-pointer z-20 backdrop-blur-xs">
                    &#8250;
                </button>

                <!-- Dots Pagination Indicator -->
                <nav aria-label="Slide dots" class="absolute top-4 right-6 z-20 flex gap-2 bg-slate-900/50 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/10">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="active = index" 
                                class="w-2.5 h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                                :class="active === index ? 'bg-blue-500 w-6' : 'bg-white/40 hover:bg-white/70'">
                        </button>
                    </template>
                </nav>
            </figure>

        </section>
        

        <!-- Content Details Grid -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
            
            <!-- Main Details Area (Span 2) -->
            <section class="lg:col-span-2 space-y-10">
                
                <!-- Project Overview & System Scope -->
                <article class="space-y-4">
                    <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                        <span class="w-8 h-1 bg-blue-600 rounded-full inline-block" aria-hidden="true"></span>
                        Project Overview
                    </h2>
                    <section class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-base space-y-4">
                        <p>
                            Inisiatif ini berfokus pada perancangan dan penyebaran sistem pemantauan telemetri tingkat lanjut untuk menangani infrastruktur jaringan dan server berskala besar. Sistem dirancang untuk mengantisipasi potensi <em>downtime</em> melalui deteksi dini anomalies pada traffic jaringan, kapasitas penyimpanan LVM, hingga kesehatan fisik server.
                        </p>
                        <p>
                            Integrasi utama bertumpu pada gabungan <strong>Paessler PRTG Network Monitor (Core & Remote Probe)</strong> untuk pemantauan ribuan sensor terdistribusi, serta <strong>Grafana</strong> untuk visualisasi metrik eksekutif. Sistem ini melingkupi pemantauan operasional pada beberapa sistem utama:
                        </p>
                        <ul class="list-disc pl-5 space-y-2 font-medium text-slate-700">
                            <li><strong>ERI (Electronic Registration and Identification) Korlantas:</strong> Pemantauan ketersediaan node, latency, dan throughput interface jaringan pusat & daerah.</li>
                            <li><strong>EAVIS & ETLE Infrastructure:</strong> Monitoring real-time untuk status konektivitas perangkat flashlamp, kontroler site, dan verifikasi alur data secara terdistribusi.</li>
                            <li><strong>Cluster & Baremetal Server Health:</strong> Telemetri resource fisik (CPU, RAM, RAID / SSD DWPD endurance status, thermal sensor) berbasis SNMP v3 & Node Exporter.</li>
                        </ul>
                    </section>
                </article>

                <!-- Key Implementation Highlights -->
                <article class="space-y-4 pt-4">
                    <h3 class="text-xl font-bold text-slate-900">Key Implementation Highlights</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 list-none p-0">
                        <li class="p-5 bg-white rounded-2xl border border-slate-200/80 shadow-2xs">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">📡 Multi-Probe PRTG Deployment</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Konfigurasi PRTG Core dan Remote Probe tersentralisasi untuk mengakomodasi pemantauan 5,000+ hingga 10,000+ sensor aktif secara efisien tanpa membebani core engine.</p>
                        </li>
                        <li class="p-5 bg-white rounded-2xl border border-slate-200/80 shadow-2xs">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">📊 Grafana Executive Dashboard</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Transformasi log dan metrik mentah menjadi visualisasi tingkat tinggi yang mudah dibaca oleh tim teknis maupun manajemen puncak.</p>
                        </li>
                        <li class="p-5 bg-white rounded-2xl border border-slate-200/80 shadow-2xs">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">⚙️ Custom Telemetry & Alerts</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Sistem peringatan otomatis melalui pemicu ambang batas (*threshold*) untuk mencegah kegagalan node sebelum berdampak pada layanan publik.</p>
                        </li>
                        <li class="p-5 bg-white rounded-2xl border border-slate-200/80 shadow-2xs">
                            <h4 class="font-bold text-slate-900 text-sm mb-1">🔐 Air-Gapped & Secure Setup</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">Prosedur instalasi dan pengiriman paket terisolasi (via Secure Copy/SCP) pada lingkungan jaringan dengan tingkat keandalan dan keamanan tinggi.</p>
                        </li>
                    </ul>
                </article>

                <!-- Bottom Metrics & Environment Cards -->
                <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                    <!-- Metrics Card -->
                    <article class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider flex items-center gap-2 mb-4">
                            <span aria-hidden="true">📊</span> Scale & Metrics
                        </h3>
                        <dl class="space-y-3 text-xs font-bold">
                            <div class="flex justify-between border-b border-slate-100 pb-2">
                                <dt class="text-slate-500">ACTIVE PRTG SENSORS</dt>
                                <dd class="text-slate-900 font-extrabold">5,000+ Sensors</dd>
                            </div>
                            <div class="flex justify-between border-b border-slate-100 pb-2">
                                <dt class="text-slate-500">POLLING INTERVAL</dt>
                                <dd class="text-slate-900 font-extrabold">&lt; 60 Seconds</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-slate-500">SYSTEM AVAILABILITY</dt>
                                <dd class="text-emerald-600 font-extrabold">99.9% High Reliability</dd>
                            </div>
                        </dl>
                    </article>

                    <!-- Environment Card -->
                    <article class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider flex items-center gap-2 mb-4">
                            <span aria-hidden="true">&lt;&gt;</span> Core Environment
                        </h3>
                        <ul class="flex flex-wrap gap-2 list-none p-0">
                            <li class="px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-700 rounded-md text-xs font-bold">Linux Debian / Ubuntu</li>
                            <li class="px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-700 rounded-md text-xs font-bold">Paessler PRTG Core</li>
                            <li class="px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-700 rounded-md text-xs font-bold">Grafana Dashboard</li>
                            <li class="px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-700 rounded-md text-xs font-bold">SNMP v2c / v3</li>
                            <li class="px-2.5 py-1 bg-slate-100 border border-slate-200 text-slate-700 rounded-md text-xs font-bold">Prometheus / Exporters</li>
                        </ul>
                    </article>
                </section>

            </section>

            <!-- Right Sidebar: Technical Specifications -->
            <aside class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-2xs space-y-6 lg:sticky lg:top-28">
                <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                    Technical Specifications
                </h3>

                <section class="space-y-2">
                    <h4 class="text-xs font-bold text-slate-900">Monitoring Engine</h4>
                    <ul class="flex flex-wrap gap-1.5 list-none p-0">
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">Paessler PRTG Core</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">PRTG Remote Probe</li>
                    </ul>
                </section>

                <section class="space-y-2">
                    <h4 class="text-xs font-bold text-slate-900">Data Visualization</h4>
                    <ul class="flex flex-wrap gap-1.5 list-none p-0">
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">Grafana</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">Custom PRTG Maps</li>
                    </ul>
                </section>

                <section class="space-y-2">
                    <h4 class="text-xs font-bold text-slate-900">Target Ecosystems</h4>
                    <ul class="flex flex-wrap gap-1.5 list-none p-0">
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">ERI Korlantas</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">EAVIS Analytics</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">ETLE Distributed Sites</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">Telkom Trunks</li>
                    </ul>
                </section>

                <section class="space-y-2">
                    <h4 class="text-xs font-bold text-slate-900">Protocols & Standards</h4>
                    <ul class="flex flex-wrap gap-1.5 list-none p-0">
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">SNMP v2c/v3</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">ICMP Ping</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">REST API</li>
                        <li class="px-2.5 py-1 bg-slate-50 border border-slate-200 text-slate-600 text-xs font-semibold rounded">Syslog</li>
                    </ul>
                </section>

                <hr class="border-slate-100">

                <a href="mailto:munzirt07@gmail.com" class="w-full py-3.5 px-4 rounded-xl border border-blue-200 bg-blue-50 hover:bg-blue-100 text-blue-700 font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition-colors">
                    <span aria-hidden="true">✉️</span> Inquire Technical Architecture
                </a>
            </aside>

        </section>

    </article>
</main>
@endsection