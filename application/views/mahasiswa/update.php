<div class="container mt-5">
    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">


                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs['nim']; ?>">
                            <small id=" emailHelp" class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Example select</label>
                            <select class="form-control" id="jurusan" name="jurusan">


                                <?php foreach ($jurusan as $j) : ?>


                                <?php if ($j == $mhs['jurusan']) : ?>

                                <option value="<?= $j; ?>" selected> <?= $j; ?> </option>

                                <?php else : ?>

                                <option value="<?= $j; ?>"> <?= $j; ?> </option>

                                <?php endif; ?>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= $mhs['email']; ?>">
                            <small id=" emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <button type="submit" name="update" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>