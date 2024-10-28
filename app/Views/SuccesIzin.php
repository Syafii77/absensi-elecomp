<?php
$statusIzin = session()->getFlashdata('status_izin');
$judul = "Selamat Izin Disetujui!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Izin</title>
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
        }
    </style>
</head>

<body>
    <div>
        <div>
            <img id="randomImage" src="" alt="Random Image">
        </div>

        <div class="title">
            <h1><?= $judul ?></h1>
            <p class="sub-judul" id="subJudul"></p>
        </div>
        <div style="margin-top: 30px;">
            <a href="/home">Kembali Dashboard</a>
        </div>
    </div>

</body>
<script>
    const statusIzin = "<?= $statusIzin ?>";

    const subJudulSakit = [
        "Rehat dulu ya, kesehatanmu lebih penting dari deadline!",
        "Cepat sembuh, biar bisa balik lagi dengan energi baru!",
        "Jangan lupa vitamin dan tidur yang cukup, kerjaan bisa menunggu.",
        "Kamu rebahan, kami yang pegang kendali dulu.",
        "Sehat dulu, nanti baru kita kejar target bareng!",
        "Semoga lekas pulih, biar bisa join rapat dengan senyum lagi!",
        "Hari ini mending rebahan aja, kerjaan besok juga masih ada.",
        "Sakit bukan halangan, tapi alasan buat istirahat total!",
        "Minum obat, tidur nyenyak, kami tunggu kehadiranmu lagi.",
        "Sehat-sehat ya! Pekerjaan bisa menunggu, tapi kesehatan nggak!"
    ];

    const subJudulIzin = [
        "Nikmati waktunya, kami jagain kantor sementara.",
        "Pergi dengan tenang, balik dengan cerita seru!",
        "Selamat menikmati hari izinnya, jangan lupa kembali dengan semangat baru!",
        "Ambil waktu istirahat, kami siapkan suasana menyambut kembalimu!",
        "Izinnya aman, kamu juga harus tenang!",
        "Break dulu, nanti kita siap berjuang lagi!",
        "Santai aja, kami handle semuanya sementara kamu izin.",
        "Izinnya disetujui! Bawa pulang oleh-oleh semangat ya!",
        "Nggak perlu khawatir, semua sudah beres di sini!",
        "Izinnya approved, tinggal nikmati dan kembali dengan fresh!"
    ];

    const imagesSakit = [
        '/images/sakit1.png',
        '/images/sakit2.png',
        '/images/sakit3.png',
        '/images/sakit4.png',
        '/images/sakit5.png'
    ];

    const imagesIzin = [
        '/images/izin1.png',
        '/images/izin2.png'
    ];

    const subJudul = statusIzin === 'sakit' ? subJudulSakit : subJudulIzin;
    const images = statusIzin === 'sakit' ? imagesSakit : imagesIzin;

    const randomIndex = Math.floor(Math.random() * subJudul.length);
    const randomImageIndex = Math.floor(Math.random() * images.length);

    document.getElementById('randomImage').src = images[randomImageIndex];
    document.getElementById('subJudul').innerText = subJudul[randomIndex];
</script>

</html>
