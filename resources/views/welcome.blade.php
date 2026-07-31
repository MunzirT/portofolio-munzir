@extends('layouts.app')

@section('content')

    <!-- 1. HERO PROFILE SECTION -->
    <section class="bg-white pt-24 pb-16 px-4 sm:px-8 relative z-10">
        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-5 items-center">
            
            <!-- Left Info Headline -->
            <article class="md:col-span-3 text-left">
                <span class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full text-base font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider mb-6">
                    <span class="w-3 h-3 rounded-full bg-blue-500 animate-pulse"></span>
                    Available for New Projects
                </span>
                <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Munzir — Professional <br> System Engineer
                </h1>
                <p class="mt-6 text-xl sm:text-2xl text-slate-500 leading-relaxed max-w-2xl">
                    A combination of hands-on infrastructure operations, with knowledge in cloud solutions and deep configurations management delivering massive end-to-end optimizations architectures.
                </p>
                <footer class="mt-10 flex flex-wrap gap-4">
                    <a href="https://drive.google.com/file/d/1jeKsAguTe3LM6D43tcFqkn_yVcC1DUEv/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-xl bg-blue-900 hover:bg-blue-800 text-white font-bold text-base shadow-lg transition-all transform hover:-translate-y-0.5"> CV Saya </a>
                    <!-- Tombol View Portfolio -->
                    <a href="{{ route('projects') }}" class="px-8 py-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-base border border-slate-200 transition-all transform hover:-translate-y-0.5"> View Portfolio</a>
                </footer>
            </article>

            <!-- Right Visual Component (Foto Profil & Bio Singkat) -->
            <article class="md:col-span-2 bg-slate-50/50 rounded-3xl border border-slate-200/80 shadow-2xs overflow-hidden flex flex-col justify-between min-h-[340px] group hover:shadow-md transition-all duration-300">
    
                <!-- Bagian Foto Profil Placeholder -->
                <figure class="h-72 bg-slate-100 relative overflow-hidden m-0 flex items-center justify-center border-b border-slate-100">
                    <img src="{{ asset('images/munzir-photo.jpeg') }}" 
                         alt="Foto Munzir Tamam" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur-xs border border-slate-200 text-[10px] font-bold text-slate-700 rounded-md uppercase tracking-wider">
                        Profile Overview
                    </span>
                </figure>

                <!-- Bagian Penjelasan Singkat (Bio & Peran) -->
                <div class="p-6 pb-4 bg-white">
                    <h3 class="text-xl font-bold text-slate-900">Munzir Tamam</h3>
                    <p class="mt-2 text-sm text-slate-500 leading-relaxed"> Professional System Engineer and IT Graduate from Brawijaya University, focused on infrastructure reliability and system efficiency. </p>
                </div>

                <!-- Footer Status -->
                <footer class="px-6 pb-6 pt-2 flex justify-between items-center text-sm font-bold bg-white">
                    <span class="text-slate-400 uppercase tracking-wider text-xs">Professional & Educator</span>
                    <span class="text-emerald-600 flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        ACTIVE
                    </span>
                </footer>

            </article>

        </div>
    </section>

    <!-- 2. CORE EXPERIENCE SECTION -->
    <section class="py-20 bg-slate-50 border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <header class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Core Experience</h2>
                <p class="text-base text-slate-500 mt-1">Focusing on critical systems operations and infrastructure efficiency.</p>
            </header>

            <ul class="grid gap-8 md:grid-cols-2 list-none">
                <!-- Card 1 -->
                <li class="bg-white p-8 rounded-2xl border border-slate-200 shadow-2xs flex flex-col justify-between hover:shadow-md transition-shadow">
                    <article>
                        <header class="flex justify-between items-center mb-6">
                            <span class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl font-bold border border-blue-100">📋</span>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">DEEP-TECH</span>
                        </header>
                        <h3 class="text-2xl font-bold text-slate-900">Baremetal Server Operations</h3>
                        <p class="mt-3 text-base text-slate-500 leading-relaxed">Full physical server lifecycle management. From assembly and OS installation to performance optimization.</p>
                        <ul class="mt-6 space-y-3 text-sm font-semibold text-slate-700">
                            <li>🔹 RAID Configuration & Enterprise SSD Setup</li>
                            <li>🔹 Hardware Health Checks & Thermal Monitoring</li>
                            <li>🔹 Linux Kernel Optimization for Network Throughput</li>
                        </ul>
                    </article>
                </li>
                <!-- Card 2 -->
                <li class="bg-white p-8 rounded-2xl border border-slate-200 shadow-2xs flex flex-col justify-between hover:shadow-md transition-shadow">
                    <article>
                        <header class="flex justify-between items-center mb-6">
                            <span class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl font-bold border border-blue-100">☁️</span>
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">VIRTUALIZATION</span>
                        </header>
                        <h3 class="text-2xl font-bold text-slate-900">Virtualization & Cloud VM</h3>
                        <p class="mt-3 text-base text-slate-500 leading-relaxed">Implementing and maintaining virtual environments using Proxmox, VMware, and KVM to maximize resource utility.</p>
                        <ul class="mt-6 space-y-3 text-sm font-semibold text-slate-700">
                            <li>🔹 Cluster Management & Live Migration</li>
                            <li>🔹 SDN (Software-Defined Networking) Setup</li>
                            <li>🔹 Backup Strategies & Disaster Recovery</li>
                        </ul>
                    </article>
                </li>
            </ul>
        </div>
    </section>

    <!-- 3. ADDITIONAL SKILLS SECTION -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <header class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Additional Skills</h2>
                <p class="text-base text-slate-500 mt-2">Complementing operational capabilities with modern data analysis and web development.</p>
            </header>

            <div class="grid gap-8 md:grid-cols-3">
                <!-- Left Card: Data Analysis (Col Span 2) -->
                <section class="bg-slate-50/60 p-8 rounded-2xl border border-slate-200/80 md:col-span-2 flex flex-col justify-between">
                    <header>
                        <h3 class="text-2xl font-bold text-slate-900 flex items-center gap-3"><span class="text-blue-600">📊</span> Data Analysis</h3>
                        <p class="text-base text-slate-500 mt-3 leading-relaxed">Extracting valuable insights from complex network logs, server performance metrics, and creating operational dashboards for high-executive reporting matrix structures.</p>
                    </header>
                    <footer class="flex flex-wrap gap-2.5 text-xs font-bold text-slate-600 mt-8">
                        <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Python (Pandas/NumPy) • Intermediate</span>
                        <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">PostgreSQL • Intermediate</span>
                        <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Grafana Dashboards • Intermediate</span>
                        <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">PRTG Metrics • Selected Tech</span>
                    </footer>
                </section>

                <!-- Right Card: Web Development (Col Span 1) -->
                <section class="bg-blue-900 text-white p-8 rounded-2xl flex flex-col justify-between shadow-xs">
                    <header>
                        <h3 class="text-2xl font-bold">Web Development</h3>
                        <p class="text-base text-blue-100/90 mt-3 leading-relaxed">Developing responsive backends and monitoring web interfaces integrated with platform service APIs.</p>
                    </header>
                    <dl class="space-y-2 text-sm font-bold text-blue-200 mt-6 border-t border-blue-800 pt-4">
                        <div class="flex justify-between"><dt>PHP / Laravel 12</dt><dd class="text-white">Intermediate</dd></div>
                        <div class="flex justify-between"><dt>Tailwind CSS</dt><dd class="text-white">Intermediate</dd></div>
                        <div class="flex justify-between"><dt>Node.js / Vite</dt><dd class="text-white">Intermediate</dd></div>
                    </dl>
                </section>
            </div>
        </div>
    </section>

    <!-- 4. PROJECTS & PORTFOLIO SECTION -->
    <section class="py-20 bg-slate-50 border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <header class="flex flex-wrap justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Projects & Portfolio</h2>
                    <p class="text-base text-slate-500 mt-1">Real-world examples of system infrastructure implementation.</p>
                </div>
                <div class="flex gap-2 text-base font-bold text-slate-400" aria-label="Pagination Control">
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center hover:bg-slate-100 cursor-pointer">⟨</button>
                    <button class="w-10 h-10 rounded-lg bg-white border border-slate-200 flex items-center justify-center hover:bg-slate-100 cursor-pointer">⟩</button>
                </div>
            </header>

            <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 list-none">

                <!-- Project 1: Automated Baremetal Clusters (KSEMA) -->
                <li class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-2xs group hover:shadow-md transition-shadow">
                    <a href="{{ route('projects.ksema') }}" class="flex flex-col justify-between h-full">
                        <article>
                            <figure class="h-48 bg-slate-900 m-0 relative overflow-hidden">
                                <img src="{{ asset('images/KSEMA-2.jpg') }}" alt="KSEMA System Architecture" class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-4 left-4 px-2.5 py-1 bg-white/90 border border-slate-200 text-[10px] font-bold text-slate-700 rounded uppercase tracking-wider">DEPLOYED</span>
                            </figure>
                            <section class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">KSEMA by PT Equnix</h3>
                                <p class="mt-2 text-sm text-slate-500 leading-relaxed">Responsible for baremetal hardware setup and Thales HSM appliance installation, ensuring full readiness for Post-Quantum cryptographic encryption and KMS services.</p>
                            </section>
                        </article>
                        <footer class="p-6 pt-0 border-t border-slate-50 mt-4 flex justify-between items-center text-xs font-bold text-slate-400">
                            <span>Systems Tech</span> 
                            <span class="text-blue-600 font-bold group-hover:translate-x-1 transition-transform flex items-center gap-1">View Case Study &rarr;</span>
                        </footer>
                    </a>
                </li>

                <!-- Project 2: Integrated Monitoring Systems (Dapat diklik menuju route detail) -->
                <li class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-2xs group hover:shadow-md transition-shadow">
                    <a href="{{ route('projects.monitoring') }}" class="flex flex-col justify-between h-full">
                        <article>
                            <figure class="h-48 bg-slate-900 m-0 relative overflow-hidden">
                                <img src="{{ asset('images/prtg-1.png') }}" alt="Integrated Monitoring Systems" class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                                <span class="absolute top-4 left-4 px-2.5 py-1 bg-white/90 border border-slate-200 text-[10px] font-bold text-slate-700 rounded uppercase tracking-wider shadow-xs">ACTIVE PRODUCTION</span>
                            </figure>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors flex items-center justify-between">
                                    <span>Integrated Monitoring Systems</span>
                                </h3>
                                <p class="mt-2 text-sm text-slate-500 leading-relaxed">Real-time networking validation and cluster hardware health telemetry monitoring core matrix implementations (PRTG & Grafana).</p>
                            </div>
                        </article>
                        <footer class="p-6 pt-0 border-t border-slate-50 mt-4 flex justify-between items-center text-xs font-bold text-slate-400">
                            <span>Enterprise Telemetry</span> 
                            <span class="text-blue-600 font-bold group-hover:translate-x-1 transition-transform flex items-center gap-1">View Case Study &rarr;</span>
                        </footer>
                    </a>
                </li>

                <!-- Project 3 -->
                <li class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-2xs flex flex-col justify-between group hover:shadow-md transition-shadow">
                    <article>
                        <figure class="h-48 bg-slate-900 m-0 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=600" alt="Inventory Portal" class="w-full h-full object-cover opacity-70">
                            <span class="absolute top-4 left-4 px-2.5 py-1 bg-white/90 border border-slate-200 text-[10px] font-bold text-slate-700 rounded uppercase tracking-wider">TEMPLATE</span>
                        </figure>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">IT Asset Inventory Portal</h3>
                            <p class="mt-2 text-sm text-slate-500 leading-relaxed">Internal web application hosting managing datacenter asset counts and core operational authorization logs.</p>
                        </div>
                    </article>
                    <footer class="p-6 pt-0 border-t border-slate-50 mt-4 flex justify-between items-center text-xs font-bold text-slate-400">
                        <span>Web Tech</span> <span class="text-blue-600 text-sm">→</span>
                    </footer>
                </li>
            </ul>
        </div>
    </section>

    <!-- 5. LET'S COLLABORATE SECTION (CONTACT MINI) -->
    <section class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 grid gap-16 md:grid-cols-2 items-start">
            
            <article>
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight sm:text-4xl">Let's Collaborate</h2>
                <p class="mt-4 text-lg text-slate-500 leading-relaxed max-w-xl">Reach out with system project analysis demands or infrastructure operations consulting queries. I will react to configuration requests immediately.</p>
                <address class="mt-10 not-italic space-y-4 text-base font-bold text-slate-700">
                    <p class="flex items-center gap-3"><span>✉️</span> <a href="mailto:munzirt07@gmail.com" class="hover:text-blue-600">munzirt07@gmail.com</a></p>
                    <p class="flex items-center gap-3"><span>📍</span> <span>Jakarta, Indonesia</span></p>
                </address>
            </article>

            <!-- Form Kontak Terhubung dengan Route POST /contact -->
            <form action="{{ route('contact') }}" method="POST" class="bg-slate-50/70 p-8 rounded-2xl border border-slate-200/80 shadow-2xs space-y-5">
                @csrf
                <p class="flex flex-col space-y-1.5">
                    <label for="name" class="text-xs font-bold text-slate-400 uppercase tracking-wide">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name" class="w-full text-base px-4 py-3 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-blue-600 transition-all">
                </p>
                <p class="flex flex-col space-y-1.5">
                    <label for="email" class="text-xs font-bold text-slate-400 uppercase tracking-wide">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="munzirt07@gmail.com" class="w-full text-base px-4 py-3 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-blue-600 transition-all">
                </p>
                <p class="flex flex-col space-y-1.5">
                    <label for="message" class="text-xs font-bold text-slate-400 uppercase tracking-wide">Message</label>
                    <textarea id="message" name="message" rows="4" required placeholder="How can I help you?" class="w-full text-base px-4 py-3 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-blue-600 transition-all resize-none"></textarea>
                </p>
                <button type="submit" class="w-full py-4 bg-blue-900 hover:bg-blue-800 text-white font-bold text-sm rounded-xl uppercase tracking-wider cursor-pointer transition-colors">Send Message</button>
            </form>

        </div>
    </section>

@endsection