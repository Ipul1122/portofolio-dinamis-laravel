// resources/js/navbar.js

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        if (menu.classList.contains('max-h-0')) {
            menu.classList.remove('max-h-0');
            menu.classList.add('max-h-96');
        } else {
            menu.classList.remove('max-h-96');
            menu.classList.add('max-h-0');
        }
    });
});
