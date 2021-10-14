<div class="container mt-3">
    <?php $data_ses = $this->session->flashdata('flash'); ?>
    <?php if ($data_ses) { ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert"> data
        <strong>BESRHASIL</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <?php } ?>

    <div class="card">

        <div class="card-body">
            <a class="btn btn-dark btn-md" href="<?= base_url(); ?>mahasiswa/tambah_mhs" role="button"> add
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd"
                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>


            </a>

            <div class="row mt-3">
                <div class="col-md-10">

                    <form action="" method="post">

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="search data ..." name="cari" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"> Cari</button>
                            </div>
                        </div>
                    </form>

                    <?php if (empty($mahasiswa)) { ?>


                    <div class="alert alert-danger" role="alert">
                        Data Not Fount
                    </div>
                    <?php } ?>
                </div>
            </div>

            <table class="table mt-4">




                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>

                <tbody>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) { ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['jurusan'] ?></td>
                        <td><?= $mhs['email'] ?></td>

                        <td>

                            <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id']; ?>"
                                class="badge badge-pill badge-primary">Details</a>|
                            <a href="<?= base_url() ?>mahasiswa/update/<?= $mhs['id']; ?>"
                                class="badge badge-pill badge-success">Update</a>|
                            <a href="<?= base_url(); ?>mahasiswa/delete/<?= $mhs['id']; ?> "
                                class="badge badge-pill badge-danger"
                                onclick="return confirm('yakin hapus data..?');">Delete</a>
                        </td>
                    </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>


        </div>
    </div>
</div>