<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profilku — Karhutla Kalimantan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #080808;
            color: white;
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
            background: #080808;
            border-bottom: 1px solid #222;
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 45px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .nav-links a:hover {
            color: #ff5a1f;
        }

        .profile-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* HERO */

        .profile-hero {
            min-height: 75vh;
            padding: 100px 80px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 80px;
        }

        .hero-text {
            max-width: 750px;
        }

        .eyebrow {
            color: #ff5a1f;
            font-size: 13px;
            letter-spacing: 5px;
            margin-bottom: 25px;
        }

        .hero-text h1 {
            font-size: clamp(55px, 8vw, 105px);
            line-height: 0.95;
            margin-bottom: 30px;
        }

        .hero-text h1 span {
            color: #ff5a1f;
        }

        .hero-text .subtitle {
            color: #aaa;
            font-size: 20px;
            line-height: 1.7;
            max-width: 650px;
        }


        /* PROFILE BOX */

        .profile-box {
            width: 320px;
            height: 400px;

            background: #111;
            border: 1px solid #292929;

            display: flex;
            align-items: center;
            justify-content: center;

            position: relative;
        }

        .profile-box::before {
            content: "";
            position: absolute;

            width: 100%;
            height: 100%;

            border: 1px solid #ff5a1f;

            top: 15px;
            left: 15px;

            z-index: -1;
        }

        .profile-placeholder {
            text-align: center;
            color: #555;
        }

        .profile-placeholder .icon {
            font-size: 70px;
            margin-bottom: 15px;
            color: #ff5a1f;
        }

        .profile-placeholder p {
            font-size: 13px;
            letter-spacing: 2px;
        }


        /* ABOUT */

        .section {
            padding: 100px 80px;
            border-top: 1px solid #1f1f1f;
        }

        .section-label {
            color: #ff5a1f;
            font-size: 12px;
            letter-spacing: 5px;
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: clamp(40px, 5vw, 65px);
            margin-bottom: 35px;
        }

        .about-text {
            max-width: 850px;
            color: #999;
            font-size: 18px;
            line-height: 1.9;
        }


        /* INFO */

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .info-card {
            background: #111;
            border: 1px solid #252525;
            padding: 30px;

            min-height: 150px;

            transition: 0.3s ease;
        }

        .info-card:hover {
            border-color: #ff5a1f;
            transform: translateY(-5px);
        }

        .info-card small {
            display: block;

            color: #666;
            font-size: 11px;
            letter-spacing: 3px;

            margin-bottom: 15px;
        }

        .info-card h3 {
            font-size: 20px;
        }


        /* SKILLS */

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .skill {
            padding: 15px 20px;

            background: #111;
            border: 1px solid #292929;

            color: #ccc;
            font-size: 14px;

            transition: 0.3s ease;
        }

        .skill:hover {
            border-color: #ff5a1f;
            color: white;
        }


        /* PROJECT */

        .project-card {
            background: #111;
            border: 1px solid #292929;

            padding: 40px;

            max-width: 1000px;
        }

        .project-number {
            color: #ff5a1f;
            font-size: 13px;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .project-card h3 {
            font-size: 38px;
            margin-bottom: 20px;
        }

        .project-card p {
            color: #999;
            font-size: 17px;
            line-height: 1.8;
            max-width: 800px;
        }

        .tech {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 25px;
        }

        .tech span {
            padding: 8px 12px;

            border: 1px solid #333;

            color: #aaa;
            font-size: 12px;
        }


        /* PKL */

        .experience {
            max-width: 900px;
        }

        .experience h3 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .experience .place {
            color: #ff5a1f;
            margin-bottom: 20px;
        }

        .experience p {
            color: #999;
            line-height: 1.8;
            font-size: 17px;
        }


        /* FOOTER */

        footer {
            padding: 60px 80px;

            border-top: 1px solid #222;

            color: #666;
            font-size: 13px;
        }


        /* RESPONSIVE */

        @media (max-width: 800px) {

            nav {
                padding: 0 25px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .profile-hero {
                padding: 70px 25px;
                flex-direction: column;
                align-items: flex-start;
            }

            .profile-box {
                width: 100%;
                max-width: 320px;
            }

            .section {
                padding: 70px 25px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            footer {
                padding: 40px 25px;
            }
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav>

        <div class="logo">
            KARHUTLA
        </div>

        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/informasi">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>

    </nav>


    <!-- HERO -->

    <section class="profile-hero">

        <div class="hero-text">

            <div class="eyebrow">
                PROFIL
            </div>

            <h1>
                Halo,<br>
                aku <span>Mecca.</span>
            </h1>

            <p class="subtitle">
                Siswi Teknik Komputer dan Jaringan yang sedang
                belajar membangun website, jaringan, dan teknologi server.
            </p>

        </div>


        <div class="profile-box">

            <img
                src="{{ asset('/images/mecca.jpeg') }}"
                alt="Foto profil"
                class="profile-photo"
            >

        </div>

    </section>


    <!-- TENTANG SAYA -->

    <section class="section">

        <div class="section-label">
            TENTANG SAYA
        </div>

        <h2>
            Belajar teknologi,<br>
            membangun sesuatu.
        </h2>

        <p class="about-text">
            Saya merupakan siswi jurusan Teknik Komputer dan Jaringan
            yang tertarik pada dunia teknologi, khususnya pengembangan
            website, jaringan komputer, dan pengelolaan server.
            Melalui kegiatan PKL, saya belajar menerapkan ilmu yang
            dipelajari di sekolah ke dalam proyek nyata.
        </p>

    </section>


    <!-- DATA DIRI -->

    <section class="section">

        <div class="section-label">
            INFORMASI
        </div>

        <h2>
            Tentang saya.
        </h2>

        <div class="info-grid">

            <div class="info-card">
                <small>NAMA</small>
                <h3>Mecca</h3>
            </div>

            <div class="info-card">
                <small>JURUSAN</small>
                <h3>Teknik Komputer dan Jaringan</h3>
            </div>

            <div class="info-card">
                <small>STATUS</small>
                <h3>Pelajar / PKL</h3>
            </div>

        </div>

    </section>


    <!-- SKILL -->

    <section class="section">

        <div class="section-label">
            KEMAMPUAN
        </div>

        <h2>
            Yang sedang<br>
            saya pelajari.
        </h2>

        <div class="skills">

            <div class="skill">HTML</div>
            <div class="skill">CSS</div>
            <div class="skill">JavaScript</div>
            <div class="skill">PHP</div>
            <div class="skill">Laravel</div>
            <div class="skill">MySQL</div>
            <div class="skill">Debian 12</div>
            <div class="skill">Networking</div>
            <div class="skill">DNS</div>
            <div class="skill">Git & GitHub</div>

        </div>

    </section>


    <!-- PROJECT -->

    <section class="section">

        <div class="section-label">
            PROJECT
        </div>

        <div class="project-card">

            <div class="project-number">
                01 / WEBSITE
            </div>

            <h3>
                Karhutla Kalimantan
            </h3>

            <p>
                Website edukasi mengenai kebakaran hutan dan lahan
                di Kalimantan. Website ini membahas kondisi lingkungan,
                tokoh yang berjasa dalam penanganan kebakaran, serta
                dampaknya terhadap satwa.
            </p>

            <div class="tech">
                <span>Laravel</span>
                <span>PHP</span>
                <span>MySQL</span>
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
            </div>

        </div>

    </section>


    <!-- PENGALAMAN PKL -->

    <section class="section">

        <div class="section-label">
            PENGALAMAN
        </div>

        <div class="experience">

            <h3>
                Praktik Kerja Lapangan
            </h3>

            <div class="place">
                Diskominfo Tenggarong
            </div>

            <p>
                Selama kegiatan PKL, saya mendapatkan pengalaman
                dalam pengembangan aplikasi web, pengelolaan data,
                serta mempelajari proses deployment dan pengelolaan
                website.
            </p>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        © 2026 Mecca — Teknik Komputer dan Jaringan.

    </footer>

</body>
</html>