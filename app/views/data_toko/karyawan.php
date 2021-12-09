<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID karyawan</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomor Hp</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data["employees"] as $employee): ?>
            <tr>
                <th scope="row"><?= $employee["id_karyawan"] ?></th>
                <td><?= $employee["nama_karyawan"] ?></td>
                <td><?= $employee["nama_jabatan"] ?></td>
                <td><?= $employee["alamat_karyawan"] ?></td>
                <td><?= $employee["nomor_hp_karyawan"] ?></td>
                <td><?= $employee["status_karyawan"] ?></td>
                <td>
                  <a href="<?= BASEURL ?>/data_toko/edit_barang/<?= $item["id_barang"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/data_toko/hapus_barang/<?= $item["id_barang"] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>