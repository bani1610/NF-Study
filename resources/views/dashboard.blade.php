@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">
            Ringkasan Akademik
        </h2>
        <p class="text-slate-500 mt-1 font-medium italic">Dashboard monitoring kemajuan studimu.</p>
    </div>

    <!-- CTA Banner: Muted Teal (#4B9DA9) -->
    <div class="relative overflow-hidden bg-gradient-to-r from-[#4B9DA9] to-[#3d828c] p-10 rounded-[2.5rem] shadow-2xl shadow-[#4B9DA9]/30 mb-10 border border-white/10">
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-8">
            <div class="max-w-lg">
                <h3 class="text-3xl font-black text-white mb-3 tracking-tight">Semangat Kuliah, Ujang!</h3>
                <p class="text-teal-50 font-medium text-lg opacity-90">Hari ini ada 2 jadwal kuliah. Jangan lupa persiapkan materi dan tetap fokus!</p>
            </div>
            <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-slate-800 font-black rounded-2xl shadow-xl hover:bg-teal-50 hover:scale-105 transition-all text-sm uppercase tracking-widest">
                Cek Jadwal
            </a>
        </div>
        <!-- Decorative Shapes -->
        <div class="absolute top-0 right-0 w-80 h-80 bg-white/5 rounded-full -mr-32 -mt-32 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-teal-900/10 rounded-full -ml-20 -mb-20 blur-2xl"></div>
    </div>

    <!-- Stats Grid -->
    <div class="grid gap-8 mb-12 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card 1 -->
        <div class="p-6 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm transition-all duration-300 group hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/25 hover:border-blue-200">
            <div class="flex items-center gap-5">
                <div class="p-3 bg-orange-50 text-[#E37434] rounded-2xl group-hover:bg-blue-500 group-hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Total SKS</p>
                    <p class="text-2xl font-black text-slate-800">114</p>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="p-6 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm transition-all duration-300 group hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/25 hover:border-blue-200">
            <div class="flex items-center gap-5">
                <div class="p-3 bg-teal-50 text-slate-800 rounded-2xl group-hover:bg-blue-500 group-hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">IPK</p>
                    <p class="text-2xl font-black text-slate-800">3.85</p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="p-6 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm transition-all duration-300 group hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/25 hover:border-blue-200">
            <div class="flex items-center gap-5">
                <div class="p-3 bg-blue-50 text-blue-500 rounded-2xl group-hover:bg-blue-500 group-hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Semester</p>
                    <p class="text-2xl font-black text-slate-800">5</p>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="p-6 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm transition-all duration-300 group hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/25 hover:border-blue-200">
            <div class="flex items-center gap-5">
                <div class="p-3 bg-emerald-50 text-emerald-600 rounded-2xl group-hover:bg-blue-500 group-hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Status UKT</p>
                    <p class="text-xl font-black text-emerald-600 uppercase tracking-tight">Lunas</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid gap-10 lg:grid-cols-3">
        <!-- Table Column -->
        <div class="lg:col-span-2 bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <h4 class="font-black text-slate-800 uppercase tracking-tighter">Jadwal Kuliah Hari Ini</h4>
                <a href="#" class="text-slate-800 text-xs font-black hover:underline uppercase tracking-widest">Detail</a>
            </div>
            <div class="overflow-x-auto text-sm">
                <table class="w-full">
                    <thead>
                        <tr class="text-left bg-slate-50">
                            <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase">Mata Kuliah</th>
                            <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase">Waktu</th>
                            <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase text-center">Ruang</th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-600">
                        <tr class="hover:bg-slate-50 transition-all duration-200 group/row">
                            <td class="px-8 py-6 rounded-l-2xl group-hover/row:bg-slate-50">
                                <p class="font-bold text-slate-700">Pemrograman Web Lanjut</p>
                                <p class="text-xs text-slate-400">Dosen: Pak Ali, S.Kom</p>
                            </td>
                            <td class="px-8 py-6 font-bold text-slate-600 uppercase">08:00 - 10:30</td>
                            <td class="px-8 py-6 text-center rounded-r-2xl group-hover/row:bg-slate-50">
                                <span class="px-4 py-1.5 bg-orange-100 text-[#E37434] rounded-xl text-xs font-black shadow-sm">B.204</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-all duration-200 group/row">
                            <td class="px-8 py-6 rounded-l-2xl group-hover/row:bg-slate-50">
                                <p class="font-bold text-slate-700">Kecerdasan Buatan</p>
                                <p class="text-xs text-slate-400">Dosen: Bu Siti, M.T</p>
                            </td>
                            <td class="px-8 py-6 font-bold text-slate-600 uppercase">13:00 - 15:30</td>
                            <td class="px-8 py-6 text-center rounded-r-2xl group-hover/row:bg-slate-50">
                                <span class="px-4 py-1.5 bg-teal-100 text-slate-800 rounded-xl text-xs font-black shadow-sm">Lab 3</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Announcements Column -->
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8">
            <h4 class="font-black text-slate-800 mb-8 flex items-center gap-3 uppercase tracking-tighter">
                <span>Pengumuman</span>
                <span class="w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
            </h4>
            <div class="space-y-8">
                <div class="flex gap-5 group cursor-pointer">
                    <div class="w-1.5 h-14 bg-[#4B9DA9] rounded-full group-hover:scale-y-110 transition-all"></div>
                    <div>
                        <h5 class="text-sm font-black text-slate-700 leading-tight group-hover:text-[#4B9DA9] transition-colors">Wisuda Gelombang II</h5>
                        <p class="text-xs text-slate-400 mt-2 font-medium">Pendaftaran dibuka Januari 2026. Siapkan berkasmu!</p>
                    </div>
                </div>
                <div class="flex gap-5 group cursor-pointer">
                    <div class="w-1.5 h-14 bg-[#E37434] rounded-full group-hover:scale-y-110 transition-all"></div>
                    <div>
                        <h5 class="text-sm font-black text-slate-700 leading-tight group-hover:text-[#E37434] transition-colors">Maintenance Portal</h5>
                        <p class="text-xs text-slate-400 mt-2 font-medium">E-learning offline besok malam jam 22.00 WIB.</p>
                    </div>
                </div>
            </div>
            <button class="w-full mt-10 py-4 bg-slate-50 text-slate-400 text-xs font-black rounded-2xl hover:bg-slate-100 hover:text-slate-600 transition-all uppercase tracking-widest border border-slate-100">
                Lihat Semua
            </button>
        </div>
    </div>
@endsection









