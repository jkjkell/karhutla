<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tokoh yang Berjasa — Karhutla Kalimantan</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #080808;
            color: #fff;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        /* NAVBAR */
        nav {
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 80px;
            position: relative;
            z-index: 10;
            background: #080808;
        }

        .logo {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 45px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        .nav-links a:hover {
            color: #ff5a1f;
        }

        /* HEADER */
        .tokoh-header {
            padding: 90px 80px 50px;
        }

        .eyebrow {
            color: #ff5a1f;
            letter-spacing: 6px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .tokoh-header h1 {
            font-size: clamp(50px, 7vw, 100px);
            line-height: 0.95;
            max-width: 850px;
            margin-bottom: 30px;
        }

        .tokoh-header p {
            color: #aaa;
            font-size: 18px;
            line-height: 1.7;
            max-width: 650px;
        }

        .header-content {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 50px;
        }

        .header-text {
            max-width: 850px;
        }

        .add-news-btn,
        .admin-news-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            height: 50px;
            padding: 0 24px;

            box-sizing: border-box;
            border-radius: 6px;

            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .add-news-btn {
            border: 1px solid #444;
            color: white;
            background: transparent;
        }

        .admin-news-btn {
            border: 1px solid #ff6b2c;
            color: #ff6b2c;
            background: transparent;
        }
        
        /* CARD AREA */

        .carousel-wrapper {
            width: 100%;
            overflow: hidden;
            padding: 40px 0 100px;

            -webkit-mask-image: linear-gradient(
                to right,
                transparent 0%,
                black 8%,
                black 92%,
                transparent 100%
            );

            mask-image: linear-gradient(
                to right,
                transparent 0%,
                black 8%,
                black 92%,
                transparent 100%
            );
        }

        .carousel {
            display: flex;
            gap: 25px;
            width: max-content;

            animation: berjalan 35s linear infinite;
            will-change: transform;
        }

        .carousel:hover {
            animation-play-state: paused;
        }

        @keyframes berjalan {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* CARD */
        .tokoh-card {
            width: 330px;
            background: #111;
            border: 1px solid #252525;
            flex-shrink: 0;
            transition: 0.4s ease;
        }

        .tokoh-card:hover {
            transform: translateY(-8px);
            border-color: #ff5a1f;
            box-shadow: 0 15px 50px rgba(255, 90, 31, 0.15);
        }

        /* FOTO */
        .tokoh-photo {
            width: 100%;
            height: 400px;
            overflow: hidden;
            background: #222;
        }

        .tokoh-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .tokoh-card:hover .tokoh-photo img {
            filter: grayscale(0%);
            transform: scale(1.04);
        }

        /* INFO */
        .tokoh-info {
            padding: 25px;
        }

        .tokoh-info h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .tokoh-info p {
            color: #999;
            line-height: 1.6;
            font-size: 15px;
            min-height: 72px;
        }

        /* MORE INFO */
        .more-info {
            margin-top: 25px;
            padding-top: 18px;
            border-top: 1px solid #333;

            display: flex;
            align-items: center;
            justify-content: space-between;

            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .more-info:hover {
            color: #ff5a1f;
        }

        .source-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {

            /* NAVBAR */
            nav {
                height: auto;
                min-height: 75px;
                padding: 20px 20px;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .logo {
                font-size: 25px;
            }

            .nav-links {
                width: 100%;
                display: flex;
                justify-content: space-between;
                gap: 8px;
            }

            .nav-links a {
                font-size: 12px;
                white-space: nowrap;
            }


            /* HEADER */
            .tokoh-header {
                padding: 55px 20px 35px;
            }

            .header-content {
                display: block;
            }

            .header-text {
                max-width: 100%;
            }

            .eyebrow {
                font-size: 11px;
                letter-spacing: 4px;
                margin-bottom: 15px;
            }

            .tokoh-header h1 {
                font-size: clamp(48px, 15vw, 70px);
                line-height: 0.95;
                margin-bottom: 22px;
            }

            .tokoh-header p {
                font-size: 15px;
                line-height: 1.6;
                max-width: 100%;
            }


            /* TOMBOL */
            .header-buttons {
                margin-top: 30px;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .add-news-btn,
            .admin-news-btn {
                width: 100%;
                height: 48px;
                font-size: 11px;
            }


            /* CAROUSEL */
            .carousel-wrapper {
                padding: 25px 0 70px;
            }

            .carousel {
                gap: 15px;
                animation-duration: 30s;
            }


            /* CARD */
            .tokoh-card {
                width: 260px;
            }

            .tokoh-photo {
                height: 320px;
            }

            .tokoh-info {
                padding: 20px;
            }

            .tokoh-info h2 {
                font-size: 20px;
                margin-bottom: 12px;
            }

            .tokoh-info p {
                font-size: 14px;
                line-height: 1.6;
                min-height: 68px;
            }


            /* MORE INFO */
            .more-info {
                margin-top: 20px;
                padding-top: 15px;
                font-size: 12px;
            }

            .source-icon {
                width: 28px;
                height: 28px;
                font-size: 17px;
            }


            /* HAPUS */
            .delete-btn {
                min-height: 42px;
                font-size: 10px;
            }


            /* MODAL */
            .modal-box {
                width: calc(100% - 35px);
                padding: 30px 25px;
            }

            .modal-box h2 {
                font-size: 32px;
            }

            .modal-box p {
                font-size: 14px;
            }

            .modal-box input {
                padding: 13px;
            }
        }

        /* MODAL */

        .modal {
            position: fixed;
            inset: 0;

            display: none;
            align-items: center;
            justify-content: center;

            background: rgba(0, 0, 0, 0.75);

            z-index: 100;
        }

        .modal.active {
            display: flex;
        }

        .modal-box {
            position: relative;

            width: min(90%, 450px);

            padding: 45px;

            background: #111;
            border: 1px solid #333;

            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.6);
        }

        .modal-box h2 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .modal-box p {
            color: #999;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 20px;

            background: none;
            border: none;

            color: #aaa;
            font-size: 30px;

            cursor: pointer;
        }

        .modal-close:hover {
            color: #ff5a1f;
        }

        .modal-box input {
            width: 100%;

            padding: 15px;
            margin-bottom: 12px;

            background: #080808;

            border: 1px solid #333;

            color: white;
            outline: none;
        }

        .modal-box input:focus {
            border-color: #ff5a1f;
        }

        .register-submit {
            width: 100%;

            padding: 15px;

            margin-top: 10px;

            background: #ff5a1f;
            color: white;

            border: none;

            font-weight: bold;
            cursor: pointer;
        }

        .login-link {
            margin-top: 25px;

            text-align: center;

            color: #777;
            font-size: 14px;
        }

        .login-link a {
            color: white;
            text-decoration: none;
        }

        .login-link a:hover {
            color: #ff5a1f;
        }

        .delete-btn {
            width: 100%;
            padding: 11px 15px;

            background: transparent;
            border: 1px solid #552222;

            color: #ff6b6b;

            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;

            cursor: pointer;
            transition: 0.3s ease;
        }

        .delete-btn:hover {
            background: #552222;
            color: white;
        }

        .header-buttons {
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        /* =========================
        MOBILE SIDEBAR
        ========================= */

        .menu-btn {
            display: none;

            background: none;
            border: none;
            color: white;

            font-size: 24px;
            cursor: pointer;
        }

        /* SIDEBAR HP */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;

            width: 280px;
            height: 100vh;

            background: #111;
            border-right: 1px solid #292929;

            z-index: 1001;

            padding: 30px;

            transform: translateX(-100%);
            transition: transform 0.35s ease;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        /* OVERLAY */
        .menu-overlay {
            position: fixed;
            inset: 0;

            background: rgba(0, 0, 0, 0.65);

            z-index: 1000;

            display: none;
        }

        .menu-overlay.active {
            display: block;
        }

        /* LOGO SIDEBAR */
        .mobile-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 60px;
        }

        /* LINK SIDEBAR */
        .mobile-links {
            display: flex;
            flex-direction: column;
            gap: 28px;
        }

        .mobile-links a {
            color: white;
            text-decoration: none;

            font-size: 18px;
            font-weight: 600;

            padding-bottom: 15px;
            border-bottom: 1px solid #292929;
        }

        .mobile-links a:hover {
            color: #ff5a1f;
        }

        /* TOMBOL X */
        .close-menu {
            position: absolute;
            top: 25px;
            right: 25px;

            background: none;
            border: none;

            color: #aaa;
            font-size: 24px;

            cursor: pointer;
        }

        .close-menu:hover {
            color: #ff5a1f;
        }


        /* =========================
        HP
        ========================= */

        @media (max-width: 700px) {

            nav {
                height: 75px;
                padding: 0 25px;
            }

            .logo {
                font-size: 24px;
            }

            /* Hilangkan navbar desktop */
            .nav-links {
                display: none;
            }

            /* Tampilkan hamburger */
            .menu-btn {
                display: block;
            }

            .tokoh-header {
                padding: 55px 25px 30px;
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 30px;
            }

            .tokoh-header h1 {
                font-size: 55px;
            }

            .tokoh-header p {
                font-size: 16px;
            }

            .header-buttons {
                width: 100%;
                flex-direction: column;
                align-items: stretch;
            }

            .add-news-btn,
            .admin-news-btn {
                width: 100%;
            }

            .tokoh-card {
                width: 280px;
            }

            .tokoh-photo {
                height: 340px;
            }
        }

    </style>
</head>

<body>

    <nav>
        <div class="logo">KARHUTLA</div>

        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/#kondisi-udara">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>

        <button class="menu-btn" onclick="openMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div class="mobile-menu" id="mobileMenu">

        <button class="close-menu" onclick="closeMenu()">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="mobile-logo">KARHUTLA</div>

        <div class="mobile-links">
            <a href="/">Beranda</a>
            <a href="/#kondisi-udara">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>

    </div>

    <div class="menu-overlay" id="menuOverlay" onclick="closeMenu()"></div>


    <!-- HEADER -->
    <section class="tokoh-header">

        <div class="header-content">

            <div class="header-text">

                <div class="eyebrow">
                    MEREKA YANG BERGERAK
                </div>

                <h1>
                    Tokoh yang<br>
                    berjasa.
                </h1>

                <p>
                    Mengenal orang-orang yang berperan dalam menjaga hutan,
                    mencegah kebakaran, dan melindungi lingkungan.
                </p>

            </div>

            <div class="header-buttons">

                <a href="{{ route('tokoh.create') }}" class="add-news-btn">
                    + TAMBAH BERITA
                </a>

                @if (auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('tokoh.review') }}" class="admin-news-btn">
                        KELOLA BERITA
                    </a>
                @endif

            </div>

        </div>

    </section>


    <!-- CARD CAROUSEL -->

<div class="carousel" id="carousel">

    @foreach ($tokoh as $item)

        <div class="tokoh-card">

            <div class="tokoh-photo">
                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}">
            </div>

            <div class="tokoh-info">

                <h2>{{ $item->nama }}</h2>

                <p>
                    {{ $item->deskripsi }}
                </p>

                <a href="{{ $item->link }}" class="more-info" target="_blank">
                    MORE INFO

                    <span class="source-icon">
                        @if (strtolower($item->sumber) === 'pinterest')
                            <i class="fa-brands fa-pinterest" style="color:#E60023;"></i>

                        @elseif (strtolower($item->sumber) === 'tiktok')
                            <i class="fa-brands fa-tiktok"></i>

                        @elseif (strtolower($item->sumber) === 'instagram')
                            <i class="fa-brands fa-instagram" style="color:#E1306C;"></i>

                        @elseif (strtolower($item->sumber) === 'facebook')
                            <i class="fa-brands fa-facebook" style="color:#1877F2;"></i>

                        @else
                            <i class="fa-solid fa-circle-info"></i>
                        @endif
                    </span>
                </a>

                {{-- TOMBOL HAPUS KHUSUS ADMIN --}}
                @if (auth()->check() && auth()->user()->role === 'admin')
                    <form
                        action="{{ route('tokoh.destroy', $item->id) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                        style="margin-top: 15px;"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-btn">
                            HAPUS BERITA
                        </button>
                    </form>
                @endif

            </div>

        </div>

    @endforeach

<script>
    function openMenu() {
        document.getElementById('mobileMenu').classList.add('active');
        document.getElementById('menuOverlay').classList.add('active');
    }

    function closeMenu() {
        document.getElementById('mobileMenu').classList.remove('active');
        document.getElementById('menuOverlay').classList.remove('active');
    }
</script>

</div>       
</body>
</html>