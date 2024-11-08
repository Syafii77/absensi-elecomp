<?= $this->extend('/Layouts/user_layout') ?>
<?= $this->section('customStyles') ?>
<title>Riwayat</title>
<link rel="stylesheet" href="/css/riwayat.css">
<style>
        .pagination a.btn {
                margin-top: 20px;
                padding: 8px 10px;
                font-size: 18px;
        }
        .pagination a.btn:hover{
            color: rgb(0, 7, 62)
        }
       @media (max-width: 768px) {
            .page-link {
                display: block;
                color: #130C90; /* Mengubah warna teks */
                padding: 4px 10px;
                border: 1px solid #130C90; /* Menambahkan border */
                border-radius: 4px;
                text-decoration: none;
                }
                 .pagination a.btn {
                    margin-top: 12px;
                    padding: 8px 10px;
                    font-size: 18px;
                }
        }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


    <div class="title">
        <h2>Checklis Piket</h2>
    </div>

    <div class="table-responsive">
    <!-- <p>Daftar Jadwal piket</p>
    <table class="table">
    <thead>
        <tr>
            <th style="width: 5%">No</th>
            <th style="width: 8%">Senin</th>
            <th style="width: 5%">Selasa</th>
            <th style="width: 8%">Rabu</th>
            <th style="width: 5%">Kamis</th>
            <th style="width: 8%">Jum'at</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>Jeje</td>
            <td>Anik</td>
            <td>Yasmin</td>
            <td>Isna</td>
            <td>Diana</td>
        </tr>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>Yosa</td>
            <td>Bintang</td>
            <td>Rafqi</td>
            <td>Sigit</td>
            <td>Rayhan</td>
        </tr>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>Bayu</td>
            <td>Naufal</td>
            <td>Tegar</td>
            <td>Daffa</td>
            <td>Tio</td>
        </tr>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>Rudi</td>
            <td>Dhika</td>
            <td>Rio</td>
            <td>Bryan</td>
            <td>Imam</td>
        </tr>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>Herlambang</td>
            <td>Afi</td>
            <td>Ridho</td>
            <td>Davin</td>
            <td>Doni</td>
        </tr>
        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
    <!-- </tbody> -->
<!-- </table> -->
        <div><table class="table">
        <p>Daftar riwayat piket</p>
            <thead>
                <tr>
                <th style="width: 5%">No</th>
                <th style="width: 8%">Jam piket</th>
                <th style="width: 45%; word-wrap: break-word;">Kegiatan Piket</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($presensi as $item) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $item['jam_piket'] ?></td>
                    <td><?= $item['kegiatan_piket'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table></div>
    </div>

    <div class="pagination">
        <?php if ($viewAll): ?>
            <!-- Jika dalam mode "View All", tampilkan tombol kembali ke pagination -->
            <a href="/piket" class="btn btn-secondary">Back to Pagination</a>
        <?php else: ?>
            <!-- Jika tidak dalam mode "View All", tampilkan pagination dan tombol "View All" -->
            <a href="/piket?view_all=1" class="btn btn-primary">View All</a>
            <?= $pager->links('presensi', 'custom') ?>
        <?php endif; ?>
    </div>

<!-- Your content here -->
<?= $this->endSection() ?>