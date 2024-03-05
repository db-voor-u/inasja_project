import './bootstrap';
import'./components/navigation';


function toggleMenu() {
    const menuContent = document.getElementById('menu-content');
    const menuIcon = document.getElementById('menu-close-icon');

    menuContent.classList.toggle('hidden');
    menuIcon.style.display = menuIcon.style.display === 'none' ? 'block' : 'none';
}

window.toggleMenu = toggleMenu;
