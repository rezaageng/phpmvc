<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
            <h3 class="mt-4">Daftar Waifu</h3>
            <ul class="list-group">
                <?php foreach ($data["wfu"] as $wfu) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $wfu['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/detail/<?=$wfu['id']?>"
                        class="btn-sm btn-primary text-decoration-none">Detail</a>
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
                        <label for="nama" class="form-label">Nama</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan">
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