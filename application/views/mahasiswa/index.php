<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> Data mahasiswa <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <form action="<?= base_url(); ?>mahasiswa" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center mb-3">Daftar Mahasiswa</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="table-layout: fixed; width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($mahasiswa)) : ?>
                            <tr>
                                <td colspan="2" class="text-center">Data mahasiswa tidak ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td style="text-align: center;"><?= $mhs['nama']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
        </div>
    </div>
</div>