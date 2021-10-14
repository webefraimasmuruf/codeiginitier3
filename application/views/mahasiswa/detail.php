<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $detail['email']; ?></h6>

                    <p class="card-text"><?= $detail['nim'] ?></p>
                    <p class="card-text"><?= $detail['jurusan'] ?></p>

                    <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>