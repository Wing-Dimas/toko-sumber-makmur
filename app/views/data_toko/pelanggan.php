
<?= Flasher::flash() ?>

<section>
  <div class="container data mt-5">
    <h2><?= $data["daftar"]?></h2>
    <div class="button mr-4 mt-5">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <a href="<?= BASEURL ?>/pelanggan/tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
    </div>
    <div class="table-container mt-5">
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
                        <a href="<?= BASEURL ?>/pelanggan/edit/<?= $customer["id_pelanggan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?= BASEURL ?>/pelanggan/hapus/<?= $customer["id_pelanggan"] ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
                        <a href="<?= BASEURL ?>/pelanggan/detail_pemesanan/<?= $customer["id_pelanggan"] ?>" class="btn btn-primary btn-sm"> Detail Pemesanan</a>
                      </td>
                  </tr>
              <?php endforeach;?>
          </tbody>
      </table>

      </div>
  </div>
</section>