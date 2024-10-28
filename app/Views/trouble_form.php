<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi - Bantuan</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            font-family: var(--font-family);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --body-color: #eff0f7;
            --sidebar-color: #ffffff;
            --primary-color: #130c90;
            --text-color: rgba(0, 0, 0, 0.74);
            --border-color: #898989;
            --font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background-image: url('/images/Sign In 1.png');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: var(--sidebar-color);
            width: 90%;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .trouble {
            font-size: 16px;
            color: var(--text-color);
            line-height: 1.6;
            margin-top: 20px;
        }

        .contact-info {
            font-weight: 600;
            margin-top: 20px;
        }

        .contact-info a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .alert-popup {
            padding: 15px;
            border-radius: 8px;
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 500px;
            z-index: 1050;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-size: 14px;
        }

        /* Tambahan untuk button kembali */
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: rgba(19, 12, 144, 0.8);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Ada Kendala? Kami Siap Bantu!</div>

        <div class="trouble">
            Oops! Ada masalah dengan absensi? Santai, tinggal kirim pesan: <strong>"Kak lupa password"</strong> ke admin di bawah ini:
            <br><br>
            <div class="contact-info">
                <strong>Eli (Lupa Password, Masalah Presensi):</strong> <a href="tel:6282276944556">0822-7694-4556</a><br>
                <strong>Al (Trouble Presensi dan Lokasi):</strong> <a href="tel:628961686870">0896-1686-870</a><br>
                <strong>Bintang (Verifikasi Absensi):</strong> <a href="tel:62895339432220">0895-3394-32220</a>
            </div>
            <br>
            Kami mungkin lagi sibuk, tapi jangan khawatir, pesanmu pasti kami tanggapi secepatnya.
        </div>

        <!-- Tambahkan tombol Kembali di bawah -->
        <button class="back-button" onclick="window.location.href='/login'">Kembali</button>
    </div>
</body>

</html>
