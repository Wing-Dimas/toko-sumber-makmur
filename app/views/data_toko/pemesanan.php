<table class="table table-striped">
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
                  <a href="<?= BASEURL ?>/data_toko/hapus_pemesanan/<?= $pemesanan["id_pemesanan"] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>