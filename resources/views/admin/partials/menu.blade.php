<div class="app-menu">
    <a href="{{ route('admin.dashboard') }}" class="logo-box flex items-center gap-2 px-2">
        <img src="{{ asset('img/logo/nuris-logo.png') }}" class="h-8 w-auto dark:hidden" alt="Logo Nuris" style="max-height: 32px; object-fit: contain;">
        <img src="{{ asset('img/logo/nuris-logo.png') }}" class="h-8 w-auto hidden dark:block" alt="Logo Nuris" style="max-height: 32px; object-fit: contain;">
        <span class="text-base font-semibold text-gray-800 dark:text-gray-200 whitespace-nowrap">Admin Nuris</span>
    </a>

    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-xl p-2 bg-white/20 hover:bg-white/30 transition-all duration-300 z-10 hidden lg:block" style="border-radius: 12px;">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="mgc_round_line text-xl text-white"></i>
    </button>
    
    <!-- Mobile Close Button -->
    <button id="button-close-menu" class="absolute top-5 end-2 rounded-xl p-2 bg-white/20 hover:bg-white/30 transition-all duration-300 z-10 lg:hidden" style="border-radius: 12px; display: none;">
        <span class="sr-only">Close Menu</span>
        <i class="mgc_close_line text-xl text-white"></i>
    </button>

    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <!-- Konten Website -->
            <li class="menu-title">
                <span>Konten Website</span>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.pages') }}" class="menu-link {{ request()->routeIs('admin.pages*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_file_text_line"></i></span>
                    <span class="menu-text">Halaman</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.menus') }}" class="menu-link {{ request()->routeIs('admin.menus*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_menu_line"></i></span>
                    <span class="menu-text">Menu Website</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.slideshows') }}" class="menu-link {{ request()->routeIs('admin.slideshows*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_image_line"></i></span>
                    <span class="menu-text">Slideshow</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.unit-khidmah.index') }}" class="menu-link {{ request()->routeIs('admin.unit-khidmah*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_building_2_line"></i></span>
                    <span class="menu-text">Unit Khidmah</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.program-unggulan.index') }}" class="menu-link {{ request()->routeIs('admin.program-unggulan*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_star_line"></i></span>
                    <span class="menu-text">Program Unggulan</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.galleries.index') }}" class="menu-link {{ request()->routeIs('admin.galleries*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_image_line"></i></span>
                    <span class="menu-text">Gallery</span>
                </a>
            </li>

            <!-- Publikasi -->
            <li class="menu-title">
                <span>Publikasi</span>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.articles') }}" class="menu-link {{ request()->routeIs('admin.articles*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_newspaper_line"></i></span>
                    <span class="menu-text">Berita & Artikel</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.events') }}" class="menu-link {{ request()->routeIs('admin.events*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                    <span class="menu-text">Event & Kegiatan</span>
                </a>
            </li>

            <!-- Struktur Organisasi -->
            <li class="menu-title">
                <span>Struktur Organisasi</span>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.pengurus-yayasan') }}" class="menu-link {{ request()->routeIs('admin.pengurus-yayasan*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_user_line"></i></span>
                    <span class="menu-text">Pengurus Yayasan</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.pengurus-pesantren') }}" class="menu-link {{ request()->routeIs('admin.pengurus-pesantren*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_user_line"></i></span>
                    <span class="menu-text">Pengurus Pesantren</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.pengurus-dewan-pusat') }}" class="menu-link {{ request()->routeIs('admin.pengurus-dewan-pusat*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_user_line"></i></span>
                    <span class="menu-text">Pengurus Dewan Pusat</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.pengurus-unit') }}" class="menu-link {{ request()->routeIs('admin.pengurus-unit*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_user_line"></i></span>
                    <span class="menu-text">Pengurus Unit</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.staff') }}" class="menu-link {{ request()->routeIs('admin.staff*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                    <span class="menu-text">Guru & Karyawan</span>
                </a>
            </li>

            <!-- Fasilitas & Jadwal -->
            <li class="menu-title">
                <span>Fasilitas & Jadwal</span>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.facilities') }}" class="menu-link {{ request()->routeIs('admin.facilities*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_building_line"></i></span>
                    <span class="menu-text">Fasilitas</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.schedules') }}" class="menu-link {{ request()->routeIs('admin.schedules*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_calendar_2_line"></i></span>
                    <span class="menu-text">Jadwal Yaumiyah</span>
                </a>
            </li>

            <!-- Pengaturan -->
            @if(auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
            <li class="menu-title">
                <span>Pengaturan</span>
            </li>

            <li class="menu-item">
                <a href="{{ route('admin.site-settings') }}" class="menu-link {{ request()->routeIs('admin.site-settings*') ? 'active' : '' }}">
                    <span class="menu-icon"><i class="mgc_settings_3_line"></i></span>
                    <span class="menu-text">Pengaturan Situs</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                    <span class="menu-text">Pengguna</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link">
                            <span class="menu-text">Daftar Pengguna</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            <!-- Lihat Website -->
            <li class="menu-item mt-auto">
                <a href="{{ route('pages.index') }}" target="_blank" class="menu-link">
                    <span class="menu-icon"><i class="mgc_external_link_line"></i></span>
                    <span class="menu-text">Lihat Website</span>
                </a>
            </li>
        </ul>
    </div>
</div>

