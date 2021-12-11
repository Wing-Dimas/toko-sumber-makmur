<?= Flasher::flash()?>

<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="button mr-4 mt-5">
            <form class="form-inline" action="<?= BASEURL ?>/admin/cari" method="POST">
                <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          <a href="<?= BASEURL ?>/admin/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="table-container mt-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID Admin</th>
                    <th scope="col">username</th>
                    <th scope="col">Nama karyawan</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data["admin"] as $admin ): ?>
                        <tr>
                            <th scope="row"><?= $admin["id_admin"] ?></th>
                            <td><?= $admin["username"] ?></td>
                            <td><?= $admin["nama_karyawan"] ?></td>
                            <td>
                                <a href="<?= BASEURL ?>/admin/edit/<?= $admin["id_admin"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= BASEURL ?>/admin/hapus/<?= $admin["id_admin"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>