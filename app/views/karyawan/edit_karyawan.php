<section>
    <div class="container mt-5 data">
        <h2>Edit Data Karyawan</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/karyawan/editKaryawan" method="POST">
            <input value="<?= $data["data"]["id_karyawan"] ?>" name="id_karyawan" type="hidden">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input value="<?= $data["data"]["nama_karyawan"] ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $data["data"]["alamat_karyawan"] ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input value="<?= $data["data"]["nomor_hp_karyawan"] ?>" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor Hp.." required>
            </div>
            <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select value="<?= $data["data"]["id_jabatan"] ?>" name="id_jabatan" class="form-control" id="jabatan">
                     <?php foreach($data["jabatan"] as $item): ?>
                        <option value="<?= $item["id_jabatan"] ?>"><?= $item["nama_jabatan"] ?></option>
                     <?php endforeach ?>
                 </select>
              </div>
              <div class="form-group">
                <label for="status">Status Karyawan</label>
                <input value="<?= $data["data"]["status_karyawan"] ?>" name="status" type="text" class="form-control" id="no_hp" placeholder="Masukan status..">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>