<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Karyawan</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/karyawan/tambahKaryawan" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor Hp.." required>
            </div>
            <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select name="id_jabatan" class="form-control" id="jabatan">
                     <?php foreach($data["jabatan"] as $item): ?>
                        <option value="<?= $item["id_jabatan"] ?>"><?= $item["nama_jabatan"] ?></option>
                     <?php endforeach ?>
                 </select>
              </div>
              <div class="form-group">
                <label for="status">Status Karyawan</label>
                <input name="status" type="text" class="form-control" id="no_hp" placeholder="Masukan status..">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>