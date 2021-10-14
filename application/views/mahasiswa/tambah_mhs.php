<div class="container mt-5">
    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">


                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Example select</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="teknik_informatika">Informatika</option>
                                <option value="tenik_komputer"> Teknik Komputer</option>
                                <option value="telnik_listrik">Teknik Listrik</option>
                                <option value="teknik_mesin">Teknik Mesin</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>