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

let currentProjectDescription = ''; // Menyimpan deskripsi proyek yang sedang dibuka

projectItems.forEach(item => {
    item.addEventListener('click', () => {
        const projectId = parseInt(item.dataset.projectId);
        const project = projects.find(p => p.id === projectId);

        if (project) {
            modalTitle.textContent = project.title;
            modalImage.src = project.imageUrl;
            modalImage.alt = project.title;
            modalDescription.textContent = project.description;
            currentProjectDescription = project.description; // Simpan deskripsi asli
            geminiEnhancedDescription.textContent = ''; // Kosongkan hasil Gemini sebelumnya
            geminiEnhancedDescription.classList.add('hidden'); // Sembunyikan

            modalDemoLink.href = project.demoLink;
            modalGithubLink.href = project.githubLink;

            modalDemoLink.style.display = project.demoLink && project.demoLink !== '#' ? 'flex' : 'none';
            modalGithubLink.style.display = project.githubLink && project.githubLink !== '#' ? 'flex' : 'none';

            modal.classList.add('open');
            document.body.style.overflow = 'hidden'; // Nonaktifkan scroll body
        }
    });
});

closeModalButton.addEventListener('click', () => {
    modal.classList.remove('open');
    document.body.style.overflow = 'auto'; // Aktifkan scroll body kembali
});

// Tutup modal jika mengklik di luar konten
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.classList.remove('open');
        document.body.style.overflow = 'auto';
    }
});

// Logika untuk tombol Perluas Deskripsi (Gemini API)
enhanceDescriptionButton.addEventListener('click', async () => {
    enhanceDescriptionButton.disabled = true;
    enhanceDescriptionText.textContent = 'Memperluas...';
    enhanceDescriptionSpinner.classList.remove('hidden');

    const prompt = `Perluas dan buat deskripsi proyek berikut lebih menarik dan profesional. Hindari pengulangan. Batasi sekitar 100-150 kata:\n\n"${modalTitle.textContent}: ${currentProjectDescription}"`;
    const generatedText = await generateText(prompt);

    geminiEnhancedDescription.textContent = generatedText;
    geminiEnhancedDescription.classList.remove('hidden');

    enhanceDescriptionButton.disabled = false;
    enhanceDescriptionText.textContent = ' Perluas Deskripsi';
    enhanceDescriptionSpinner.classList.add('hidden');
});


// Animasi "Fade-in on Scroll"
const animateElements = document.querySelectorAll('.animate-on-scroll');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            // Opsional: berhenti mengamati setelah terlihat untuk performa
            // observer.unobserve(entry.target);
        } else {
            // Opsional: reset animasi saat elemen tidak terlihat lagi
            // entry.target.classList.remove('is-visible');
        }
    });
}, {
    threshold: 0.1 // Berapa persen elemen yang harus terlihat untuk memicu
});

animateElements.forEach(el => {
    observer.observe(el);
});

// Animasi Typing Effect untuk Hero Section
const typingTextElement = document.getElementById('typing-text');
const textToType = "Student of Jember State Polytechnic";
let charIndex = 0;

function typeWriter() {
    if (charIndex < textToType.length) {
        typingTextElement.textContent += textToType.charAt(charIndex);
        charIndex++;
        setTimeout(typeWriter, 100); // Kecepatan ketik
    } else {
        // Hapus animasi border-right setelah selesai mengetik
        typingTextElement.style.borderRight = 'none';
    }
}
// Atur ulang textContent dan mulai efek mengetik setelah halaman dimuat
window.onload = () => {
    typingTextElement.textContent = ''; // Kosongkan teks awal
    typeWriter(); // Mulai efek mengetik
};

// Pastikan hero section tidak berkedip saat typing effect dimulai
document.addEventListener('DOMContentLoaded', () => {
     // Pastikan typingTextElement memiliki overflow: hidden dan white-space: nowrap dari CSS
     // agar efek mengetik terlihat
});
