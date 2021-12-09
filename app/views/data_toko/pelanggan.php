<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID Pelanggan</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomor Hp</th>
        <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data["customers"] as $customer): ?>
            <tr>
                <th scope="row"><?= $customer["id_pelanggan"] ?></th>
                <td><?= $customer["nama_pelanggan"] ?></td>
                <td><?= $customer["alamat_pelanggan"] ?></td>
                <td><?= $customer["nomor_hp_pelanggan"] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/data_toko/edit_barang/<?= $customer["id_pelanggan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/data_toko/hapus_barang/<?= $customer["id_pelanggan"] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                  <a href="<?= BASEURL ?>/data_toko/detail_pemesanan/<?= $customer["id_pelanggan"] ?>" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i> Deatil Pemesanan</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>