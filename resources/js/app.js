import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ハンバーガーメニューのトグル機能
function toggleMenu() {
  const navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");  // showクラスをトグルしてメニュー表示/非表示を切り替え
}
