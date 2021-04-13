<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <h3>Daftar Waifu</h3>
            <ul class="list-group">
                <?php foreach ($data["wfu"] as $wfu) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $wfu['nama'] ?>
                    <a href="<?= BASEURL ?>/waifu/detail/<?=$wfu['id']?>" class="btn-sm btn-primary text-decoration-none">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>