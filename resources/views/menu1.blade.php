<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio A'an Abdul Nidhom</title>
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
            <a href="#home" class="text-3xl font-extrabold text-primary-blue rounded-md p-2 hover:bg-medium-gray transition transform hover:scale-105">AAN</a>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#about" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Tentang Saya</a></li>
                <li><a href="#education" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Edukasi</a></li>
                <li><a href="#skills" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Keterampilan</a></li>
                <li><a href="#portfolio" class="hover:text-primary-blue transition-colors text-lg rounded-md p-2 hover:bg-medium-gray">Portofolio</a></li>
            </ul>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-primary-blue text-3xl focus:outline-none p-2 rounded-md hover:bg-medium-gray transition">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="md:hidden bg-dark-gray px-4 pt-2 pb-4 space-y-2 hidden border-t border-gray-700">
            <a href="#about" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Tentang Saya</a>
            <a href="#education" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Edukasi</a>
            <a href="#skills" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Keterampilan</a>
            <a href="#portfolio" class="block py-2 text-primary-blue hover:bg-medium-gray rounded-md text-lg px-3">Portofolio</a>
        </div>
    </header>
    <!-- Hero Section -->
    <section id="home" class="h-screen flex flex-col justify-center items-center text-center px-4 hero-bg-gradient">
        <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-4 animate-on-scroll glow-text" style="animation-delay: 0.2s;">
            A'an Abdul Nidhom
        </h1>
        <p id="typing-text" class="text-2xl md:text-4xl text-primary-blue font-semibold overflow-hidden whitespace-nowrap border-r-4 border-primary-blue pr-2 animate-typing">
            kuliah
        </p>
        <div class="mt-16 animate-on-scroll" style="animation-delay: 0.6s;">
            <a href="#portfolio" class="bg-primary-blue text-white px-10 py-5 rounded-full text-xl md:text-2xl font-bold shadow-lg hover:shadow-2xl hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 relative overflow-hidden">
                <span class="relative z-10">Lihat Portofolio Saya <i class="fas fa-arrow-right ml-3"></i></span>
                <span class="absolute inset-0 bg-white opacity-20 transform scale-0 rounded-full transition-all duration-500 hover:scale-100"></span>
            </a>
        </div>
    </section>
    <!-- About Me Section -->
    <section id="about" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Tentang Saya</h2>
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/3 text-center mb-8 md:mb-0 relative">
                <div class="absolute inset-0 bg-primary-blue opacity-20 rounded-full scale-90 blur-xl"></div>
                <img src="profilweb2.jpeg" alt="Foto Profil A'an" class="relative z-10 rounded-full w-72 h-72 object-cover mx-auto border-4 border-primary-blue shadow-lg transition-transform duration-500 hover:scale-105 animate-on-scroll" style="animation-delay: 0.8s;">
            </div>
            <div class="md:w-2/3 text-xl leading-relaxed animate-on-scroll" style="animation-delay: 1.2s;">
                <p class="mb-5" id="about-me-text-1">
                    Halo! Saya A'an Abdul Nidhom, seorang mahasiswa bersemangat di Jember State Polytechnic. Saya sangat tertarik pada bidang pengembangan perangkat lunak, khususnya dalam menciptakan solusi digital yang inovatif dan berorientasi pengguna.
                </p>
                <p class="mb-5" id="about-me-text-2">
                    Saya percaya bahwa teknologi memiliki kekuatan untuk mengubah dunia, dan saya berkomitmen untuk terus belajar serta mengembangkan diri agar dapat berkontribusi dalam ekosistem teknologi. Saya menyukai tantangan, dan selalu siap untuk menjelajahi teknologi baru serta memecahkan masalah yang kompleks.
                </p>
                <p id="about-me-text-3">
                    Di waktu luang, saya sering bereksperimen dengan berbagai proyek coding dan mengikuti perkembangan terbaru di industri. Mari berkolaborasi dan menciptakan sesuatu yang luar biasa!
                </p>
                <div class="mt-10 text-center md:text-left">
                    <a href="your-cv.pdf" download class="bg-primary-blue text-white px-8 py-4 rounded-full text-lg font-semibold shadow-md hover:bg-blue-700 transition-colors flex items-center justify-center space-x-3 mx-auto md:mx-0 transform hover:scale-105">
                        <i class="fas fa-download text-xl"></i> <span>Unduh CV</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Section -->
    <section id="education" class="section-padding bg-dark-gray container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Edukasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.2s;">
                <h3 class="text-3xl font-bold text-white mb-4">kuliah</h3>
                <p class="text-primary-blue text-xl mb-3">D4 Teknik Informatika</p>
                <p class="text-gray-400 text-lg">2024 - Sekarang</p>
                <p class="mt-6 text-gray-300 leading-relaxed">
                    Mempelajari dasar-dasar ilmu komputer, pemrograman, struktur data, algoritma, pengembangan web, dan basis data. Berpartisipasi aktif dalam proyek kelompok dan kompetisi yang mengasah kemampuan teknis dan kolaborasi.
                </p>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="text-3xl font-bold text-white mb-4">SMK</h3>
                <p class="text-primary-blue text-xl mb-3">Teknik Kendaraan Ringan</p>
                <p class="text-gray-400 text-lg">2021 - 2023</p>
                <p class="mt-6 text-gray-300 leading-relaxed">
                    Memperoleh dasar-dasar pendidikan menengah yang kuat dan mengembangkan minat awal dalam penguasaan teknisi. Membangun fondasi pemikiran logis dan analitis.
                </p>
            </div>
        </div>
    </section>
    <!-- Skills Section -->
    <section id="skills" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Keterampilan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.2s;">
                <h3 class="text-3xl font-bold text-white mb-6 flex items-center"><i class="fas fa-terminal text-primary-blue mr-4 text-3xl"></i> Bahasa Pemrograman</h3>
                <ul class="space-y-4 text-xl text-gray-300">
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>JavaScript (ES6+)</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Python</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>HTML & CSS</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Java & Javafx</li>
                </ul>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.4s;">
                <h3 class="text-3xl font-bold text-white mb-6 flex items-center"><i class="fas fa-layer-group text-primary-blue mr-4 text-3xl"></i> Design </h3>
                <ul class="space-y-4 text-xl text-gray-300">
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Figma</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Canva</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>-</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>-</li>
                </ul>
            </div>
            <div class="skill-card p-10 animate-on-scroll" style="animation-delay: 0.6s;">
                <h3 class="text-3xl font-bold text-white mb-6 flex items-center"><i class="fas fa-cogs text-primary-blue mr-4 text-3xl"></i> Tools & Database</h3>
                <ul class="space-y-4 text-xl text-gray-300">
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Git & GitHub</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>VS Code</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>MySQL</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Netbeans</li>
                </ul>
            </div>
            <div class="skill-card p-10 animate-on-scroll col-span-1 sm:col-span-2 lg:col-span-3" style="animation-delay: 0.8s;">
                <h3 class="text-3xl font-bold text-white mb-6 flex items-center justify-center"><i class="fas fa-users text-primary-blue mr-4 text-3xl"></i> Keterampilan Non-Teknis</h3>
                <ul class="space-y-4 text-xl text-gray-300 flex flex-wrap justify-center gap-x-12 gap-y-4">
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Kerja Tim</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Pemecahan Masalah</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Komunikasi Efektif</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Adaptabilitas</li>
                    <li><i class="fas fa-caret-right text-primary-blue mr-3"></i>Pembelajar Cepat</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding container mx-auto px-4 py-20 animate-on-scroll">
        <h2 class="text-5xl font-extrabold text-center mb-16 text-primary-blue glow-text">Portofolio</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="portfolio-item p-8 cursor-pointer animate-on-scroll" data-project-id="1" style="animation-delay: 0.2s;">
                <img src="https://placehold.co/400x280/0056B3/FFFFFF?text=SIA+Preview" alt="Project 1" class="w-full h-56 object-cover rounded-lg mb-6 border border-primary-blue/30">
                <h3 class="text-2xl font-bold text-white mb-2">Sistem Informasi Akademik</h3>
                <p class="text-gray-400 text-lg">Web Development, UI/UX Design</p>
            </div>
            <div class="portfolio-item p-8 cursor-pointer animate-on-scroll" data-project-id="2" style="animation-delay: 0.4s;">
                <img src="https://placehold.co/400x280/0056B3/FFFFFF?text=E-commerce+App" alt="Project 2" class="w-full h-56 object-cover rounded-lg mb-6 border border-primary-blue/30">
                <h3 class="text-2xl font-bold text-white mb-2">Aplikasi Mobile E-commerce</h3>
                <p class="text-gray-400 text-lg">Mobile Development, Backend</p>
            </div>
            <div class="portfolio-item p-8 cursor-pointer animate-on-scroll" data-project-id="3" style="animation-delay: 0.6s;">
                <img src="https://placehold.co/400x280/0056B3/FFFFFF?text=Startup+Website" alt="Project 3" class="w-full h-56 object-cover rounded-lg mb-6 border border-primary-blue/30">
                <h3 class="text-2xl font-bold text-white mb-2">Website Perusahaan Startup</h3>
                <p class="text-gray-400 text-lg">Frontend Development, Animasi</p>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark-gray py-10 text-center text-gray-400 border-t border-gray-700">
        <p class="text-lg">&copy; 2025 A'an Abdul Nidhom. Hak Cipta Dilindungi.</p>
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