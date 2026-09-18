<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Berita - Karhutla Kalimantan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #080808;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        nav {
            height: 75px;
            padding: 0 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #222;
            background: rgba(8, 8, 8, 0.96);
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .logo span {
            color: #ff6b2c;
        }

        .back {
            color: #aaa;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: 0.3s;
        }

        .back:hover {
            color: #fff;
        }

        /* HEADER */
        .header {
            padding: 70px 7% 45px;
        }

        .eyebrow {
            color: #ff6b2c;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        h1 {
            font-size: clamp(40px, 6vw, 70px);
            line-height: 0.95;
            margin: 0 0 20px;
        }

        .subtitle {
            max-width: 650px;
            color: #999;
            line-height: 1.7;
            font-size: 15px;
        }

        /* MESSAGE */
        .message {
            margin: 0 7% 30px;
            padding: 15px 20px;
            border-left: 3px solid #ff6b2c;
            background: #141414;
            color: #ddd;
        }

        /* CONTENT */
        .content {
            padding: 0 7% 80px;
        }

        .berita {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;

            padding: 25px;
            margin-bottom: 25px;

            background: #111;
            border: 1px solid #242424;
            border-radius: 14px;

            transition: 0.3s;
        }

        .berita:hover {
            border-color: #ff6b2c;
            transform: translateY(-2px);
        }

        .berita img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-radius: 10px;
        }

        .berita-info {
            display: flex;
            flex-direction: column;
        }

        .status {
            display: inline-block;
            width: fit-content;

            padding: 6px 12px;
            margin-bottom: 12px;

            border: 1px solid #ff6b2c;
            border-radius: 30px;

            color: #ff6b2c;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .berita h2 {
            margin: 0 0 12px;
            font-size: 28px;
        }

        .deskripsi {
            color: #aaa;
            line-height: 1.7;
            margin: 0 0 15px;
        }

        .sumber {
            color: #777;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .sumber a {
            color: #ff6b2c;
            text-decoration: none;
        }

        /* BUTTON */
        .actions {
            display: flex;
            gap: 12px;
            margin-top: auto;
        }

        .actions form {
            margin: 0;
        }

        button {
            border: none;
            padding: 11px 20px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.3s;
        }

        .approve {
            background: #ff6b2c;
            color: #fff;
        }

        .approve:hover {
            background: #ff5722;
            transform: translateY(-2px);
        }

        .reject {
            background: transparent;
            border: 1px solid #555;
            color: #aaa;
        }

        .reject:hover {
            border-color: #d9534f;
            color: #d9534f;
        }

        /* EMPTY */
        .empty {
            padding: 60px 20px;
            text-align: center;
            color: #666;
            border: 1px dashed #292929;
            border-radius: 12px;
        }

        /* RESPONSIVE */
        @media (max-width: 750px) {
            nav {
                padding: 0 5%;
            }

            .header,
            .content {
                padding-left: 5%;
                padding-right: 5%;
            }

            .message {
                margin-left: 5%;
                margin-right: 5%;
            }

            .berita {
                grid-template-columns: 1fr;
            }

            .berita img {
                height: 230px;
            }

            .actions {
                flex-wrap: wrap;
            }
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .admin-name {
            color: #ff6b2c;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .nav-right form {
            margin: 0;
        }

        .logout-btn {
            padding: 10px 18px;
            border: 1px solid #444;
            border-radius: 6px;

            background: transparent;
            color: #aaa;

            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;

            cursor: pointer;
            transition: 0.3s;
        }

        .logout-btn:hover {
            border-color: #ff6b2c;
            color: #ff6b2c;
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            KARHUTLA <span>KALIMANTAN</span>
        </div>

        <div class="nav-right">

            <span class="admin-name">
                ADMIN: {{ auth()->user()->username }}
            </span>

            <a href="{{ route('tokoh') }}" class="back">
                ← Kembali
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-btn">
                    LOGOUT
                </button>
            </form>

        </div>
    </nav>


    <!-- HEADER -->
    <section class="header">

        <div class="eyebrow">
            ADMIN PANEL
        </div>

        <h1>
            Kelola<br>
            berita.
        </h1>

        <p class="subtitle">
            Tinjau berita yang dikirim pengunjung sebelum ditampilkan
            di halaman Tokoh yang Berjasa.
        </p>

    </section>


    <!-- SUCCESS MESSAGE -->
    @if (session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif


    <!-- BERITA -->
    <section class="content">

        @forelse ($tokoh as $item)

            <article class="berita">

                @if ($item->foto)
                    <img
                        src="{{ asset('storage/' . $item->foto) }}"
                        alt="{{ $item->nama }}"
                    >
                @endif


                <div class="berita-info">

                    <div class="status">
                        MENUNGGU REVIEW
                    </div>

                    <h2>
                        {{ $item->nama }}
                    </h2>

                    <p class="deskripsi">
                        {{ $item->deskripsi }}
                    </p>


                    @if ($item->link)
                        <div class="sumber">
                            Sumber:
                            <a
                                href="{{ $item->link }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                {{ $item->sumber ?? 'Lihat sumber' }}
                            </a>
                        </div>
                    @endif


                    <div class="actions">

                        <!-- TERIMA -->
                        <form
                            action="{{ route('tokoh.approve', $item->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PATCH')

                            <button
                                type="submit"
                                class="approve"
                            >
                                ✓ TERIMA
                            </button>
                        </form>


                        <!-- TOLAK -->
                        <form
                            action="{{ route('tokoh.reject', $item->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PATCH')

                            <button
                                type="submit"
                                class="reject"
                            >
                                ✕ TOLAK
                            </button>
                        </form>

                    </div>

                </div>

            </article>

        @empty

            <div class="empty">
                Tidak ada berita yang menunggu review.
            </div>

        @endforelse

    </section>

</body>
</html>