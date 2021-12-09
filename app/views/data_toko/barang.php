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
                  <a href="<?= BASEURL ?>/data_toko/edit_barang/<?= $item["id_barang"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/data_toko/hapus_barang/<?= $item["id_barang"] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>