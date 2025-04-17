<!-- resources/views/user/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    @vite(['resources/css/app.css'])

    {{-- STYLE --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="scroll-smooth">

    {{-- NAVBAR --}}
    <x-admin-navbar />

    {{-- TAMPILAN DASHBOARD --}}

    <section class="bg-[#fffceb] min-h-screen flex flex-col justify-center items-center px-6 py-16">
        <div class="text-center max-w-2xl" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl font-extrabold text-yellow-500 mb-4">
                Selamat Datang di Admin Page
            </h1>
            <p class="text-lg text-gray-700 mb-6">
                Di sini Anda bisa mengedit portofolio dengan mudah tanpa perlu ribet!
            </p>
    
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold text-yellow-500 mb-2">Kelola Hero Section</h3>
                    <p class="text-gray-600 mb-3">Atur tampilan utama portofolio Anda.</p>
                    <a href="{{ route('admin.hero.index') }}" class="text-blue-500 hover:underline">Mulai Edit →</a>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold text-yellow-500 mb-2">Kelola About Section</h3>
                    <p class="text-gray-600 mb-3">Edit deskripsi singkat tentang diri Anda.</p>
                    <a href="{{ route('admin.about.index') }}" class="text-blue-500 hover:underline">Mulai Edit →</a>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold text-yellow-500 mb-2">Kelola Skills</h3>
                    <p class="text-gray-600 mb-3">Tambahkan atau edit keahlian yang Anda miliki.</p>
                    <a href="{{ route('admin.skill.index') }}" class="text-blue-500 hover:underline">Mulai Edit →</a>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold text-yellow-500 mb-2">Kelola Kontak</h3>
                    <p class="text-gray-600 mb-3">Perbarui informasi kontak agar mudah dihubungi.</p>
                    <a href="{{ route('admin.contact.index') }}" class="text-blue-500 hover:underline">Mulai Edit →</a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
