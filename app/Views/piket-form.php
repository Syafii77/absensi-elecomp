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
            <h1>Check-In Berhasil!</h1>
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
        '/images/image4.png',
        '/images/image7.png',
        '/images/image9.png',
        '/images/image10.png',
        '/images/image11.png',
        '/images/image12.png',
    ];
    const subJudul = [
        'Yang semangat ya! Tugas nggak bakal ngerjain dirinya sendiri. 😉',
        'Semangat terus! Kerja keras, pantang rebahan! 😄',
        'Sip! Absen sukses, tinggal kerja yang bener! 💪',
        'Mantap! Sekarang saatnya produktif, jangan malah scroll TikTok! 😜',
        'Wah, udah absen! Kerjanya jangan sambil ngemil terus ya! 😆',
        'Check-in done! Moga-moga nggak jadi super sibuk ya! 😅',
        'Absen berhasil, kerja juga harus berhasil dong! 😎',
        'Siap kerja? Jangan lupa tarik napas dulu biar nggak stress! 😌',
        'Absen aman, kerjaan lancar! Jangan main Mobile Legends terus ya! 🎮',
        'Sukses absen! Sekarang fokus kerja dulu, Mobile Legends nanti aja! 😉',
        'Mantap! Sekarang tinggal buat bos senang dengan hasil kerjamu! 😁',
        'Udah absen, yuk lanjutkan hari ini dengan penuh semangat! 💥',
        'Selesai absen! Yuk, bikin hari ini produktif banget! 🚀',
        'Absen done! Sekarang tinggal fokus, biar kerjaan selesai cepat! 🏁',
        'Check-in beres! Jangan main UNO terus, kerja dulu ya! 🎴',
        'Sukses absen! UNO nanti aja, sekarang waktunya kerja! 😉',
        'Mantap! Udah absen, sekarang fokus kerja dulu, UNO-nya nanti! 😄'
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