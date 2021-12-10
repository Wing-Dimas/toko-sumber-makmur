<section>
      <div class="container data mt-5">
        <h2><?= $data["daftar"]?></h2>
        <div class="button mr-4 mt-5">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a href="<?= BASEURL ?>/data_toko/tambah/<?= $data["add"] ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="table-container mt-5">
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID barang</th>
        <th scope="col">Nama</th>
        <th scope="col">ID supplier</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Stok</th>
        <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

</div>
      </div>
    </section>