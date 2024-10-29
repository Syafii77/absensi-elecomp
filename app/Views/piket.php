<?= $this->extend('/Layouts/user_layout') ?>
<?= $this->section('customStyles') ?>
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/checkout.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<style>
    .alert-custom {
        background-color: #cce5ff; /* Light blue background */
        color: #004085; /* Dark blue text */
        border: 1px solid #b8daff; /* Light blue border */
        border-radius: 5px; /* Rounded corners */
        padding: 10px;
        margin: 20px 0;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .alert-custom h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .alert-custom p {
        margin-bottom: 10px;
    }

    .alert-custom ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    .alert-custom hr {
        border-top: 1px solid #b8daff;
        margin: 15px 0;
    }

    .alert-custom .mb-0 {
        margin-bottom: 0;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
    <h2>Piket Form</h2>
</div>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= esc(session()->getFlashdata('error')) ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= esc(session()->getFlashdata('success')) ?>
    </div>
<?php endif; ?>
<div class="alert-custom">
    <h4 class="alert-heading">Ketentuan Umum Piket.</h4>
    <p>Pastikan Piket Anda memenuhi kriteria berikut:</p>
    <ul>
        <li>Foto harus diambil dalam mode potret.</li>
        <li>Foto harus berupa keadaan ruang piket.</li>
        <li>Foto harus menyertakan watermark (jika ada).</li>
    </ul>

    <hr>
    <p class="mb-0">Pastikan untuk mengikuti panduan ini agar Piket Anda berhasil. Jika tidak sesuai ketentuan, Piket Anda tidak akan diverifikasi.</p>
</div>

<form action="/piket-form" method="POST" enctype="multipart/form-data">
    <div class="group">
        <div class="form">
            <div class="label"><label for="jamPiket">Waktu Piket</label></div>
            <div class="input">
                <input type="time" name="jamPiket" id="jamPiket" readonly>
            </div>
        </div>
    </div>
    <div class="form-1">
        <div class="label"><label for="foto_piket">Upload Foto Piket</label></div>
        <div class="input">
            <input type="file" name="foto_piket" id="foto_piket" accept=".jpg, .jpeg, .png" required>
        </div>
    </div>

    <div class="form-1">
        <div class="label"><label class="form-label">Kegiatan Piket:</label></div>
        <p style="color: red; margin-top: 2px"><em>*Catt: Pastikan kamu menuliskan kegiatan piket dengan rinci</em></p>
        <div class="input">
            <textarea rows="5" class="form-control" name="progressPiket" placeholder="Masukkan kegiatan piket anda hari ini.." required><?= set_value('progressPiket') ?></textarea>
           
        </div>

        <div class="d-grid">
            <button type="submit" class="btn mb-2" style="background-color: #130C90; color:white; display: flex; justify-content: center; align-items: center; width: 100%;">
                <strong>Simpan</strong>
            </button>
        </div>
    </div>
</form>

<script>
    // Mengambil waktu saat ini
    const waktu = new Date();
    const hour = String(waktu.getHours()).padStart(2, '0');
    const minute = String(waktu.getMinutes()).padStart(2, '0');
    
    const TimeNow = `${hour}:${minute}`;
    
    // Mengisi elemen waktu
    document.getElementById('jamPiket').value = TimeNow;
</script>

<?= $this->endSection() ?>
