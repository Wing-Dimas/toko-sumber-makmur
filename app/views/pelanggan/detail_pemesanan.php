<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="table-container mt-5">
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID Pembayaran</th>
        <th scope="col">Tanggal Pembayaran</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Qty</th>
        <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data["customer"] as $customer): ?>
            <tr>
                <th scope="row"><?= $customer["id_pembayaran"] ?></th>
                <td><?= $customer["tanggal_pembayaran"] ?></td>
                <td><?= $customer["nama_barang"] ?></td>
                <td><?= $customer["qty"] ?></td>
                <td><?= $customer["total"] ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

</div>
      </div>
    </section>