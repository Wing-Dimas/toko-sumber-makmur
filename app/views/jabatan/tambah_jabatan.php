<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Jabatan</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/jabatan/tambahJabatan" method="POST">
              <div class="form-group">
                <label for="nama">Nama Jabatan</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="gaji">Gaji</label>
                <input name="gaji" type="text" class="form-control" id="gaji" placeholder="Masukan Gaji.." required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>