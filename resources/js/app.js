import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// ハンバーガーメニューのトグル機能
window.toggleMenu = () => {  // 🔽 window に登録
  const navLinks = document.getElementById("nav-links");
  if (navLinks) {
    navLinks.classList.toggle("show");
  }
};
