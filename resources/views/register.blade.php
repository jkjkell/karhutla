<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register — Karhutla Kalimantan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #0b0b0b;
            color: #f5f5f5;
            font-family: Arial, sans-serif;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-box {
            width: 420px;
            padding: 40px;
            background: #151515;
            border: 1px solid #2a2a2a;
            border-radius: 12px;
        }

        .eyebrow {
            color: #ff6a00;
            font-size: 12px;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        h1 {
            margin: 0 0 10px;
            font-size: 32px;
        }

        .description {
            color: #999;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;

            background: #0d0d0d;
            border: 1px solid #333;
            border-radius: 6px;

            color: white;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #ff6a00;
        }

        button {
            width: 100%;
            padding: 14px;

            border: none;
            border-radius: 6px;

            background: #ff6a00;
            color: white;

            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .login-link {
            margin-top: 20px;
            text-align: center;
            color: #999;
        }

        .login-link a {
            color: #ff6a00;
            text-decoration: none;
        }

        .error {
            background: #351515;
            border: 1px solid #7a2929;
            color: #ffaaaa;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="register-box">

    <div class="eyebrow">KONTRIBUSI</div>

    <h1>Buat akun.</h1>

    <p class="description">
        Daftar untuk ikut berkontribusi dalam informasi seputar
        karhutla dan lingkungan Kalimantan.
    </p>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <input
            type="text"
            name="name"
            placeholder="Nama"
            value="{{ old('name') }}"
            required
        >

        <input
            type="text"
            name="username"
            placeholder="Username"
            value="{{ old('username') }}"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <input
            type="password"
            name="password_confirmation"
            placeholder="Konfirmasi password"
            required
        >

        <button type="submit">
            DAFTAR
        </button>
    </form>

    <div class="login-link">
        Sudah punya akun?
        <a href="{{ route('login') }}">Login</a>
    </div>

</div>

</body>
</html>