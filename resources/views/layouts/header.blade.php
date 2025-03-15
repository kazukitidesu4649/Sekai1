<header class="bg-gray-900 text-white py-4 ">
        <!-- ロゴとタイトル -->
            <div class="flex items-center gap-2 flex-col">
                <a href="{{ url('/top') }}" class="flex items-center">
                    <img src="{{ asset('images/Sekai1_header_title.png') }}" alt="Sekai1 ロゴ">
                    <span class="text-xl font-bold tracking-wide"></span>
                </a>
            </div>
        <div class="header__inner">
            <button id="js-hamburger" type="button" class="hamburger" aria-controls="navigation" aria-expanded="false" aria-label="メニューを開く">
                <span class="hamburger__line"></span>
                <span class="hamburger__text"></span>
            </button>
            <div class="header__nav-area js-nav-area" id="navigation">
                <nav id="js-global-navigation" class="global-navigation">
                    <ul class="global-navigation__list">
                        <li>
                            <a href="{{ route('top') }}" class="global-navigation__link">
                            top
                            </a>
                        </li>
                        <li>
                            <a href="#" class="global-navigation__link">
                            about
                            </a>
                        </li> 
                        <li>
                            <a href="{{ route('product.index') }}" class="global-navigation__link">
                            product
                            </a>
                        </li> 
                        <li>
                            <a href="{{ route('contacts.create') }}" class="global-navigation__link">
                            contact
                            </a>
                        </li> 
                    </ul>
                    <div id="js-focus-trap" tabindex="0"></div>
                </nav>
            </div>
        </div>
</header>

            <!-- ハンバーガーメニュー増築案
            <li>
                <button type="button" class="global-navigation__link -accordion js-sp-accordion-trigger" aria-expanded = 'false' aria-controls="accordion1">
                親メニュー
                </button>
                <div id="accordion1" class="accordion js-accordion">
                    <ul class="accordion__list">
                    <li>
                        <a href="#" class="accordion__link">
                        子メニュー
                        </a>
                    </li>
                        <li>
                        <a href="#" class="accordion__link">
                        子メニュー
                        </a>
                    </li>
                        <li>
                        <a href="#" class="accordion__link">
                        子メニュー
                        </a>
                    </li>
                    </ul>
                </div>
            </li> -->