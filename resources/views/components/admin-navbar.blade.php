<nav class="bg-yellow-500 p-4 shadow-md text-white flex justify-between items-center">
    <a href="{{ route('admin.dashboard') }}">
        <h1 class="text-xl font-bold">Admin Panel</h1>
    </a>
    <ul class="flex space-x-6">
        <li><a href="{{ route('admin.hero.index') }}" class="hover:underline">Hero</a></li>
        <li><a href="{{ route('admin.about.index') }}" class="hover:underline">About</a></li>
        <li><a href="{{ route('admin.skill.index') }}" class="hover:underline">Skill</a></li>
        <li><a href="{{ route('admin.contact.index') }}" class="hover:underline">Contact</a></li>
    </ul>
</nav>
