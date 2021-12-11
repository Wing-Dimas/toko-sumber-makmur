<section>
    <div class="container mt-5 data">
        <h2>Edit Data Barang</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/barang/editBarang" method="POST">
            <input value="<?= $data["barang"]["id_barang"] ?>" name="id_barang" type="hidden">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input value="<?= $data["barang"]["nama_barang"] ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama.." required>
              </div>
              <div class="form-group">
                    <label for="supplier">Supplier</label>
                    <select value="<?= $data["barang"]["id_supplier"] ?>" name="id_supplier" class="form-control" id="supplier">
                       <?php foreach($data["supplier"] as $supplier): ?>
                          <option value="<?= $supplier["id_supplier"] ?>"><?= $supplier["nama_supplier"] ?></option>
                       <?php endforeach ?>
                   </select>
                </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input value="<?= $data["barang"]["harga_barang"] ?>" name="harga" type="number" class="form-control" id="harga" placeholder="Masukan harga.." required>
              </div>
              <div class="form-group">
                <label for="stok">Stok</label>
                <input value="<?= $data["barang"]["stok_barang"] ?>" name="stok" type="number" class="form-control" id="stok" placeholder="Masukan Stok.." required>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>