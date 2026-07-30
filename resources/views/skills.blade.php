@extends('layouts.app')

@section('content')

    <section class="bg-white pt-24 pb-12 px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <article class="max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full text-sm font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider mb-6">
                Technical Expertise
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Technical Stack & Proficiency
            </h1>
            <p class="mt-6 text-xl text-slate-500 max-w-3xl mx-auto leading-relaxed">
                A comprehensive overview of my engineering capabilities, spanning from low-level hardware management to modern web infrastructures.
            </p>
        </article>
    </section>

    <section class="py-16 bg-white border-t border-slate-100">
        <ul class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid gap-8 md:grid-cols-3 list-none">
            
            <li class="bg-slate-50/70 p-8 rounded-2xl border border-slate-200/80 shadow-xs md:col-span-2 flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <header>
                    <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                        <span aria-hidden="true">💾</span> System Engineering
                    </h2>
                    <p class="text-base text-slate-500 leading-relaxed mt-2 mb-6">Advanced management of bare-metal servers, Linux distributions, and complex storage arrays for mission-critical reliability.</p>
                </header>

                <dl class="space-y-4 border-t border-b border-slate-200/60 py-5 my-5">
                    <div class="flex justify-between items-center text-base">
                        <dt class="font-medium text-slate-700">Baremetal Lifecycle Management</dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Expert</dd>
                    </div>
                    <div class="flex justify-between items-center text-base">
                        <dt class="font-medium text-slate-700">Linux Kernel & Performance Tuning</dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Expert</dd>
                    </div>
                    <div class="flex justify-between items-center text-base">
                        <dt class="font-medium text-slate-700">RAID Configurations & Storage Optimization</dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Advanced</dd>
                    </div>
                </dl>

                <footer class="flex flex-wrap gap-2.5 text-xs font-bold text-slate-500">
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Ubuntu/Debian</span>
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">CentOS/RHEL</span>
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">ZFS</span>
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">Bash</span>
                </footer>
            </li>

            <li class="bg-slate-50/70 p-8 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <header>
                    <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                        <span aria-hidden="true">🌐</span> Virtualization
                    </h2>
                    <p class="text-base text-slate-500 leading-relaxed mt-2 mb-6">Implementing high-availability hypervisor structures.</p>
                </header>

                <dl class="space-y-4 border-t border-slate-200/60 pt-5 text-base font-bold text-slate-700">
                    <div class="flex items-center justify-between border-b border-slate-200/40 pb-2">
                        <dt>VMware ESXi</dt> <dd class="text-emerald-600 text-lg">✔</dd>
                    </div>
                    <div class="flex items-center justify-between border-b border-slate-200/40 pb-2">
                        <dt>Proxmox VE</dt> <dd class="text-emerald-600 text-lg">✔</dd>
                    </div>
                    <div class="flex items-center justify-between pb-2">
                        <dt>Docker</dt> <dd class="text-emerald-600 text-lg">✔</dd>
                    </div>
                </dl>

                <footer class="text-sm leading-relaxed text-slate-500 italic pt-4 border-t border-slate-200/60 mt-4">
                    Orchestrating hardware clustering and failover protocols.
                </footer>
            </li>

            <li class="bg-slate-50/70 p-8 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <header>
                    <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                        <span aria-hidden="true">💻</span> Web Dev
                    </h2>
                    <p class="text-base text-slate-500 leading-relaxed mt-2 mb-6">Responsive database integration.</p>
                </header>

                <dl class="grid grid-cols-2 gap-4 my-4">
                    <div class="bg-white p-4 rounded-xl border border-slate-200">
                        <dt class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Backend</dt>
                        <dd class="text-lg font-bold text-slate-900 block mt-1">Laravel 12</dd>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200">
                        <dt class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Styling</dt>
                        <dd class="text-lg font-bold text-blue-600 block mt-1">Tailwind</dd>
                    </div>
                </dl>

                <footer class="flex flex-wrap gap-2 text-xs font-bold text-slate-500 pt-4 border-t border-slate-200/60">
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">TypeScript</span>
                    <span class="px-3 py-1.5 bg-white border border-slate-200 rounded-lg">PHP API</span>
                </footer>
            </li>

            <li class="bg-slate-50/70 p-8 rounded-2xl border border-slate-200/80 shadow-xs md:col-span-2 flex flex-col justify-between hover:shadow-md transition-shadow duration-300">
                <header>
                    <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-3">
                        <span aria-hidden="true">📊</span> Data Analysis
                    </h2>
                    <p class="text-base text-slate-500 leading-relaxed mt-2 mb-6">Extracting operational insights from network metrics and server logs telemetry.</p>
                </header>

                <dl class="space-y-4 text-base border-t border-b border-slate-200/60 py-5 my-4">
                    <div class="flex justify-between items-center">
                        <dt class="flex gap-3"><span class="font-mono text-xs px-2 py-0.5 bg-slate-200 rounded text-slate-600">Py</span> <span class="font-medium text-slate-700">Python (Pandas, NumPy)</span></dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Advanced</dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="flex gap-3"><span class="font-mono text-xs px-2 py-0.5 bg-slate-200 rounded text-slate-600">SQL</span> <span class="font-medium text-slate-700">SQL & PostgreSQL</span></dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Advanced</dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="flex gap-3"><span class="font-mono text-xs px-2 py-0.5 bg-slate-200 rounded text-slate-600">Gr</span> <span class="font-medium text-slate-700">Grafana & PRTG Telemetry</span></dt>
                        <dd class="text-sm font-bold text-blue-600 uppercase tracking-wider">Advanced</dd>
                    </div>
                </dl>
            </li>

        </ul>
    </section>

    <section class="py-20 bg-white border-t border-slate-100">
        <article class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="mb-12">
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Technical Specifications</h2>
            </header>

            <dl class="grid gap-x-16 gap-y-6 sm:grid-cols-2 text-base font-semibold border-t border-slate-200 pt-8">
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">OS Environment</dt>
                    <dd class="text-blue-600 font-bold">Debian/Ubuntu, CentOS, RHEL</dd>
                </div>
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">Cloud Providers</dt>
                    <dd class="text-blue-600 font-bold">AWS and GCP</dd>
                </div>
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">Networking</dt>
                    <dd class="text-blue-600 font-bold">VLAN, IP Addressing, VPN</dd>
                </div>
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">Databases</dt>
                    <dd class="text-blue-600 font-bold">PostgreSQL, MySQL, InfluxDB</dd>
                </div>
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">CI/CD Tools</dt>
                    <dd class="text-blue-600 font-bold">GitHub Actions, GitLab CI</dd>
                </div>
                <div class="flex justify-between py-3 border-b border-slate-100">
                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-wider">Version Control</dt>
                    <dd class="text-blue-600 font-bold">Git (Advanced CLI)</dd>
                </div>
            </dl>
        </article>
    </section>


@endsection