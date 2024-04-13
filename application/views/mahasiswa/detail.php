<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Detail Mahasiswa</h2>
            <div class="card">
                <div class="card-header">
                    Detail Informasi Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text"><b>NRP:</b> <?= $mahasiswa['nrp']; ?></p>
                    <p class="card-text"><b>Email:</b> <?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><b>Jurusan:</b> <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>