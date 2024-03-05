function toggleMenu() {
    const menuContent = document.getElementById('menu-content');
    const menuOpenIcon = document.getElementById('menu-open-icon');
    const menuCloseIcon = document.getElementById('menu-close-icon');
    const menuText = document.getElementById('menu-text');

    if (menuContent.classList.contains('hidden')) {
        menuContent.classList.remove('hidden');
        menuOpenIcon.classList.remove('hidden');
        menuCloseIcon.classList.add('hidden');
        menuText.textContent = 'sluiten';
    } else {
        menuContent.classList.add('hidden');
        menuOpenIcon.classList.add('hidden');
        menuCloseIcon.classList.remove('hidden');
        menuText.textContent = 'menu';
    }
}

window.toggleMenu = toggleMenu;
