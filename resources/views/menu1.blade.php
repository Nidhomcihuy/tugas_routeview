<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K=Route&View Kelompok1</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Link ke file CSS eksternal Anda -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-dark-background text-light-text">
    <!-- Header & Navigasi -->
    <header class="bg-dark-background py-4 sticky top-0 z-50 shadow-lg border-b border-gray-800">
        <nav class="container mx-auto px-4 flex justify-between items-center">
            <a href="#home" class="text-3xl font-extrabold text-primary-blue rounded-md p-2 hover:bg-medium-gray transition transform hover:scale-105">KELOMPOK 1</a>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#about" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Deskripsi</a></li>
                <li><a href="#education" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Menu2</a></li>
                <li><a href="#skills" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Menu3</a></li>
                <li><a href="#portfolio" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Menu4</a></li>
            </ul>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-primary-blue text-3xl focus:outline-none p-2 rounded-md hover:bg-medium-gray transition">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="md:hidden bg-dark-gray px-4 pt-2 pb-4 space-y-2 hidden border-t border-gray-700">
            <a href="#about" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3"> Deskripsi</a>
            <a href="#education" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Menu2</a>
            <a href="#skills" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Menu3</a>
            <a href="#portfolio" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Menu4</a>
        </div>
    </header>
    <!-- Hero Section -->
    <section id="home" class="h-screen flex flex-col justify-center items-center text-center px-4 hero-bg-gradient">
        <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-4 animate-on-scroll glow-text" style="animation-delay: 0.2s;">
            Kelompok 1
        </h1>
        <p id="typing-text" class="text-2xl md:text-4xl text-primary-blue font-semibold overflow-hidden whitespace-nowrap border-r-4 border-primary-blue pr-2 animate-typing">
            TIF 24
        </p>
        <div class="mt-16 animate-on-scroll" style="animation-delay: 0.6s;">
            <a href="#portfolio" class="bg-primary-blue text-white px-10 py-5 rounded-full text-xl md:text-2xl font-bold shadow-lg hover:shadow-2xl hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 relative overflow-hidden">
                <span class="relative z-10">Lihat Portofolio Kami <i class="fas fa-arrow-right ml-3"></i></span>
                <span class="absolute inset-0 bg-white opacity-20 transform scale-0 rounded-full transition-all duration-500 hover:scale-100"></span>
            </a>
        </div>
    </section>
    <!-- About Me Section -->
    <section id="about" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Deskripsi</h2>
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/3 text-center mb-8 md:mb-0 relative">
                <div class="absolute inset-0 bg-primary-blue opacity-20 rounded-full scale-90 blur-xl"></div>
                <img src="images/profil.png" alt="Foto Profil Kelompok 1" class="relative z-10 rounded-lg w-72 h-72 object-cover mx-auto border-4 border-primary-blue shadow-lg transition-transform duration-500 hover:scale-105 animate-on-scroll" style="animation-delay: 0.8s;">
            </div>
            <div class="md:w-2/3 text-xl leading-relaxed animate-on-scroll" style="animation-delay: 1.2s;">
                <p class="mb-5" id="about-me-text-1">
                    Kelompok 1 merupakan tim proyek dari Politeknik Negeri Jember, Jurusan Teknologi Informasi, Program Studi Teknik Informatika. Kami menerima jasa pembuatan website dan aplikasi mobile yang dirancang sesuai kebutuhan pengguna.
                </p>
                <p class="mb-5" id="about-me-text-2">
                    Dengan mengedepankan kualitas, fungsionalitas, dan desain yang modern, kami berkomitmen memberikan solusi digital yang efektif, inovatif, dan tepat guna.
                </p>
                <p id="about-me-text-3">
                    Hubungi kami untuk konsultasi dan kebutuhan proyek digital Anda!
                </p>
            </div>
        </div>
    </section>
    <!-- Education Section -->
    <section id="education" class="section-padding bg-dark-gray container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Data Anggota Kelompok</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.2s;">
                <h3 class="text-3xl font-bold text-white mb-6">Nama:</h3>
                <p class="text-gray-300 text-lg mb-4">Eka Indah Febriyanti</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">Bojonegoro, 02 Februari 2006</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">Desa Sambeng, Kecamatan Kasiman Kabupaten Bojonegoro</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">ekai60360@gmail.com</p>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="text-3xl font-bold text-white mb-6">Nama:</h3>
                <p class="text-gray-300 text-lg mb-4">A'an Abdul Nidhom</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">Bojonegoro, 10 Mei 2006</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">Desa Betet, Kecamatan Kasiman Kabupaten Bojonegoro</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">aanduln10@gmail.com</p>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.6s;">
                <h3 class="text-3xl font-bold text-white mb-6">Nama:</h3>
                <p class="text-gray-300 text-lg mb-4">Zahra nur risqona</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">Wonogiri, 21 oktober 2006</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">Kab Wonogiri</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">zahranurrisqona@gmail.com</p>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6">Nama:</h3>
                <p class="text-gray-300 text-lg mb-4">Anugrah tejo maliki</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">Sidoarjo, 11 maret 2005</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">Kec tarik, Kabupaten Sidoarjo</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">anugrahtejomaliki@gmail.com</p>
            </div>
        </div>
    </section>
    <!-- Skills Section -->
    <section id="skills" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Riwayat Pendidikan Anggota</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.2s;">
                <h3 class="text-3xl font-bold text-white mb-6">Eka</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">SD Negeri 1 Sambeng</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">SMP Negeri 1 Kasiman</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">SMK Negeri Kasiman</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">Politeknik Negeri Jember - Jurusan Teknologi Informasi (Teknik Informatika)</p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="text-3xl font-bold text-white mb-6">A'an</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">SD Negeri 1 Besah</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">SMP Negeri 1 Kasiman</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">SMK Negeri Kasiman</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">Politeknik Negeri Jember - Jurusan Teknologi Informasi (Teknik Informatika)</p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.6s;">
                <h3 class="text-3xl font-bold text-white mb-6">Zahra nur risqona</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">SD Negeri 1 Wonogiri</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">SMP Negeri 1 Wonogiri</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">SMA Negeri Wonogiri</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">Politeknik Negeri Jember - Jurusan Teknologi Informasi (Teknik Informatika)</p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6">Anugrah tejo maliki</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">SD Negeri 1 Tarik</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">SMP Negeri 1 Tarik</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">SMK Negeri Tarik</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">Politeknik Negeri Jember - Jurusan Teknologi Informasi (Teknik Informatika)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Data Prestasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $students = [
                    "A'an Abdul Nidhom",
                    "Eka Indah Febriyanti",
                    "Zahra nur risqona",
                    "Anugrah tejo maliki"
                ];
            @endphp

            @foreach($students as $student)
            <div class="skill-card p-6 rounded-xl bg-dark-gray shadow-lg border border-gray-800 flex flex-col h-full animate-on-scroll hover:transform hover:scale-105 transition duration-300">
                <h3 class="text-xl font-bold text-white mb-4 text-center border-b border-gray-700 pb-2 h-16 flex items-center justify-center">{{ $student }}</h3>
                <div class="space-y-3 flex-grow">
                    @if(isset($prestasis[$student]))
                        @foreach($prestasis[$student] as $prestasi)
                        <div class="bg-gray-700 p-3 rounded-lg mb-2 group relative hover:bg-gray-600 transition">
                            <p class="text-gray-200 text-sm flex items-start">
                                <i class="fas fa-trophy text-yellow-400 mr-2 mt-1 flex-shrink-0"></i>
                                <span class="font-medium">{{ $prestasi->title }}</span>
                            </p>
                            <div class="flex justify-end space-x-2 mt-2 opacity-0 group-hover:opacity-100 transition-opacity absolute top-1 right-2 bg-gray-700 rounded p-1 shadow-md">
                                <button onclick="event.stopPropagation(); openEditModal({{ $prestasi->id }}, {{ json_encode($student) }}, {{ json_encode($prestasi->title) }}, {{ json_encode($prestasi->description) }})" class="text-xs bg-yellow-500 hover:bg-yellow-400 text-white p-2 rounded-full shadow-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" onsubmit="return confirm('Hapus prestasi ini?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs bg-red-600 hover:bg-red-500 text-white p-2 rounded-full shadow-sm" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="flex flex-col items-center justify-center h-24 text-gray-500">
                            <i class="far fa-sad-tear text-2xl mb-2 opacity-50"></i>
                            <p class="text-sm italic">Belum ada prestasi.</p>
                        </div>
                    @endif
                </div>
                
                <button onclick="openAddModal({{ json_encode($student) }})" class="mt-6 w-full text-sm bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-500 hover:to-blue-700 text-white py-3 rounded-full shadow-lg transition-all transform hover:-translate-y-1 flex items-center justify-center font-semibold">
                    <i class="fas fa-plus-circle mr-2"></i> Tambah
                </button>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark-gray py-10 text-center text-gray-400 border-t border-gray-700">
        <p class="text-lg">&copy; 2026 KELOMPOK 1 . Hak Cipta Dilindungi.</p>
        <div class="flex justify-center space-x-8 mt-6">
            <a href="#" target="_blank" class="text-primary-blue hover:text-white transition-colors text-3xl transform hover:scale-110"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/kontolqu739/" target="_blank" class="text-primary-blue hover:text-white transition-colors text-3xl transform hover:scale-110"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank" class="text-primary-blue hover:text-white transition-colors text-3xl transform hover:scale-110"><i class="fab fa-tiktok"></i></a>
        </div>
    </footer>
    <!-- Modal Pop-up (Tersembunyi secara default) -->  
    <!-- Modal Tambah/Edit Prestasi -->
    <div id="prestasi-modal" class="modal-overlay hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70">
        <div class="modal-content bg-dark-gray p-8 rounded-lg shadow-xl w-full max-w-md relative border border-gray-700">
            <button class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl" onclick="closePrestasiModal()">&times;</button>
            <h3 id="prestasi-modal-title" class="text-2xl font-bold text-primary-blue mb-6">Tambah Prestasi</h3>
            
            <form id="prestasi-form" action="{{ route('prestasi.store') }}" method="POST">
                @csrf
                <div id="method-spoofing"></div>
                <input type="hidden" name="student_name" id="student_name_input">
                
                <div class="mb-4">
                    <label class="block text-gray-300 mb-2 font-semibold">Nama Mahasiswa</label>
                    <input type="text" id="student_name_display" class="w-full bg-gray-700 text-gray-300 p-3 rounded border border-gray-600 focus:border-primary-blue focus:outline-none" readonly>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-300 mb-2 font-semibold">Judul Prestasi</label>
                    <input type="text" name="title" id="prestasi_title" class="w-full bg-gray-700 text-white p-3 rounded border border-gray-600 focus:border-primary-blue focus:outline-none" required placeholder="Juara 1 Lomba Web Design...">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-300 mb-2 font-semibold">Deskripsi (Opsional)</label>
                    <textarea name="description" id="prestasi_description" class="w-full bg-gray-700 text-white p-3 rounded border border-gray-600 focus:border-primary-blue focus:outline-none" rows="3"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-primary-blue hover:bg-blue-700 text-white py-3 rounded-lg font-bold transition-all transform hover:scale-105">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Script untuk Modal Prestasi -->
    <script>
        function openAddModal(studentName) {
            const modal = document.getElementById('prestasi-modal');
            modal.classList.remove('hidden');
            // Sedikit delay agar transisi CSS 'open' berjalan
            setTimeout(() => {
                modal.classList.add('open');
            }, 10);

            document.getElementById('prestasi-modal-title').innerText = 'Tambah Prestasi';
            document.getElementById('prestasi-form').action = "{{ route('prestasi.store') }}";
            document.getElementById('method-spoofing').innerHTML = '';
            
            document.getElementById('student_name_input').value = studentName;
            document.getElementById('student_name_display').value = studentName;
            document.getElementById('prestasi_title').value = '';
            document.getElementById('prestasi_description').value = '';
        }

        function openEditModal(id, studentName, title, description) {
            const modal = document.getElementById('prestasi-modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('open');
            }, 10);

            document.getElementById('prestasi-modal-title').innerText = 'Edit Prestasi';
            document.getElementById('prestasi-form').action = "/prestasi/" + id;
            document.getElementById('method-spoofing').innerHTML = '@method("PUT")';
            
            document.getElementById('student_name_input').value = studentName;
            document.getElementById('student_name_display').value = studentName;
            document.getElementById('prestasi_title').value = title;
            document.getElementById('prestasi_description').value = description;
        }

        function closePrestasiModal() {
            const modal = document.getElementById('prestasi-modal');
            modal.classList.remove('open');
            // Tunggu transisi selesai sebelum hidden
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 400);
        }
    </script>
    <!-- Link ke file JavaScript eksternal Anda -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>