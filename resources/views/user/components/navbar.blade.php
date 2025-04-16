<!-- resources/views/user/components/navbar.blade.php -->
<nav class="fixed w-full z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="text-xl font-bold text-yellow-500">MyPortfolio</div>
            
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 font-medium text-gray-800">
                <li><a href="#hero" class="hover:text-yellow-500">Home</a></li>
                <li><a href="#about" class="hover:text-yellow-500">About</a></li>
                <li><a href="#skills" class="hover:text-yellow-500">Skills</a></li>
                <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
            </ul>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button id="hamburger-btn" class="focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
        <ul class="flex flex-col space-y-4 px-4 py-6 bg-white font-medium text-gray-800">
            <li><a href="#hero" class="hover:text-yellow-500">Home</a></li>
            <li><a href="#about" class="hover:text-yellow-500">About</a></li>
            <li><a href="#skills" class="hover:text-yellow-500">Skills</a></li>
            <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
        </ul>
    </div>
</nav>
