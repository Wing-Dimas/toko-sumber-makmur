
<?= Flasher::flash() ?>

<section>
  <div class="container data mt-5">
    <h2><?= $data["daftar"]?></h2>
    <div class="button mr-4 mt-5">
      <form class="form-inline" action="<?= BASEURL ?>/supplier/cari" method="POST">
        <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <a href="<?= BASEURL ?>/supplier/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
    </div>
    <div class="table-container mt-5">
      <table class="table table-striped">
          <thead class="thead-dark">
              <tr>
              <th scope="col">ID Supplier</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Eamil</th>
              <th scope="col">action</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach($data["supplier"] as $supllier): ?>
                  <tr>
                      <th scope="row"><?= $supllier["id_supplier"] ?></th>
                      <td><?= $supllier["nama_supplier"] ?></td>
                      <td><?= $supllier["alamat_supplier"] ?></td>
                      <td><?= $supllier["email_supplier"] ?></td>
                      <td>
                        <a href="<?= BASEURL ?>/supplier/edit/<?= $supllier["id_supplier"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?= BASEURL ?>/supplier/hapus/<?= $supllier["id_supplier"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                      </td>
                  </tr>
              <?php endforeach;?>
          </tbody>
      </table>

      </div>
  </div>
</section>