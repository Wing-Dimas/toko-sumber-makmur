<?php Flasher::flash() ?>

<section>
    <div class="container mt-5 data">
        <h2>Tambah Data Supplier</h2>
        <div class="container pt-5">
            <form action="<?= BASEURL ?>/pemesanan/tambahPemesanan" method="POST">
            <div class="form-group">
                <label for="pelanggan">Pelanggan</label>
                <select name="id_pelanggan" class="form-control" id="pelanggan">
                    <?php foreach($data["pelanggan"] as $customer): ?>
                        <option value="<?= $customer["id_pelanggan"] ?>"><?= $customer["nama_pelanggan"] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <?php for($i = 0; $i < $data["jumlah"]; $i++):?>

                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="barang">Barang</label>
                      <select name="id_barang[]" class="form-control" id="barang">
                          <?php foreach($data["barang"] as $item): ?>
                              <option value="<?= $item["id_barang"] ?>"><?= $item["nama_barang"] ?></option>
                          <?php endforeach ?>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="qty">Quantity</label>
                      <input name="qty[]" type="number" class="form-control" id="qty" placeholder="Masukan jumlah barang" required>
                  </div>
              </div>
            <?php endfor;?>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>