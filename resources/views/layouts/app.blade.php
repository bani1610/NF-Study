<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NF-Study - Dashboard</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-[#ebf0f5] text-slate-900">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar: Gradient Teal -->
        <aside class="hidden w-72 overflow-y-auto bg-gradient-to-b from-[#4B9DA9] to-[#2E6F7A] md:block flex-shrink-0 shadow-2xl">
            <div class="flex flex-col h-full py-6 text-white">
                <a class="ml-8 text-2xl font-bold tracking-tight text-white flex items-center gap-2" href="/dashboard">
                    <span class="bg-white/20 p-1.5 rounded-lg shadow-sm border border-white/30">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </span>
                    <span class="tracking-tighter font-black uppercase">NF<span class="font-light ml-0.5">Study</span></span>
                </a>

                <div class="mt-10 px-6">
                    <div class="flex items-center gap-4 mb-8 p-4 bg-teal-900/10 rounded-2xl border border-white/20 shadow-inner">
                        <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-[#4B9DA9] font-bold text-lg shadow-md">
                            U
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-sm font-bold text-white truncate">Ujang Racing</p>
                            <p class="text-[10px] text-teal-50 font-bold uppercase tracking-widest">Mahasiswa Kece</p>
                        </div>
                    </div>
                </div>

                <nav class="mt-4 px-4 space-y-1 flex-1">
                    <a class="flex items-center px-4 py-3.5 text-sm font-bold rounded-2xl transition-all {{ request()->is('dashboard') ? 'text-white bg-white/20 shadow-sm border border-white/10' : 'text-teal-50 hover:text-white hover:bg-black/5' }}" href="/dashboard">
                        <svg class="w-5 h-5 {{ request()->is('dashboard') ? 'text-white' : 'opacity-70 group-hover:opacity-100' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span class="ml-4 tracking-wide">Beranda</span>
                    </a>
                    <a class="flex items-center px-4 py-3.5 text-sm font-bold text-teal-50/50 rounded-2xl cursor-not-allowed opacity-60" href="#" aria-disabled="true" onclick="return false;">
                        <svg class="w-5 h-5 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="ml-4 tracking-wide">Jadwal Kuliah</span>
                    </a>
                    <a class="flex items-center px-4 py-3.5 text-sm font-bold text-teal-50/50 rounded-2xl cursor-not-allowed opacity-60" href="#" aria-disabled="true" onclick="return false;">
                        <svg class="w-5 h-5 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 002 2v6a2 2 0 002 2h2m2 4h10a2 2 0 00-2-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="ml-4 tracking-wide">Pembayaran UKT</span>
                    </a>
                    <a class="flex items-center px-4 py-3.5 text-sm font-bold text-teal-50/50 rounded-2xl cursor-not-allowed opacity-60" href="#" aria-disabled="true" onclick="return false;">
                        <svg class="w-5 h-5 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>        
                        <span class="ml-4 tracking-wide">Pesan & Diskusi</span>
                    </a>
                     <a class="flex items-center px-4 py-3.5 text-sm font-bold rounded-2xl transition-all {{ request()->is('profil') ? 'text-white bg-white/20 shadow-sm border border-white/10' : 'text-teal-50 hover:text-white hover:bg-black/5' }}" href="/profil">
                        <svg class="w-5 h-5 {{ request()->is('profil') ? 'text-white' : 'opacity-70 group-hover:opacity-100' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <span class="ml-4 tracking-wide">Profil Saya</span>
                    </a>
                </nav>

                <!-- Logout Button -->
                <div class="px-4 mt-auto">
                    <a href="/logout" class="flex items-center px-4 py-3.5 text-sm font-bold text-red-100 hover:text-white hover:bg-red-500/20 rounded-2xl transition-all group">
                        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="ml-4 tracking-wide">Keluar Sistem</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 w-full overflow-hidden bg-[#ebf0f5]">
            <header class="sticky top-0 left-0 w-full z-50 py-4 bg-white transition-all duration-300 border-b border-slate-200/50 supports-[backdrop-filter]:bg-white/50">
                <div class="container flex items-center justify-between h-full px-8 mx-auto">
                    <div class="flex items-center justify-center flex-1">
                        <div class="relative w-full max-w-md focus-within:text-[#4B9DA9]">
                             <div class="absolute inset-y-0 flex items-center pl-3">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input class="w-full pl-10 pr-4 py-2.5 text-sm text-slate-700 placeholder-slate-400 bg-[#ebf0f5] border-none rounded-2xl focus:bg-white focus:ring-2 focus:ring-[#4B9DA9] transition-all outline-none" type="text" placeholder="Cari info kuliah..." aria-label="Cari informasi kuliah" />
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-full bg-teal-50 border-2 border-[#4B9DA9]/20 flex items-center justify-center text-[#4B9DA9] font-bold shadow-sm" role="img" aria-label="User avatar">U</div>
                    </div>
                </div>
            </header>

            <main class="h-full overflow-y-auto">
                <div class="container px-8 py-8 mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>



