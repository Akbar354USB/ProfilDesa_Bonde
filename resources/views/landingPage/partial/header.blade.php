<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="{{ asset('backend/assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="#">Beranda</a></li>
                            <li><a href="#">Profil Desa</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('lpvisi') }}">Visi Misi</a></li>
                                    <li><a href="{{ route('lpsejarah') }}">Sejarah</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pemerintahan</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('lpstruktur') }}">Struktur Organisasi</a></li>
                                    <li><a href="{{ route('lpperangkat') }}">Perangkat Desa</a></li>
                                    <li><a href="about.html">Lembaga Desa</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">Informasi</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">Pengumuman</a></li>
                                    <li><a href="single-news.html">Galeri</a></li>
                                    <li><a href="{{ route('lpberita') }}">Berita Desa</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">Aset & Sarpras</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('lppotensi') }}">Potensi Desa</a></li>
                                    <li><a href="news.html">Sarana Pendidikan</a></li>
                                    <li><a href="news.html">Sarana Prasarana Desa</a> </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Login</a></li>
                            <li>
                                <div class="header-icons">
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>