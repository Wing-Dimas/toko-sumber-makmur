<?= Flasher::flash() ?>

<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="button mr-4 mt-5">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a href="<?= BASEURL ?>/karyawan/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="table-container mt-5">
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
                  <a href="<?= BASEURL ?>/karyawan/edit/<?= $employee["id_karyawan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/karyawan/hapus/<?= $employee["id_karyawan"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

</div>
      </div>
    </section>