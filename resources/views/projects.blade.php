@extends('layouts.app')

@section('content')

    <!-- 1. HERO HEADER SECTION (Wide & Beautiful) -->
    <section class="bg-white pt-24 pb-12 px-4 sm:px-8 relative z-10">
        <article class="max-w-7xl mx-auto text-left">
            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Selected Projects
            </h1>
            <p class="mt-6 text-xl sm:text-2xl text-slate-500 max-w-4xl leading-relaxed">
                A collection of technical solutions focusing on systems engineering, automated infrastructure, and performance-driven web development. Each project represents a commitment to reliability and clean architecture.
            </p>
        </article>
    </section>

    <!-- 2. PORTFOLIO CARDS ASYMMETRIC GRID (ZERO-DIV STRUCTURE) -->
    <section class="py-16 bg-white border-t border-slate-100">
        <ul class="max-w-7xl mx-auto px-4 sm:px-8 grid gap-8 md:grid-cols-3 list-none">
            
            <!-- PROJECT CARD 1: VM Infrastructure (Col Span 2) -->
            <li class="bg-slate-50/60 p-8 rounded-2xl border border-slate-200/80 shadow-xs md:col-span-2 flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <article class="flex flex-col justify-between h-full">
                    <header>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 flex items-center gap-2">📂 Systems Engineering</span>
                            <span class="px-3 py-1 bg-cyan-100 text-cyan-700 text-xs font-bold rounded-md">Deployed</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">VM Infrastructure</h3>
                        <p class="mt-4 text-lg leading-relaxed text-slate-500">Specialized in deploying robust infrastructure on VMware ESXi and Proxmox VE. Experienced in setting up diverse OS environments including Debian, Ubuntu, CentOS, and Windows Server with high-availability clustering.</p>
                    </header>
                    
                    <footer class="mt-8">
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-slate-500 mb-6">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">VMware ESXi</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Proxmox VE</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Linux/Windows</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Clustering</span>
                        </div>
                        <a href="#" class="text-base font-bold text-blue-600 hover:text-blue-500 flex items-center gap-1">View Case Study <span aria-hidden="true">→</span></a>
                    </footer>
                </article>
            </li>

            <!-- PROJECT CARD 2: PRTG Dashboard (Col Span 1) -->
            <li class="bg-slate-50/60 p-8 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <article class="flex flex-col justify-between h-full">
                    <header>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">📊 Monitoring</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-md">Active</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">PRTG Dashboard</h3>
                        <p class="mt-4 text-base leading-relaxed text-slate-500">Comprehensive network monitoring and real-time alerts for critical infrastructure using PRTG.</p>
                    </header>
                    
                    <footer class="mt-8">
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-slate-500 mb-6">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">PRTG</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Networking</span>
                        </div>
                        <a href="#" class="text-base font-bold text-blue-600 hover:text-blue-500">Explore Code</a>
                    </footer>
                </article>
            </li>

            <!-- PROJECT CARD 3: DevOps CLI Tool (Col Span 1) -->
            <li class="bg-slate-50/60 p-8 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <article class="flex flex-col justify-between h-full">
                    <header>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">🛠️ Scripting</span>
                            <span class="px-3 py-1 bg-slate-200 text-slate-700 text-xs font-bold rounded-md">Archived</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">DevOps CLI Tool</h3>
                        <p class="mt-4 text-base leading-relaxed text-slate-500">A proprietary internal tool for automated secrets rotation and vault management.</p>
                    </header>
                    
                    <footer class="mt-8">
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-slate-500 mb-6">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Python</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Vault</span>
                        </div>
                        <a href="#" class="text-base font-bold text-blue-600 hover:text-blue-500">Documentation</a>
                    </footer>
                </article>
            </li>

            <!-- PROJECT CARD 4: Baremetal Server Infrastructure (Col Span 2 Terbagi Teks & Foto) -->
            <li class="bg-slate-50/60 rounded-2xl border border-slate-200/80 shadow-xs md:col-span-2 overflow-hidden flex flex-col md:flex-row hover:shadow-md transition-shadow duration-300">
                <article class="p-8 flex flex-col justify-between md:w-1/2">
                    <header>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">🏗️ Server Deployment</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Baremetal Server Infrastructure</h3>
                        <p class="mt-4 text-sm leading-relaxed text-slate-500">Provisioned and hardened 50+ baremetal servers. Responsibilities included hardware utility research, hardware compatibility analysis, physical building, and end-to-end monitoring implementation.</p>
                    </header>
                    <footer class="mt-6 flex gap-4 text-sm font-bold">
                        <span class="text-blue-600 uppercase tracking-wider">Deployed</span>
                        <a href="#" class="text-slate-500 hover:text-slate-900 flex items-center gap-1">Live Preview <span aria-hidden="true">↗</span></a>
                    </footer>
                </article>
                <figure class="md:w-1/2 h-64 md:h-auto bg-slate-900 m-0 relative">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80" alt="Datacenter Server Infrastructure" class="w-full h-full object-cover opacity-80">
                </figure>
            </li>

        </ul>
    </section>

   <!-- 3. WORK PRINCIPLES STANDARDS (GENERALIZED FROM image_aefae0.png) -->
    <section class="py-24 bg-slate-50 border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 grid gap-12 md:grid-cols-2 items-center">
            
            <article>
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight mb-8">Engineering Principles</h2>
                <dl class="space-y-4 text-lg font-semibold border-t border-slate-200 pt-6">
                    <div class="flex justify-between py-3 border-b border-slate-200/60">
                        <dt class="text-slate-500">Development Approach</dt>
                        <dd class="text-blue-600 font-bold">Clean &amp; Documented</dd>
                    </div>
                    <div class="flex justify-between py-3 border-b border-slate-200/60">
                        <dt class="text-slate-500">System Security</dt>
                        <dd class="text-slate-800">Hardened by Default</dd>
                    </div>
                    <div class="flex justify-between py-3 border-b border-slate-200/60">
                        <dt class="text-slate-500">Infrastructure Style</dt>
                        <dd class="text-slate-800">Scalable &amp; Modular</dd>
                    </div>
                    <div class="flex justify-between py-3">
                        <dt class="text-slate-500">Deployment Method</dt>
                        <dd class="text-slate-800">Automated Workflows</dd>
                    </div>
                </dl>
            </article>

            <!-- Right Badge Box -->
            <article class="bg-white border border-slate-200/80 rounded-3xl p-12 text-center shadow-2xs flex flex-col items-center justify-center min-h-[300px]">
                <span class="w-16 h-16 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-3xl shadow-xs mb-4" aria-hidden="true">🛡️</span>
                <h3 class="text-xl font-bold text-slate-900">Quality First</h3>
                <p class="text-base text-slate-400 mt-2 max-w-xs">Adhering to industry best practices to deliver reliable, secure, and maintainable architectural systems.</p>
            </article>

        </div>
    </section>


@endsection