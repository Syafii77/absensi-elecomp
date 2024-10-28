<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }

        img {
            max-width: 300px;
            height: auto;
        }

        .title {
            margin-top: 20px;
        }

        a {
            padding: 10px 20px;
            border-radius: 50px;
            background-color: #130C90;
            color: white;
            text-decoration: none;
            /* margin-top: 20px; */

        }
    </style>
</head>

<body>
    <div>
        <div>
            <img id="randomImage" src="" alt="Random Image">
        </div>

        <div class="title">
            <h1>Check-In Pending!</h1>
            <p class="sub-judul" id="subJudul"></p>
        </div>
        <div style="margin-top: 30px;">
            <a href="/home">Kembali Dashboard</a>
        </div>
    </div>

</body>
<script>
    // Array berisi URL gambar-gambar
    const images = [

        '/images/image2.png',
        '/images/image3.png',
        '/images/image5.png',
        '/images/image6.png',
        '/images/image7.png',
        '/images/image8.png',
        '/images/image9.png',
    ];
    const subJudul = [
        'Sebentar lagi dicek, tetap semangat ya! 🚧',
        'Sabar dulu, verifikasi sedang diproses. ⏳',
        'Tunggu sebentar, sistem lagi ngecek lokasimu! 🧐',
        'Pending dulu, tapi jangan khawatir, tetap produktif! 💼',
        'Sedang diperiksa, jangan lupa tetap fokus ya! 🔍',
        'Verifikasi dalam proses, siap-siap lanjut kerja! 🚀',
        'Tahan dulu, verifikasi sedang berlangsung. ⏲️',
        'Lagi diproses, sabar ya, kerjaan tetap jalan! 🛠️',
        'Pending sebentar, waktu produktif tetap jalan! 💪',
        'Tunggu sebentar, absensi lagi dicek. Tetap semangat! 😊',
        'Verifikasi lagi mikir, mungkin butuh kopi dulu! ☕',
        'Sistem lagi ngecek, tenang aja, masih aman kok! 👌',
        'Pending bentar, bisa buat ngecek ulang to-do list! 📋',
        'Sabar, mungkin sistemnya lagi ngumpulin nyawa! 🎮',
        'Verifikasi pending, jangan sampai kamu ikutan pending! 💤',
        'Tunggu ya, mungkin sistem lagi buka camilan juga! 🍪',
        'Sebentar lagi beres, semangat terus! 🌟',
        'Verifikasi dalam proses, bisa ambil napas dulu! 😌',
        'Sistem lagi bekerja, kamu juga jangan kalah rajin! 💻',
        'Pending dulu, mungkin sistem butuh break sejenak! 🛋️'
    ];


    // Fungsi untuk memilih gambar acak
    function getRandomImage() {
        const randomIndex = Math.floor(Math.random() * images.length);
        return images[randomIndex];
    }

    // Fungsi untuk memilih sub judul acak
    function getRandomSubJudul() {
        const randomIndex = Math.floor(Math.random() * subJudul.length);
        return subJudul[randomIndex];
    }

    // Menampilkan gambar acak
    document.getElementById('randomImage').src = getRandomImage();
    // Menampilkan sub judul acak
    document.getElementById('subJudul').textContent = getRandomSubJudul();
</script>

</html>