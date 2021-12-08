<div class="container mt-5">

    
    <!-- <div class="row">
        <div class="col-lg-6">
            <?php //Flasher::flash();?>
        </div>
    </div> -->

    <?= Flasher::flash() ?>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Data Mahasiswa</button>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Cari mahasiswa.." aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Data Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data["mhs"] as $mhs) :?>
                    <li class="list-group-item">
                        <?= $mhs["nama"]?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs["id"];?>" class="badge badge-danger float-right ml-1 tombol-hapus">Hapus</a>
                        <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs["id"];?>" class="badge badge-success float-right ml-1 tombolUbahData" data-toggle="modal" data-target="#formModal" data-id=<?= $mhs["id"];?>>Ubah</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs["id"];?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>







<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul-modal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?= BASEURL ?>/mahasiswa/tambah" method="POST">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input name="nim" type="number" class="form-control" id="nim" placeholder="Masukan nim">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Masukan email">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Example select</label>
                    <select name="jurusan" class="form-control" id="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        
                    </select>
                </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
    </div>
  </div>
</div>
