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
                <p class="text-gray-300 text-lg mb-4">[Nama Anggota 3]</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">[Tempat, Tanggal Lahir]</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">[Alamat Lengkap]</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">[Email Address]</p>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6">Nama:</h3>
                <p class="text-gray-300 text-lg mb-4">[Nama Anggota 4]</p>
                <h3 class="text-3xl font-bold text-white mb-6">TTL:</h3>
                <p class="text-gray-300 text-lg mb-4">[Tempat, Tanggal Lahir]</p>
                <h3 class="text-3xl font-bold text-white mb-6">Alamat:</h3>
                <p class="text-gray-300 text-lg mb-4">[Alamat Lengkap]</p>
                <h3 class="text-3xl font-bold text-white mb-6">Email:</h3>
                <p class="text-gray-300 text-lg">[Email Address]</p>
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
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 3]</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">[Nama SD] - [Tahun Lulus]</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">[Nama SMP/MTS] - [Tahun Lulus]</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">[Nama SMA/SMK] - [Tahun Lulus]</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">[Nama Perguruan Tinggi] - [Program Studi]</p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 4]</h3>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-school mr-2"></i>SD</h4>
                    <p class="text-gray-300 text-sm">[Nama SD] - [Tahun Lulus]</p>
                </div>
                <div class="mb-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-book mr-2"></i>SMP/MTS</h4>
                    <p class="text-gray-300 text-sm">[Nama SMP/MTS] - [Tahun Lulus]</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-graduation-cap mr-2"></i>SMA/SMK</h4>
                    <p class="text-gray-300 text-sm">[Nama SMA/SMK] - [Tahun Lulus]</p>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-bold text-primary-blue mb-2"><i class="fas fa-university mr-2"></i>Perguruan Tinggi</h4>
                    <p class="text-gray-300 text-sm">[Nama Perguruan Tinggi] - [Program Studi]</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Data Prestasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.2s;">
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 1]</h3>
                <div class="space-y-3">
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 1]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 2]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 3]</span>
                    </p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 2]</h3>
                <div class="space-y-3">
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 1]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 2]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 3]</span>
                    </p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.6s;">
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 3]</h3>
                <div class="space-y-3">
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 1]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 2]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 3]</span>
                    </p>
                </div>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6">[Nama Anggota 4]</h3>
                <div class="space-y-3">
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 1]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 2]</span>
                    </p>
                    <p class="text-gray-300 text-sm flex items-start">
                        <i class="fas fa-trophy text-primary-blue mr-3 mt-1 flex-shrink-0"></i>
                        <span>[Prestasi 3]</span>
                    </p>
                </div>
            </div>
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
    <div id="project-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" id="close-modal">&times;</button>
            <h3 id="modal-title" class="text-4xl font-bold text-primary-blue mb-4"></h3>
            <img id="modal-image" src="" alt="" class="w-full h-auto rounded-lg mb-6 shadow-md border border-primary-blue/30">
            <p id="modal-description" class="text-gray-300 text-lg leading-relaxed mb-6"></p>
            <div class="flex flex-wrap gap-4 mt-4 justify-center md:justify-start">
                <button id="enhance-description-button" >
                    <div id="enhance-description-spinner" class="loading-spinner ml-2 hidden"></div>
                </button>
                <a id="modal-demo-link" href="#" target="_blank" class="bg-primary-blue text-white px-7 py-3 rounded-full text-md font-semibold hover:bg-blue-700 transition-colors flex items-center transform hover:scale-105">
                    <i class="fas fa-external-link-alt mr-2"></i> Lihat Demo
                </a>
                <a id="modal-github-link" href="#" target="_blank" class="bg-gray-700 text-white px-7 py-3 rounded-full text-md font-semibold hover:bg-gray-600 transition-colors flex items-center transform hover:scale-105">
                    <i class="fab fa-github mr-2"></i> GitHub
                </a>
            </div>
            <p id="gemini-enhanced-description" class="text-gray-400 mt-6 text-sm italic border-t border-gray-700 pt-4 hidden"></p>
        </div>
    </div>
    <!-- Link ke file JavaScript eksternal Anda -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>