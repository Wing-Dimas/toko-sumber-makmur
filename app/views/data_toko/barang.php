<?php Flasher::flash() ?>

<section>
  <div class="container data mt-5">
    <h2><?= $data["daftar"]?></h2>
    <div class="button mr-4 mt-5">
      <form class="form-inline" action="<?= BASEURL ?>/barang/cari" method="POST">
        <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <a href="<?= BASEURL ?>/barang/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
    </div>
    <div class="table-container mt-5">
      <table class="table table-striped">
          <thead class="thead-dark">
              <tr>
              <th scope="col">ID barang</th>
              <th scope="col">ID supplier</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">action</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach($data["items"] as $item): ?>
                  <tr>
                      <th scope="row"><?= $item["id_barang"] ?></th>
                      <td><?= $item["id_supplier"] ?></td>
                      <td><?= $item["nama_barang"] ?></td>
                      <td><?= $item["harga_barang"] ?></td>
                      <td><?= $item["stok_barang"] ?></td>
                      <td>
                        <a href="<?= BASEURL ?>/barang/edit/<?= $item["id_barang"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?= BASEURL ?>/barang/hapus/<?= $item["id_barang"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                      </td>
                  </tr>
              <?php endforeach;?>
          </tbody>
      </table>
    </div>
  </div>
</section>