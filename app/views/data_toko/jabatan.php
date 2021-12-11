
<?= Flasher::flash()?>

<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="button mr-4 mt-5">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a href="<?= BASEURL ?>/jabatan/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="table-container mt-5">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID jabatan</th>
                    <th scope="col">Nama Jabatan</th>
                    <th scope="col">gaji</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data["jabatan"] as $item): ?>
                        <tr>
                            <th scope="row"><?= $item["id_jabatan"] ?></th>
                            <td><?= $item["nama_jabatan"] ?></td>
                            <td><?= $item["gaji"] ?></td>
                            <td>
                                <a href="<?= BASEURL ?>/jabatan/edit/<?= $item["id_jabatan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= BASEURL ?>/jabatan/hapus/<?= $item["id_jabatan"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>