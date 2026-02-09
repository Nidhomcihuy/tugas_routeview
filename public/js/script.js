// Data Contoh Portofolio (Anda bisa mengganti ini dengan data proyek Anda)
const projects = [
    {
        id: 1,
        title: "Sistem Informasi Akademik",
        category: "Web Development, UI/UX Design",
        imageUrl: "https://placehold.co/600x400/0056B3/FFFFFF?text=SIA+Preview",
        description: "Pengembangan sistem informasi akademik berbasis web untuk manajemen data mahasiswa, dosen, mata kuliah, dan nilai. Fitur meliputi dashboard interaktif, penjadwalan, dan pelaporan.",
        demoLink: "#", // Ganti dengan link demo asli Anda
        githubLink: "#" // Ganti dengan link GitHub asli Anda
    },
    {
        id: 2,
        title: "Aplikasi Dekstop",
        category: "Mobile Development, Backend",
        imageUrl: "https://placehold.co/600x400/0056B3/FFFFFF?text=E-commerce+App",
        description: "Membangun aplikasi Dekstop yang memungkinkan pengguna untuk menjelajahi produk, menambahkan ke keranjang, dan melakukan pembelian. Menggunakan API RESTful untuk backend.",
        demoLink: "#",
        githubLink: "#"
    },
    {
        id: 3,
        title: "Website ",
        category: "Frontend Development",
        imageUrl: "https://placehold.co/600x400/0056B3/FFFFFF?text=Startup+Website",
        description: "Membuat website landing page yang menarik dan informatif, menampilkan layanan, testimoni, dan formulir kontak dengan animasi modern.",
        demoLink: "#",
        githubLink: "#"
    }
    // Tambahkan proyek lainnya di sini
];

// API Key (biarkan kosong, akan diisi secara otomatis oleh lingkungan Canvas)
const apiKey = "";

// Fungsi untuk memanggil Gemini API
async function generateText(prompt) {
    let chatHistory = [];
    chatHistory.push({ role: "user", parts: [{ text: prompt }] });
    const payload = { contents: chatHistory };
    const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;

    try {
        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
        });
        const result = await response.json();
        if (result.candidates && result.candidates.length > 0 &&
            result.candidates[0].content && result.candidates[0].content.parts &&
            result.candidates[0].content.parts.length > 0) {
            return result.candidates[0].content.parts[0].text;
        } else {
            console.error('Unexpected API response structure:', result);
            return 'Gagal menghasilkan teks. Struktur respons tidak terduga.';
        }
    } catch (error) {
        console.error('Error calling Gemini API:', error);
        return 'Terjadi kesalahan saat memanggil API. Silakan coba lagi.';
    }
}

// Fungsi untuk smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
        // Tutup menu mobile jika terbuka setelah klik
        if (window.innerWidth < 768) { // Cek jika di perangkat mobile
            mobileMenu.classList.add('hidden');
        }
    });
});

// Logika untuk Mobile Menu
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Logika untuk Pop-up Modal Portofolio
const projectItems = document.querySelectorAll('.portfolio-item');
const modal = document.getElementById('project-modal');
const closeModalButton = document.getElementById('close-modal');
const modalTitle = document.getElementById('modal-title');
const modalImage = document.getElementById('modal-image');
const modalDescription = document.getElementById('modal-description');
const modalDemoLink = document.getElementById('modal-demo-link');
const modalGithubLink = document.getElementById('modal-github-link');
const enhanceDescriptionButton = document.getElementById('enhance-description-button');
const enhanceDescriptionText = document.getElementById('enhance-description-text');
const enhanceDescriptionSpinner = document.getElementById('enhance-description-spinner');
const geminiEnhancedDescription = document.getElementById('gemini-enhanced-description');

projectItems.forEach(item => {
    item.addEventListener('click', () => {
        const projectId = item.getAttribute('data-project-id');
        const project = projects.find(p => p.id == projectId);

        if (project) {
            modalTitle.innerText = project.title;
            modalImage.src = project.imageUrl;
            modalDescription.innerText = project.description;
            modalDemoLink.href = project.demoLink;
            modalGithubLink.href = project.githubLink;

            // Reset dan sembunyikan deskripsi yang ditingkatkan
            geminiEnhancedDescription.innerText = '';
            geminiEnhancedDescription.classList.add('hidden');

            modal.classList.remove('hidden');
        }
    });
});

closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden');
});

// Logika untuk meningkatkan deskripsi menggunakan Gemini API
enhanceDescriptionButton.addEventListener('click', async () => {
    const originalText = modalDescription.innerText;
    enhanceDescriptionButton.setAttribute('disabled', 'true');
    enhanceDescriptionSpinner.classList.remove('hidden');

    // Panggil Gemini API untuk meningkatkan deskripsi
    const enhancedText = await generateText(`Jelaskan proyek ini secara rinci: ${originalText}`);

    enhanceDescriptionSpinner.classList.add('hidden');
    geminiEnhancedDescription.innerText = enhancedText;
    geminiEnhancedDescription.classList.remove('hidden');
    enhanceDescriptionButton.removeAttribute('disabled');
});