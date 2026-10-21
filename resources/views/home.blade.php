<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Karhutla Kalimantan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0a0a0a;
            color: white;
            font-family: Arial, sans-serif;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .menu {
            display: flex;
            gap: 35px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .menu a:hover {
            color: #ff6b2c;
        }

        .hero {
            height: 100vh;
            min-height: 600px;
            position: relative;
            display: flex;
            align-items: center;
            padding: 0 8%;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;
            z-index: 0;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    rgba(0, 0, 0, 0.9) 0%,
                    rgba(0, 0, 0, 0.65) 45%,
                    rgba(0, 0, 0, 0.3) 100%
                );

            z-index: 1;
        }

        .hero-content {
            max-width: 650px;
            position: relative;
            z-index: 2;
        }

        .tag {
            color: #ff6b2c;
            font-size: 14px;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        h1 {
            font-size: clamp(50px, 7vw, 95px);
            line-height: 0.95;
            margin-bottom: 25px;
        }

        .hero p {
            color: #cfcfcf;
            font-size: 18px;
            line-height: 1.7;
            max-width: 570px;
            margin-bottom: 35px;
        }

        .button {
            display: inline-block;
            padding: 15px 28px;
            background: #ff5a1f;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #ff7b45;
            transform: translateY(-2px);
        }

        .scroll {
            position: absolute;
            bottom: 30px;
            left: 8%;
            color: #999;
            font-size: 12px;
            letter-spacing: 3px;
            z-index: 2;
        }

        .air-section {
            min-height: 100vh;
            padding: 160px 8%;
            background: #0a0a0a;
            position: relative;
            overflow: hidden;
        }

        .section-label {
            color: #ff6b2c;
            font-size: 13px;
            letter-spacing: 4px;
            margin-bottom: 25px;
        }

        .air-section h2 {
            font-size: clamp(40px, 6vw, 75px);
            line-height: 1;
            margin-bottom: 30px;
        }

        .air-description {
            max-width: 600px;
            color: #999;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .air-button {
            display: inline-block;
            padding: 14px 25px;
            border: 1px solid #555;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .air-button:hover {
            border-color: #ff6b2c;
            color: #ff6b2c;
        }

        .people-section {
            min-height: 85vh;
            padding: 120px 8% 120px;
            background: #0d0d0d;
        }

        .people-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 60px;
            margin-bottom: 60px;
        }

        .people-header h2 {
            font-size: clamp(40px, 6vw, 75px);
            line-height: 1;
        }

        .people-header p {
            max-width: 420px;
            color: #999;
            font-size: 16px;
            line-height: 1.8;
        }

        .person-preview {
            display: block;
            position: relative;
            height: 450px;
            text-decoration: none;
            overflow: hidden;
        }

        .person-image {
            width: 100%;
            height: 100%;

            background:
                linear-gradient(
                   90deg,
                     rgba(0, 0, 0, 0.85),
                     rgba(0, 0, 0, 0.2)
                ),
                url("https://images.pexels.com/photos/1117132/pexels-photo-1117132.jpeg")
                center/cover no-repeat;

            transition: transform 0.5s ease;
        }

        .person-preview:hover .person-image {
            transform: scale(1.03);
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                0deg,
             rgba(0, 0, 0, 0.8),
            transparent 60%
            );
        }

        .person-text {
            position: absolute;
            left: 45px;
            bottom: 40px;
            color: white;
        }

        .person-text span {
            color: #ff6b2c;
            font-size: 12px;
            letter-spacing: 4px;
        }

        .person-text h3 {
            margin-top: 12px;
            font-size: clamp(35px, 5vw, 65px);
            line-height: 0.95;
        }

        .person-arrow {
            position: absolute;
            right: 35px;
            bottom: 30px;

            width: 60px;
            height: 60px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 50%;

            color: white;
            font-size: 25px;

            transition: 0.3s;
        }

        .person-preview:hover .person-arrow {
            background: #ff6b2c;
            border-color: #ff6b2c;
        }

        /* =========================
        ANIMALS SECTION
        ========================= */

        .animals-section {
            min-height: 100vh;
            padding: 150px 8% 120px;
            background: #0a0a0a;
            color: white;
        }


        /* HEADER */

        .animals-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;

            gap: 80px;
            margin-bottom: 70px;
        }

        .animals-header h2 {
            margin: 0;

            font-size: clamp(48px, 5.5vw, 82px);
            line-height: 0.95;
            letter-spacing: -3px;
        }

        .animals-header p {
            max-width: 390px;

            margin: 0 30px 5px 0;

            color: #999;

            font-size: 15px;
            line-height: 1.8;
        }


        /* GRID */

        .animals-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }


        /* CARD */

        .animal-card {
            background: #111;

            overflow: hidden;

            border: 1px solid #1e1e1e;

            transition: transform 0.4s ease,
                        border-color 0.4s ease;
        }

        .animal-card:hover {
            transform: translateY(-6px);

            border-color: #333;
        }


        /* FOTO */

        .animal-photo {
            position: relative;

            width: 100%;
            height: 365px;

            overflow: hidden;

            background: #151515;
        }

        .animal-photo img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform 0.6s ease;
        }

        .animal-card:hover .animal-photo img {
            transform: scale(1.04);
        }


        /* NOMOR */

        .animal-number {
            position: absolute;

            top: 18px;
            right: 18px;

            color: white;

            font-size: 12px;
            letter-spacing: 2px;

            text-shadow: 0 2px 8px rgba(0,0,0,0.5);
        }


        /* INFO */

        .animal-info {
            padding: 25px;
        }

        .animal-info h3 {
            margin: 0 0 12px;

            font-size: 22px;
            font-weight: 600;
        }

        .animal-info p {
            margin: 0;

            color: #888;

            font-size: 14px;
            line-height: 1.7;
        }


        /* MOBILE */

        @media (max-width: 900px) {

            .animals-header {
                display: block;
            }

            .animals-header p {
                margin-top: 35px;
                margin-right: 0;
            }

            .animals-grid {
                grid-template-columns: 1fr;
            }

            .animal-photo {
                height: 420px;
            }

        }

        .animal-info h3 {
            font-size: 22px;
            margin-bottom: 12px;
        }

        .animal-info p {
            color: #888;
            font-size: 14px;
            line-height: 1.7;
        }

        .animal-button {
            display: inline-block;
            margin-top: 45px;
            padding: 14px 25px;

            border: 1px solid #555;
            color: white;
            text-decoration: none;

            transition: 0.3s;
        }

        .animal-button:hover {
            border-color: #ff6b2c;
            color: #ff6b2c;
        }

        .air-photo {
            position: absolute;
            right: 0;
            top: 0;

            width: 58%;
            height: 100%;

            background-image: url("/images/kondisi.jpg");
            background-size: cover;
            background-position: center;

            opacity: 0.85;
            z-index: 0;
        }

        .air-photo::after {
            content: "";
            position: absolute;
            inset: 0;

            background: linear-gradient(
                90deg,
                #0a0a0a 0%,
                rgba(10, 10, 10, 0.98) 15%,
                rgba(10, 10, 10, 0.85) 30%,
                rgba(10, 10, 10, 0.55) 50%,
                rgba(10, 10, 10, 0.2) 75%,
                rgba(10, 10, 10, 0) 100%
            );
        }

        .air-section > *:not(.air-photo) {
            position: relative;
            z-index: 1;
        }

        /* =========================
        TOKOH - BERANDA
        ========================= */

        .people-section {
            min-height: 100vh;
            padding: 150px 8% 120px;
            background: #0a0a0a;
            color: white;
        }


        /* HEADER */

        .people-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 80px;
            margin-bottom: 70px;
        }

        .people-header > div {
            max-width: 800px;
        }

        .section-label {
            display: block;
            margin-bottom: 25px;

            color: #ff5a1f;

            font-size: 13px;
            font-weight: 600;
            letter-spacing: 6px;
        }

        .people-header h2 {
            margin: 0;

            font-size: clamp(48px, 5.5vw, 82px);
            line-height: 0.95;
            font-weight: 700;
            letter-spacing: -3px;
        }

        .people-header p {
            max-width: 390px;

            margin: 0 30px 5px 0;

            color: #999;
            font-size: 15px;
            line-height: 1.8;
        }


        /* FOTO UTAMA */

        .people-feature {
            position: relative;

            width: 100%;
            height: 550px;

            overflow: hidden;

            background: #111;
        }


        .people-feature img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform 0.8s ease;
        }


        .people-feature:hover img {
            transform: scale(1.03);
        }


        /* GRADIENT GELAP */

        .people-overlay {
            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    rgba(0, 0, 0, 0.85) 0%,
                    rgba(0, 0, 0, 0.55) 35%,
                    rgba(0, 0, 0, 0.1) 70%,
                    rgba(0, 0, 0, 0.25) 100%
                );
        }


        /* TEKS DI ATAS FOTO */

        .people-text {
            position: absolute;

            left: 28px;
            bottom: 42px;

            z-index: 2;
        }


        .people-text span {
            display: block;

            margin-bottom: 18px;

            color: #ff5a1f;

            font-size: 12px;
            font-weight: 600;
            letter-spacing: 5px;
        }


        .people-text h3 {
            margin: 0;

            color: white;

            font-size: clamp(42px, 5vw, 70px);
            line-height: 0.95;
            font-weight: 700;
            letter-spacing: -2px;
        }


        /* TOMBOL PANAH */

        .people-arrow {
            position: absolute;

            right: 35px;
            bottom: 35px;

            z-index: 3;

            width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #ff5a1f;

            color: white;
            text-decoration: none;

            font-size: 27px;

            transition:
                transform 0.3s ease,
                background 0.3s ease;
        }


        .people-arrow:hover {
            transform: translateX(5px);
            background: #ff6b2c;
        }


        /* RESPONSIVE */

        @media (max-width: 800px) {

            .people-section {
                padding: 100px 6% 80px;
            }

            .people-header {
                display: block;
            }

            .people-header h2 {
                font-size: 48px;
            }

            .people-header p {
                margin-top: 35px;
                margin-right: 0;
            }

            .people-feature {
                height: 480px;
            }

            .people-text {
                left: 22px;
                bottom: 30px;
            }

            .people-arrow {
                right: 22px;
                bottom: 22px;
            }
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

        .mobile-menu {
            position: fixed;
            top: 0;
            right: 0;

            width: 280px;
            height: 100vh;

            background: #111;
            border-left: 1px solid #292929;

            z-index: 1001;

            padding: 30px;

            transform: translateX(100%);
            transition: transform 0.35s ease;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .mobile-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 60px;
        }

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


        /* =========================
        MOBILE
        ========================= */

        @media (max-width: 700px) {

            nav {
                padding: 20px 25px;
            }

            .logo {
                font-size: 24px;
            }

            /* Hilangkan navbar desktop */
            .menu {
                display: none;
            }

            /* Tampilkan tombol hamburger */
            .menu-btn {
                display: block;
            }
        }

    </style>

</head>

<body>

    <nav>
        <div class="logo">KARHUTLA</div>

        <!-- Desktop -->
        <div class="menu">
            <a href="/">Beranda</a>
            <a href="#kondisi-udara">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>

        <!-- Mobile -->
        <button class="menu-btn" onclick="openMenu()">
            ☰
        </button>
    </nav>

    <!-- SIDEBAR MOBILE -->
    <div class="mobile-menu" id="mobileMenu">

        <button class="close-menu" onclick="closeMenu()">
            ×
        </button>

        <div class="mobile-logo">
            KARHUTLA
        </div>

        <div class="mobile-links">
            <a href="/">Beranda</a>
            <a href="#kondisi-udara">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>

    </div>

    <!-- OVERLAY -->
    <div
        class="menu-overlay"
        id="menuOverlay"
        onclick="closeMenu()">
    </div>    

    <section class="hero">

        <video
            class="hero-video"
            autoplay
            muted
            loop
            playsinline>
            <source src="{{ asset('videos/karhutla.mp4') }}" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <div class="tag">
                Kalimantan • Lingkungan
            </div>

            <h1>
                Ketika<br>
                Hutan<br>
                Terbakar.
            </h1>

            <p>
                Mengenal kebakaran hutan dan lahan,
                dampaknya bagi lingkungan dan masyarakat,
                serta pentingnya menjaga hutan Kalimantan.
            </p>

            <a href="#kondisi-udara" class="button">
                Jelajahi Informasi →
            </a>
    
        </div>

        <div class="scroll">
            SCROLL UNTUK MENJELAJAH
        </div>

    </section>

    <section class="air-section" id="kondisi-udara">

        <div class="air-photo"></div>

        <div class="section-label">
            KONDISI LINGKUNGAN
        </div>

        <h2>
            Bagaimana kondisi<br>
            udara hari ini?
        </h2>

        <p class="air-description">
            Pantau kualitas udara dan kondisi lingkungan
            sebagai salah satu gambaran dampak kebakaran
            hutan dan lahan.
        </p>

        <a href="https://www.bmkg.go.id/kualitas-udara/pm25"
        class="air-button"
        target="_blank"
        rel="noopener noreferrer">
            Lihat kondisi udara →
        </a>

    </section>

<section class="people-section">

    <div class="people-header">
        <div>
            <span class="section-label">MEREKA YANG BERJASA</span>

            <h2>
                Mereka yang<br>
                berdiri di garis depan.
            </h2>
        </div>

        <p>
            Di balik upaya memadamkan kebakaran hutan, ada
            petugas dan relawan yang mempertaruhkan tenaga
            mereka untuk melindungi hutan dan masyarakat.
        </p>
    </div>


    <div class="people-feature">

        <img
            src="{{ asset('images/pemadam.jpg') }}"
            alt="Petugas pemadam kebakaran"
        >

        <div class="people-overlay"></div>

        <div class="people-text">
            <span>PENGHORMATAN</span>

            <h3>
                Para penjaga<br>
                hutan.
            </h3>
        </div>

        <a href="{{ route('tokoh') }}" class="people-arrow">
            →
        </a>

    </div>

</section>

    <section class="animals-section">

        <div class="animals-header">

            <div>
                <span class="section-label">MEREKA YANG TERDAMPAK</span>

                <h2>
                    Mereka juga<br>
                    kehilangan rumah.
                </h2>
            </div>

            <p>
                Kebakaran hutan dan lahan tidak hanya berdampak pada
                manusia. Satwa liar juga dapat kehilangan habitat dan
                sumber makanan akibat kerusakan hutan.
            </p>

        </div>


        <div class="animals-grid">

            <!-- KUCING HUTAN KALIMANTAN -->

            <div class="animal-card">

                <div class="animal-photo">

                    <img
                        src="{{ asset('images/miaw.jpeg') }}"
                        alt="Kucing hutan Kalimantan"
                    >

                    <span class="animal-number">01</span>

                </div>

                <div class="animal-info">

                    <h3>Kucing Hutan Kalimantan</h3>

                    <p>
                        Seekor anak kucing kuwuk atau kucing hutan Kalimantan (Prionailurus bengalensis) berhasil menyelamatkan diri dari kebakaran hutan dan lahan (karhutla) di Kalimantan pada awal September 2026, namun, induk serta saudara-saudaranya tidak berhasil lolos dari kepungan api.
                    </p>

                </div>

            </div>


            <!-- Landak -->

            <div class="animal-card">

                <div class="animal-photo">

                    <img
                        src="{{ asset('images/landak.jpeg') }}"
                        alt="Landak"
                    >

                    <span class="animal-number">02</span>

                </div>

                <div class="animal-info">

                    <h3>Landak hutan ditemukan mati terbakar</h3>

                    <p>
                        Seekor landak hutan ditemukan mati mengenaskan dengan luka bakar parah akibat kebakaran hutan dan lahan (karhutla) di kawasan Taman Hutan Raya (Tahura) Kilometer 47, Samboja, Kalimantan Timur.
                    </p>

                </div>

            </div>


            <!-- Ular -->

            <div class="animal-card">

                <div class="animal-photo">

                    <img
                        src="{{ asset('images/ular.jpeg') }}"
                        alt="Ular"
                    >

                    <span class="animal-number">03</span>

                </div>

                <div class="animal-info">

                    <h3>Induk ular yang melindungi anaknya</h3>

                    <p>
                        Seekor induk ular ditemukan mati terpanggang dalam kondisi masih melingkari dan melindungi telur-telurnya di tengah bencana kebakaran hutan dan lahan.
                    </p>

                </div>

            </div>

        </div>

    </section>

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

</body>
</html>