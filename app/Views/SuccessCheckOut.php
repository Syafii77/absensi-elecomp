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
            <h1>Check-Out Berhasil!</h1>
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
        '/images/checkout.png',
     
    ];
    const subJudul = [
        'Terima kasih untuk hari ini, waktunya pulang!'
    ];

    // // Fungsi untuk memilih gambar acak
    // function getRandomImage() {
    //     const randomIndex = Math.floor(Math.random() * images.length);
    //     return images[randomIndex];
    // }

    // // Fungsi untuk memilih sub judul acak
    // function getRandomSubJudul() {
    //     const randomIndex = Math.floor(Math.random() * subJudul.length);
    //     return subJudul[randomIndex];
    // }

    // Menampilkan gambar acak
    document.getElementById('randomImage').src = images;
    // Menampilkan sub judul acak
    document.getElementById('subJudul').textContent = subJudul;
</script>

</html>