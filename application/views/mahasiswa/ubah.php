<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama" class=" d-block">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <?php if (form_error('nama')) : ?>
                                <small class="text-danger d-block "><?= form_error('nama'); ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nrp" class=" d-block">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <?php if (form_error('nrp')) : ?>
                                <small class="text-danger d-block "><?= form_error('nrp'); ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" d-block">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <?php if (form_error('email')) : ?>
                                <small class="text-danger d-block "><?= form_error('email'); ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class=" d-block">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika" <?= $mahasiswa['jurusan'] == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                                <option value="Teknik Pangan" <?= $mahasiswa['jurusan'] == 'Teknik Pangan' ? 'selected' : ''; ?>>Teknik Pangan</option>
                                <option value="Teknik Mesin" <?= $mahasiswa['jurusan'] == 'Teknik Mesin' ? 'selected' : ''; ?>>Teknik Mesin</option>
                                <option value="Teknik Seni" <?= $mahasiswa['jurusan'] == 'Teknik Seni' ? 'selected' : ''; ?>>Teknik Seni</option>
                                <option value="Sastra Mesin" <?= $mahasiswa['jurusan'] == 'Sastra Mesin' ? 'selected' : ''; ?>>Sastra Mesin</option>
                            </select>
                            <?php if (form_error('jurusan')) : ?>
                                <small class="text-danger d-block "><?= form_error('jurusan'); ?></small>
                            <?php endif; ?>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-warning float-left">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>