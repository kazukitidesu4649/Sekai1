<header>
    <div class="logo">
        <a href="{{ url('/top') }}">Sekai1</a> <!-- ロゴリンク -->
    </div>

    <!-- ハンバーガーメニューのボタン -->
    <div class="hamburger-menu" id="hamburger-menu">
        <button onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>

    <!-- ナビゲーションメニュー -->
    <nav class="nav-links" id="nav-links">
        <ul>
            <li><a href="{{ route('top') }}">top</a></li>
            <li><a>About</a></li>
            <li><a>Product</a></li>
            <li><a>Contact</a></li>
        </ul>
    </nav>
</header>
