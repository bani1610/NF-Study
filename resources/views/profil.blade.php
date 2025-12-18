<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NF Student Hub - Profil Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans">

    <nav class="bg-blue-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-xl font-bold italic">NF Student Hub</h1>
            <span class="text-blue-100 text-sm">Projek NF-Study #8</span>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto py-10 px-4">
        
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-xl mb-6 shadow-lg flex items-center">
                <i class="fas fa-check-circle mr-3"></i>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                
                <div class="md:col-span-4 lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="h-20 bg-blue-700"></div>
                        
                        <div class="px-6 pb-6">
                            <div class="relative -mt-12 mb-4 text-center">
                                <div class="inline-block relative">
                                    @if($user->foto_profil)
                                        <img src="{{ asset('uploads/profil/' . $user->foto_profil) }}" 
                                             class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-md">
                                    @else
                                        <div class="w-32 h-32 rounded-full bg-blue-600 border-4 border-white shadow-md flex items-center justify-center text-white text-5xl font-bold">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                    @endif
                                    
                                    <label class="absolute bottom-0 right-0 bg-blue-700 text-white p-2 rounded-full cursor-pointer hover:bg-blue-800 transition shadow-lg border-2 border-white">
                                        <i class="fas fa-camera text-xs"></i>
                                        <input type="file" name="foto_profil" class="hidden" onchange="this.form.submit()">
                                    </label>
                                </div>
                            </div>

                            <div class="text-center mb-6">
                                <h2 class="text-xl font-bold text-gray-800 uppercase tracking-tight">{{ $user->name }}</h2>
                                <p class="text-blue-600 font-semibold text-sm">{{ $user->nim ?? 'NIM Belum Diisi' }}</p>
                            </div>

                            <div class="space-y-3 border-t pt-4">
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-envelope w-8 text-blue-500"></i>
                                    <span class="text-xs font-medium truncate">{{ $user->email }}</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-graduation-cap w-8 text-blue-500"></i>
                                    <span class="text-xs font-medium">{{ $user->prodi ?? 'Program Studi' }}</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-calendar-alt w-8 text-blue-500"></i>
                                    <span class="text-xs font-medium">Angkatan {{ $user->angkatan ?? '-' }}</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-circle-check w-8 text-green-500"></i>
                                    <span class="text-xs font-medium text-green-600">Mahasiswa Aktif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-8 lg:col-span-9">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
                        <div class="flex items-center mb-6 border-b pb-4">
                            <i class="fas fa-user-edit text-blue-700 text-xl mr-3"></i>
                            <h3 class="text-xl font-bold text-gray-800">Edit Profil Mahasiswa</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                                    class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Email Institusi</label>
                                <input type="email" name="email" value="{{ old('email', $user->email) }}" 
                                    class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">NIM (Nomor Induk Mahasiswa)</label>
                                <input type="text" name="nim" value="{{ old('nim', $user->nim) }}" placeholder="Contoh: 0110224001"
                                    class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Program Studi</label>
                                <select name="prodi" class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                                    <option value="">-- Pilih Prodi --</option>
                                    <option value="Teknik Informatika" {{ $user->prodi == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                    <option value="Sistem Informasi" {{ $user->prodi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                    <option value="Bisnis Digital" {{ $user->prodi == 'Bisnis Digital' ? 'selected' : '' }}>Bisnis Digital</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Angkatan</label>
                                <input type="number" name="angkatan" value="{{ old('angkatan', $user->angkatan) }}" placeholder="2024"
                                    class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
                            </div>
                        </div>

                        <div class="mt-10">
                            <button type="submit" class="w-full md:w-auto px-10 py-3 bg-blue-700 text-white font-bold rounded-xl hover:bg-blue-800 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                                <i class="fas fa-save mr-2"></i> Simpan Perubahan Profil
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <footer class="text-center py-10 text-gray-400 text-xs">
        &copy; 2024 Nurul Fikri Student Hub | Terintegrasi dengan NF-Study #8
    </footer>

</body>
</html>