<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <h3>Daftar Waifu</h3>
            <?php foreach ($data["wfu"] as $wfu) : ?>
                <ul>
                    <li><?= $wfu["nama"] ?></li>
                    <li><?= $wfu["nis"] ?></li>
                    <li><?= $wfu["email"] ?></li>
                    <li><?= $wfu["jurusan"] ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>