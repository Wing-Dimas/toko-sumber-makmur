<?php Flasher::flash() ?>
<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="button mr-4 mt-5">
          <form class="form-inline" action="<?= BASEURL ?>/pemesanan/cari" method="POST">
            <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a href="<?= BASEURL ?>/pemesanan/tambah" class="btn btn-success btn-sm tombol-tambah-pemesanan"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="table-container mt-5"><table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID Pembayaran</th>
        <th scope="col">Tanggal Pembayaran</th>
        <th scope="col">Admin</th>
        <th scope="col">Pelanggan</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Qty</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data["pemesanan"] as $pemesanan): ?>
            <tr>
                <th scope="row"><?= $pemesanan["id_pembayaran"] ?></th>
                <td><?= $pemesanan["tanggal_pembayaran"] ?></td>
                <td><?= $pemesanan["id_admin"] ?></td>
                <td><?= $pemesanan["nama_pelanggan"] ?></td>
                <td><?= $pemesanan["nama_barang"] ?></td>
                <td><?= $pemesanan["qty"] ?></td>
                <td><?= $pemesanan["total"] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/pemesanan/hapus/<?= $pemesanan["id_pemesanan"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

</div>
      </div>
    </section>