<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <col-lg-6>
            <button type="button" class="btn btn-primary tambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
        </col-lg-6>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/waifu/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari...." id="keyword" name="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3 class="mt-4">Daftar Waifu</h3>
            <ul class="list-group">
                <?php foreach ($data["wfu"] as $wfu) : ?>
                <li class="list-group-item">
                    <?= $wfu['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/hapus/<?=$wfu['id']?>"
                        class="btn-sm btn-danger text-decoration-none float-end ms-1"
                        onclick="return confirm('Hapus?')">Hapus</a>
                    <a href="<?= BASEURL ?>/waifu/edit/<?=$wfu['id']?>"
                        class="btn-sm btn-success text-decoration-none float-end ms-1 editData" data-bs-toggle="modal"
                        data-bs-target="#formModal" data-id="<?= $wfu['id']; ?>">Edit</a>
                    <a href="<?= BASEURL ?>/waifu/detail/<?=$wfu['id']?>"
                        class="btn-sm btn-primary text-decoration-none float-end ms-1">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Waifu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/waifu/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">nis</label>
                        <input type="number" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="MM">MM</option>
                            <option value="TKJ">TKJ</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>