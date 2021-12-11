<section>
    <div class="container mt-5 data">
        <h2>Edit Data Supplier</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/supplier/editSupplier" method="POST">
            <input value="<?= $data["id_supplier"] ?>" name="id" type="hidden">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input value="<?= $data["nama_supplier"] ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="<?= $data["alamat_supplier"] ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat.." required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $data["email_supplier"] ?>" name="email" type="email" class="form-control" id="email" placeholder="Masukan Email.." required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>