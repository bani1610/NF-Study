@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Dashboard
    </h2>

    <!-- CTA / Welcome Banner -->
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-indigo-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <span>Selamat Datang, Mahasiswa! Semangat buat semester ini ya! ??</span>
        </div>
        <span>Lihat Kalender &RightArrow;</span>
    </div>

    <!-- Cards Stats -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Total SKS Diambil</p>
                <p class="text-lg font-semibold text-gray-700">114 SKS</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">IPK Terakhir</p>
                <p class="text-lg font-semibold text-gray-700">3.85</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Semester</p>
                <p class="text-lg font-semibold text-gray-700">5 (Lima)</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Status UKT</p>
                <p class="text-lg font-semibold text-teal-600">Lunas</p>
            </div>
        </div>
    </div>

    <!-- New Table & Info -->
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs">
            <h4 class="mb-4 font-semibold text-gray-800">
                Jadwal Kuliah Hari Ini
            </h4>
            <div class="w-full overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                            <tr>
                                <th class="px-4 py-3">Matkul</th>
                                <th class="px-4 py-3">Jam</th>
                                <th class="px-4 py-3">Ruang</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">Pemrograman Web Lanjut</p>
                                            <p class="text-xs text-gray-600">Dosen: Pak Ali</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">08:00 - 10:30</td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">B204</span>
                                </td>
                            </tr>
                             <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">Kecerdasan Buatan</p>
                                            <p class="text-xs text-gray-600">Dosen: Bu Siti</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">13:00 - 15:30</td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full">Lab 3</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs">
            <h4 class="mb-4 font-semibold text-gray-800">
                Pengumuman Terbaru ??
            </h4>
            <div class="flex flex-col gap-4">
                <div class="p-3 bg-blue-50 rounded-md border-l-4 border-blue-500">
                    <p class="text-sm font-bold text-gray-700">Pendaftaran Wisuda Gelombang 2</p>
                    <p class="text-xs text-gray-600 mt-1">Dibuka mulai tanggal 1 Januari - 15 Januari 2026. Segera lengkapi berkas!</p>
                </div>
                <div class="p-3 bg-yellow-50 rounded-md border-l-4 border-yellow-500">
                    <p class="text-sm font-bold text-gray-700">Maintenance Server E-Learning</p>
                    <p class="text-xs text-gray-600 mt-1">Server akan down pada hari Sabtu pukul 22:00 WIB untuk perbaikan.</p>
                </div>
                 <div class="p-3 bg-gray-50 rounded-md border-l-4 border-gray-500">
                    <p class="text-sm font-bold text-gray-700">Libur Semester Ganjil</p>
                    <p class="text-xs text-gray-600 mt-1">Selamat berlibur! Perkuliahan aktif kembali tanggal 1 Februari 2026.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
