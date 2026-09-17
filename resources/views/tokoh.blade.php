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

        .add-news-btn {
            flex-shrink: 0;

            padding: 16px 24px;

            background: transparent;
            color: white;

            border: 1px solid #444;

            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;

            cursor: pointer;

            transition: 0.3s ease;
        }

        .add-news-btn:hover {
            background: #ff5a1f;
            border-color: #ff5a1f;
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

            nav {
                padding: 0 25px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .tokoh-header {
                padding: 60px 25px 30px;
            }

            .tokoh-card {
                width: 280px;
            }

            .tokoh-photo {
                height: 340px;
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

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">KARHUTLA</div>

        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/#kondisi-udara">Informasi</a>
            <a href="/tokoh">Tokoh</a>
            <a href="/profil">Profilku</a>
        </div>
    </nav>


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

            <button class="add-news-btn" onclick="openRegister()">
                + TAMBAH BERITA
            </button>

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

</div>

    <!-- POPUP DAFTAR -->
    <div class="modal" id="registerModal">

        <div class="modal-box">

            <button class="modal-close" onclick="closeRegister()">×</button>

            <div class="eyebrow">
                KONTRIBUSI
            </div>

            <h2>Daftarkan akun.</h2>

            <p>
                Buat akun terlebih dahulu untuk menambahkan berita.
            </p>

            <form>

                <input
                    type="text"
                    placeholder="Username"
                    required
                >

                <input
                    type="password"
                    placeholder="Password"
                    required
                >

                <button type="submit" class="register-submit">
                    DAFTAR
                </button>

            </form>

            <div class="login-link">
                Sudah punya akun?
                <a href="{{ route('login')}}">Login</a>
            </div>

        </div>

    </div>

    <script>

    function openRegister() {
        document.getElementById("registerModal").classList.add("active");
    }

    function closeRegister() {
        document.getElementById("registerModal").classList.remove("active");
    }

    </script>
        
</body>
</html>