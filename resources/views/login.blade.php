<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login — Karhutla Kalimantan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #080808;
            color: white;
            font-family: Arial, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: min(450px, 90%);
            padding: 45px;

            background: #111;
            border: 1px solid #333;
        }

        .eyebrow {
            color: #ff5a1f;
            letter-spacing: 5px;
            font-size: 13px;
            margin-bottom: 18px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .description {
            color: #888;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;

            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        input {
            width: 100%;
            padding: 15px;

            background: #080808;
            color: white;

            border: 1px solid #333;
            outline: none;
        }

        input:focus {
            border-color: #ff5a1f;
        }

        .login-btn {
            width: 100%;
            padding: 16px;

            margin-top: 10px;

            background: #ff5a1f;
            color: white;

            border: none;

            font-weight: bold;
            letter-spacing: 1px;

            cursor: pointer;
        }

        .login-btn:hover {
            background: #e94d16;
        }

        .back {
            display: block;

            margin-top: 25px;

            text-align: center;

            color: #777;
            text-decoration: none;

            font-size: 14px;
        }

        .back:hover {
            color: white;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <div class="eyebrow">
            AKSES AKUN
        </div>

        <h1>Login.</h1>

        <p class="description">
            Masuk ke akunmu untuk memberikan kontribusi
            dan mengirimkan berita.
        </p>

        <form action="{{ route('login.process') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="username">
                    USERNAME
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >

            </div>

            <div class="form-group">

                <label for="password">
                    PASSWORD
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>

            <button type="submit" class="login-btn">
                LOGIN
            </button>

        </form>

        <a href="/tokoh" class="back">
            ← Kembali ke Tokoh
        </a>

    </div>

</body>

</html>