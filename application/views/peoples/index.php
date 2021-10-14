<div class="container mt-5">
    <center>
        <h3>List Peoples Programmer Of The Country Japan</h3> <br>
    </center>

    <div class="row">
        <div class="col-sm-9">

            <form method="POST" action="<?= base_url('peoples'); ?>">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search keyword" name="keyword"
                        autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="cari">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-2">

        <div class="col">

            <table class="table justifity text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Addres</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) { ?>

                    <div class="alert alert-danger" role="alert">
                        <h3>Data NotFound</h3>
                    </div>
                    <?php } ?>


                    <?php foreach ($peoples as $p) { ?>
                    <tr>
                        <th scope="row"><?= ++$start; ?></th>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['address']; ?></td>
                        <td><?= $p['email']; ?></td>


                        <td>


                            <a href="#" class="badge badge-primary">detail</a>
                            <a href="#" class="badge badge-success">update</a>
                            <a href="#" class="badge badge-danger">delete</a>

                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>