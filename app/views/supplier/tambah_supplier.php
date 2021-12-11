<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Supplier</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/supplier/tambahSupplier" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email.." required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>