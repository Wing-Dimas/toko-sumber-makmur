<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Barang</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/barang/tambahBarang" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                    <label for="supplier">Supplier</label>
                    <select name="id_supplier" class="form-control" id="supplier">
                       <?php foreach($data["supplier"] as $supplier): ?>
                          <option value="<?= $supplier["id_supplier"] ?>"><?= $supplier["nama_supplier"] ?></option>
                       <?php endforeach ?>
                   </select>
                </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukan harga.." required>
              </div>
              <div class="form-group">
                <label for="stok">Stok</label>
                <input name="stok" type="number" class="form-control" id="stok" placeholder="Masukan Stok.." required>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>