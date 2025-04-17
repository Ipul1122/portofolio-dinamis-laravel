<!-- resources/views/user/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="scroll-smooth">

    {{-- NAVBAR --}}
    <x-user-navbar/>


    {{-- Hero Section --}}
<section id="hero" class="min-h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-16 py-20 bg-[#fffceb]">
    <!-- Left: Text -->
    <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left" data-aos="fade-right" data-aos-duration="1000">
        <h1 class="text-4xl md:text-5xl font-bold text-yellow-500 mb-4"> <span class="text-black"> Hi, I'm </span><br> Ir. Asep Surahmat, M.Kom</h1>
        <p class="text-gray-700 text-lg md:text-xl mb-6">Universitas Utpadaka Swastika</p>
        <a href="https://wa.me/6285693672730" target="blank" class="btn-primary">Hub Saya</a>
    </div>

    <!-- Right: Image -->
    <div class="md:w-1/2 flex justify-center" data-aos="fade-left" data-aos-duration="1000">
        <img 
        src="{{ asset('images/Ir-Asep-Surahmat-M-Kom.jpg') }}" 
        alt="Hero Image" 
        class="w-full max-w-xs md:max-w-sm lg:max-w-[300px] rounded-lg shadow-lg"/>
    </div>
</section>


{{-- About Section --}}
<div class="text-3xl font-bold text-yellow-500 text-center" data-aos="fade-up" data-aos-duration="1000" >Tentang Saya</div>
<section id="about" class="py-20 px-4 bg-white">
    <div class="container mx-auto max-w-6xl">
        <div class="flex flex-col md:flex-row gap-10 items-start">
            {{-- CENTER --}}
            <!-- Kiri -->
            <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl font-semibold text-yellow-400 mb-4">Pencapaian</h2>
                <p class="text-gray-700 mb-4">
                    Saya adalah seorang web developer yang memiliki ketertarikan tinggi dalam pengembangan antarmuka web yang elegan dan responsif.
                </p>
                <hr class="border-t-2 border-yellow-500 w-20">
            </div>
            
            <!-- Kanan -->
            <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-2xl font-semibold text-yellow-400 mb-4">Pengalaman</h2>
                <p class="text-gray-700">
                    Telah mengerjakan berbagai proyek freelance dan magang, mulai dari sistem informasi, landing page, hingga dashboard admin menggunakan Laravel dan React.
                </p>
                <hr class="border-t-2 border-yellow-500 w-20">
            </div>
        </div>
    </div>
</section>


{{-- Skills Section --}}
<section id="skills" class="py-20 px-4 bg-[#fff9db] text-center">
    <h2 class="text-3xl font-bold text-yellow-500 mb-10">Skills</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <!-- Frontend -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="font-semibold text-xl text-yellow-500 mb-4">Front End</h3>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <x-skill-icon icon="html.png" label="HTML" />
                <x-skill-icon icon="boostrap.png" label="Bootstrap" />
                <x-skill-icon icon="tailwindcss.png" label="TailwindCSS" />
                <x-skill-icon icon="javascript.png" label="JavaScript" />
                <x-skill-icon icon="react-js.png" label="React" />
            </div>
        </div>

        <!-- Backend -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="font-semibold text-xl text-yellow-500 mb-4">Back End</h3>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <x-skill-icon icon="Laravel.png" label="Laravel" />
                <x-skill-icon icon="php.svg" label="PHP" />
                <x-skill-icon icon="mySQL.png" label="MySQL" />
                {{-- <x-skill-icon icon="nodejs.png" label="Node.js" /> --}}
            </div>
        </div>

        <!-- Tools -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="font-semibold text-xl text-yellow-500 mb-4">Tools</h3>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <x-skill-icon icon="figma.avif" label="Figma" />
                <x-skill-icon icon="github.jpeg" label="GitHub" />
                <x-skill-icon icon="vscode.png" label="VSCode" />
                {{-- <x-skill-icon icon="figma.png" label="Figma" /> --}}
            </div>
        </div>
        
    </div>
</section>



    {{-- Contact Section --}}
<section id="contact" class="py-20 px-4 bg-white text-center">
    <h2 class="text-3xl font-bold text-yellow-500 mb-6">Contact Me</h2>
    <form id="contactForm" class="max-w-xl mx-auto space-y-4">
        <input type="text" id="name" placeholder="Nama Anda" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        <input type="tel" id="phone" placeholder="No. Telepon" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        <textarea id="message" rows="4" placeholder="Pesan Anda" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
        <button type="button" onclick="sendToWhatsApp()" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
            Kirim via WhatsApp
        </button>
    </form>
</section>

<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone").value;
        const message = document.getElementById("message").value;

        if (name && phone && message) {
            const encodedMessage = encodeURIComponent(
                `Halo, saya ${name}.\nNomor HP: ${phone}\nPesan: ${message}`
            );
            const whatsappNumber = "6285693672730"; // Ganti dengan nomor WA tujuan (tanpa tanda +)
            const whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
            window.open(whatsappLink, "_blank");
        } else {
            alert("Mohon lengkapi semua kolom terlebih dahulu.");
        }
    }
</script>

    {{-- Footer --}}
    <x-user-footer/>



</body>
</html>
