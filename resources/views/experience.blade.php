@extends('layouts.app')

@section('content')

    <!-- 1. HERO TITLE SECTION (Wide Layout Mepet) -->
    <section class="bg-white pt-24 pb-14 px-4 sm:px-8 relative z-10">
        <article class="max-w-7xl mx-auto text-left">
            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full text-sm font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider mb-6">
                Professional Overview
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Engineering Robust Systems &<br> Infrastructure.
            </h1>
            <p class="mt-6 text-xl sm:text-2xl text-slate-500 max-w-5xl leading-relaxed">
                Dedicated System Engineer with extensive expertise in baremetal orchestration, virtualization technologies, and large-scale infrastructure optimization for mission-critical environments.
            </p>
        </article>
    </section>

    <!-- 2. WIDE ZIGZAG TIMELINE (ZERO-DIV STRUCTURE) -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 relative">
            
            <!-- Central Track Line (Desktop Only) -->
            <div class="absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-0.5 bg-slate-200 hidden md:block" aria-hidden="true"></div>

            <ol class="space-y-20 relative list-none">
                
                <!-- ROW 1: ITEM RIGHT (System Engineer) -->
                <li class="flex flex-col md:flex-row items-center justify-between w-full relative">
                    <header class="w-full md:w-[45%] hidden md:block text-right pr-12">
                        <time class="text-lg font-bold text-slate-400 block">Mar 2026 — PRESENT</time>
                        <span class="text-sm font-bold uppercase tracking-wider text-blue-600 mt-1 block">PT Tristan Utama Solutech</span>
                    </header>
                    
                    <span class="absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-xl bg-blue-900 text-white font-bold text-lg shadow-md flex items-center justify-center z-20 hidden md:flex" aria-hidden="true">+</span>
                    
                    <article class="w-full md:w-[46%] bg-slate-50/80 p-8 rounded-2xl border border-slate-200/80 shadow-2xs hover:shadow-md transition-shadow duration-300">
                        <time class="text-sm font-bold text-blue-600 uppercase md:hidden block mb-3">Mar 2026 — PRESENT</time>
                        <h3 class="text-2xl font-bold text-slate-900">System Engineer</h3>
                        <p class="text-lg font-bold text-blue-600 mt-0.5">PT Tristan Utama Solutech</p>
                        
                        <ul class="mt-6 space-y-4 text-lg text-slate-600 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Orchestrated over 50+ baremetal nodes using automated pre-provisioning tools, reducing deployment times by 70%.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Maintained high-availability Proxmox VE clusters managing 200+ virtualized production instances.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Optimized storage throughput by 45% through custom NVMe-over-Fabrics implementation.</span>
                            </li>
                        </ul>
                        
                        <footer class="flex flex-wrap gap-2.5 mt-6 pt-4 border-t border-slate-200/60 text-xs font-bold text-slate-500">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Proxmox</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Baremetal</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Linux Kernel</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">NVMe</span>
                        </footer>
                    </article>
                </li>

                <!-- ROW 2: ITEM LEFT (IT Infrastructure) -->
                <li class="flex flex-col md:flex-row-reverse items-center justify-between w-full relative">
                    <header class="w-full md:w-[45%] hidden md:block text-left pl-12">
                        <time class="text-lg font-bold text-slate-400 block">May 2025 — March 2026</time>
                        <span class="text-sm font-bold uppercase tracking-wider text-slate-500 mt-1 block">PT Equnix Business Solutions</span>
                    </header>
                    
                    <span class="absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-xl bg-blue-600 text-white font-bold text-lg shadow-md flex items-center justify-center z-20 hidden md:flex" aria-hidden="true">o</span>
                    
                    <article class="w-full md:w-[46%] bg-slate-50/80 p-8 rounded-2xl border border-slate-200/80 shadow-2xs hover:shadow-md transition-shadow duration-300">
                        <time class="text-sm font-bold text-blue-600 uppercase md:hidden block mb-3">May 2025 — March 2026</time>
                        <h3 class="text-2xl font-bold text-slate-900">IT Infrastructure</h3>
                        <p class="text-lg font-bold text-blue-600 mt-0.5">PT Equnix Business Solutions</p>
                        
                        <ul class="mt-6 space-y-4 text-lg text-slate-600 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Designed and migrated legacy workloads to VMware vSphere 7 environments with zero downtime.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Implemented comprehensive monitoring using Prometheus/Grafana for real-time hardware health telemetry.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Standardized server security hardening protocols across the entire data center footprints.</span>
                            </li>
                        </ul>
                        
                        <footer class="flex flex-wrap gap-2.5 mt-6 pt-4 border-t border-slate-200/60 text-xs font-bold text-slate-500">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">VMware</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">vSphere</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Grafana</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">SAN/NAS</span>
                        </footer>
                    </article>
                </li>

                <!-- ROW 3: ITEM RIGHT (Support Engineer) -->
                <li class="flex flex-col md:flex-row items-center justify-between w-full relative">
                    <header class="w-full md:w-[45%] hidden md:block text-right pr-12">
                        <time class="text-lg font-bold text-slate-400 block">February 2025 — May 2026</time>
                        <span class="text-sm font-bold uppercase tracking-wider text-slate-500 mt-1 block">PT Equnix Business Solutions</span>
                    </header>
                    
                    <span class="absolute left-1/2 transform -translate-x-1/2 w-10 h-10 rounded-xl bg-slate-400 text-white font-bold text-lg shadow-md flex items-center justify-center z-20 hidden md:flex" aria-hidden="true">✓</span>
                    
                    <article class="w-full md:w-[46%] bg-slate-50/80 p-8 rounded-2xl border border-slate-200/80 shadow-2xs hover:shadow-md transition-shadow duration-300">
                        <time class="text-sm font-bold text-blue-600 uppercase md:hidden block mb-3">February 2025 — May 2026</time>
                        <h3 class="text-2xl font-bold text-slate-900">Support Engineer</h3>
                        <p class="text-lg font-bold text-blue-600 mt-0.5">PT Equnix Business Solutions</p>
                        
                        <ul class="mt-6 space-y-4 text-lg text-slate-600 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Managed Linux-based server fleets (CentOS/Ubuntu), ensuring 99.9% uptime for client services.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 mt-0.5" aria-hidden="true">🔹</span>
                                <span>Automated routine backup and recovery operations using Bash and Python scripts.</span>
                            </li>
                        </ul>
                        
                        <footer class="flex flex-wrap gap-2.5 mt-6 pt-4 border-t border-slate-200/60 text-xs font-bold text-slate-500">
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Linux Admin</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Bash Scripting</span>
                            <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg shadow-2xs">Networking</span>
                        </footer>
                    </article>
                </li>

            </ol>
        </div>
    </section>

    <!-- 3. TECHNICAL CORE SECTION (Wide Grid Layout) -->
    <section class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            
            <header class="mb-16">
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight sm:text-4xl">Technical Core</h2>
                <p class="text-lg text-slate-500 mt-2">Advanced competencies in infrastructure engineering.</p>
            </header>

            <div class="grid gap-8 md:grid-cols-3">
                
                <!-- Card 1: Server Configuration Fundamentals (Col Span 2) -->
                <article class="bg-white p-8 rounded-2xl border border-slate-200 shadow-2xs flex flex-col justify-between md:col-span-2">
                    <header>
                        <div class="flex items-center gap-4 mb-6">
                            <span class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold text-lg shadow-sm">01</span>
                            <h3 class="text-xl font-bold text-slate-900">Server Configuration Fundamentals</h3>
                        </div>
                        <p class="text-lg text-slate-500 leading-relaxed">Experienced in hardware assembly, Linux OS installation, and basic Automated configuration, components PXE boot processes and basic RAID setup for single servers.</p>
                    </header>
                    
                    <footer class="grid grid-cols-2 gap-6 mt-8 pt-6 border-t border-slate-100">
                        <div>
                            <span class="text-sm font-bold text-slate-400 uppercase tracking-wider block">Installation Time</span>
                            <span class="text-3xl font-black text-slate-900 block mt-1.5">30 min</span>
                        </div>
                        <div>
                            <span class="text-sm font-bold text-slate-400 uppercase tracking-wider block">Proficiency Level</span>
                            <span class="text-3xl font-black text-blue-600 block mt-1.5">Advanced</span>
                        </div>
                    </footer>
                </article>

                <!-- Card 2: Core Virtualization -->
                <article class="bg-white p-8 rounded-2xl border border-slate-200 shadow-2xs flex flex-col justify-between">
                    <header>
                        <span class="w-12 h-12 rounded-xl bg-cyan-500 text-white flex items-center justify-center font-bold text-lg shadow-sm mb-6">02</span>
                        <h3 class="text-xl font-bold text-slate-900">Core Virtualization</h3>
                        <p class="text-lg text-slate-500 leading-relaxed mt-3">Adequately creating and managing Virtual Machines (VMs), configuring basic virtual networking, and handling virtual environment management on Proxmox platforms.</p>
                    </header>
                    <footer class="mt-8 pt-4 border-t border-slate-100 flex justify-between items-center text-sm font-bold text-blue-600">
                        <span>Proxmox Masters</span>
                        <span>Intermediate</span>
                    </footer>
                </article>

                <!-- Card 3: Security Essentials -->
                <article class="bg-white p-8 rounded-2xl border border-slate-200 shadow-2xs flex flex-col justify-between">
                    <header>
                        <span class="w-12 h-12 rounded-xl bg-orange-600 text-white flex items-center justify-center font-bold text-lg shadow-sm mb-6">03</span>
                        <h3 class="text-xl font-bold text-slate-900">Security Essentials</h3>
                        <p class="text-lg text-slate-500 leading-relaxed mt-3">Implementing basic firewall configurations, user management, and routine system updates to secure servers against common threats.</p>
                    </header>
                    <footer class="mt-8 pt-4 border-t border-slate-100">
                        <span class="text-sm font-bold text-slate-400 uppercase tracking-wider block">Hardening Standard</span>
                        <span class="text-base font-bold text-blue-600 block mt-1.5 hover:underline">protocols.cfg</span>
                    </footer>
                </article>

                <!-- Card 4: Automation & Scripting (Col Span 2) -->
                <article class="bg-blue-900 text-white p-8 rounded-2xl shadow-md md:col-span-2 flex items-center justify-between relative overflow-hidden group">
                    <span class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(255,255,255,0.08),transparent_40%)]" aria-hidden="true"></span>
                    <header class="max-w-xl relative z-10">
                        <h3 class="text-2xl font-bold">Automation & Scripting</h3>
                        <p class="text-lg text-blue-100 mt-3 leading-relaxed">Deepening knowledge in Infrastructure as Code concepts, utilizing Bash scripts and learning Ansible fundamentals to automate repetitive system administration tasks.</p>
                    </header>
                    <span class="w-16 h-16 rounded-2xl bg-white/10 border border-white/20 flex items-center justify-center text-3xl relative z-10 hidden sm:flex group-hover:rotate-12 transition-transform duration-300" aria-hidden="true">⚙</span>
                </article>

            </div>
        </div>
    </section>

@endsection