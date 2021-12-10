<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Barang</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/pelanggan/tambahPelanggan" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor HP" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>