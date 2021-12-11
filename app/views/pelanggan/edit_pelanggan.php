<section>
    <div class="container mt-5 data">
        <h2>Edit Data</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/pelanggan/editPelanggan" method="POST">
            <input type="hidden" name="id_pelanggan" value="<?= $data["id_pelanggan"] ?>">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input value="<?= $data["nama_pelanggan"] ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $data["alamat_pelanggan"] ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input value="<?= $data["nomor_hp_pelanggan"] ?>" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor HP" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>