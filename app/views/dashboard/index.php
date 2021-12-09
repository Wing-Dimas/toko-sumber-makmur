<div class="container mt-5">
      <section class="top-wrapper">
        <h1>Dashboard</h1>
      </section>

      <hr />

      <section class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-sm-12 col-md-6 mt-5">
              <a href="<?= BASEURL ?>/data_toko/barang" class="card barang">
                <div class="card-heading">
                  <div class="icon">
                    <i class="fas fa-box-open"></i>
                  </div>
                  <div class="info">
                    <h1 class="value"><?= $data["barang"]["stok"] ?></h1>
                    <span class="text">Stok Barang</span>
                  </div>
                </div>
                <div class="card-body">
                  <span>Lihat Detail</span>
                  <span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-sm-12 col-md-6 mt-5">
              <a href="<?= BASEURL ?>/data_toko/barang" class="card barang-keluar">
                <div class="card-heading">
                  <div class="icon">
                    <i class="fas fa-arrow-up"></i>
                  </div>
                  <div class="info">
                    <h1 class="value">10</h1>
                    <span class="text">Barang Keluar hari ini</span>
                  </div>
                </div>
                <div class="card-body">
                  <span>Lihat Detail</span>
                  <span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-sm-12 col-md-6 mt-5">
              <a href="<?= BASEURL ?>/data_toko/pelanggan" class="card pelanggan">
                <div class="card-heading">
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="info">
                    <h1 class="value"><?= $data["pelanggan"]["total"] ?></h1>
                    <span class="text">Jumlah Pelanggan</span>
                  </div>
                </div>
                <div class="card-body">
                  <span>Lihat Detail</span>
                  <span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-sm-12 col-md-6 mt-5">
              <a href="<?= BASEURL ?>/data_toko/pemesanan" class="card income">
                <div class="card-heading">
                  <div class="icon">
                    <i class="fas fa-coins"></i>
                  </div>
                  <div class="info">
                    <h1 class="value">Rp <?= $data["income"] ?></h1>
                    <span class="text">Income</span>
                  </div>
                </div>
                <div class="card-body">
                  <span>Lihat Detail</span>
                  <span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-12 col-md-6 mt-5">
              <a href="<?= BASEURL ?>/data_toko/karyawan" class="card karyawan">
                <div class="card-heading">
                  <div class="icon">
                    <i class="fas fa-user-tie"></i>
                  </div>
                  <div class="info">
                    <h1 class="value"><?= $data["karyawan"]["total"] ?></h1>
                    <span class="text">Jumlah Karyawan</span>
                  </div>
                </div>
                <div class="card-body">
                  <span>Lihat Detail</span>
                  <span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
              </a>
            </div>
        </div>
      </section>
    </div>