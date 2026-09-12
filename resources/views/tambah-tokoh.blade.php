<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita — Karhutla</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #080808;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        nav {
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 80px;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .back {
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
        }

        .back:hover {
            color: #ff5a1f;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 30px 80px;
        }

        .eyebrow {
            color: #ff5a1f;
            letter-spacing: 6px;
            font-size: 12px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 60px;
            line-height: 1;
            margin-bottom: 20px;
        }

        .description {
            color: #999;
            line-height: 1.7;
            margin-bottom: 50px;
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 28px;
        }

        label {
            display: block;
            font-size: 12px;
            letter-spacing: 2px;
            margin-bottom: 10px;
            color: #ddd;
        }

        input,
        textarea {
            width: 100%;
            background: #111;
            border: 1px solid #333;
            color: white;
            padding: 16px;
            font-size: 15px;
            outline: none;
            border-radius: 2px;
        }

        input:focus,
        textarea:focus {
            border-color: #ff5a1f;
        }

        textarea {
            min-height: 160px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 12px;
            cursor: pointer;
        }

        .hint {
            color: #666;
            font-size: 12px;
            margin-top: 8px;
        }

        .submit-btn {
            background: #ff5a1f;
            border: none;
            color: white;
            padding: 17px 30px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            background: #ff6b2c;
        }

        .error-box {
            background: #2a1111;
            border: 1px solid #632020;
            padding: 18px;
            margin-bottom: 30px;
            color: #ffb0b0;
        }

        .error-box ul {
            padding-left: 20px;
        }

        @media (max-width: 700px) {
            nav {
                padding: 0 25px;
            }

            .container {
                margin-top: 40px;
            }

            h1 {
                font-size: 42px;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">KARHUTLA</div>

    <a href="{{ route('tokoh') }}" class="back">
        ← Kembali ke Tokoh
    </a>
</nav>

<div class="container">

    <div class="eyebrow">KONTRIBUSI</div>

    <h1>Tambah berita.</h1>

    <p class="description">
        Bagikan informasi tentang tokoh yang berperan dalam menjaga hutan,
        mencegah kebakaran, atau melindungi lingkungan.
    </p>

    @if ($errors->any())
        <div class="error-box">
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('tokoh.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        <div class="form-group">
            <label for="nama">NAMA TOKOH</label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
                placeholder="Contoh: Petugas Pemadam Kebakaran"
                required
            >
        </div>

        <div class="form-group">
            <label for="foto">FOTO TOKOH</label>

            <input
                type="file"
                id="foto"
                name="foto"
                accept="image/*"
                required
            >

            <div class="hint">
                Format JPG, JPEG, PNG, atau WEBP. Maksimal 5 MB.
            </div>
        </div>

        <div class="form-group">
            <label for="deskripsi">DESKRIPSI</label>

            <textarea
                id="deskripsi"
                name="deskripsi"
                placeholder="Jelaskan siapa tokoh tersebut dan apa kontribusinya..."
                required
            >{{ old('deskripsi') }}</textarea>
        </div>

        <div class="form-group">
            <label for="link">LINK SUMBER</label>

            <input
                type="url"
                id="link"
                name="link"
                value="{{ old('link') }}"
                placeholder="https://..."
            >

            <div class="hint">
                Masukkan link berita, Instagram, website, atau sumber lainnya.
            </div>
        </div>

        <div class="form-group">
            <label for="sumber">SUMBER</label>

            <input
                type="text"
                id="sumber"
                name="sumber"
                value="{{ old('sumber') }}"
                placeholder="Contoh: Kompas, Instagram, BNPB"
            >
        </div>

        <button type="submit" class="submit-btn">
            KIRIM BERITA →
        </button>

    </form>

</div>

</body>
</html>