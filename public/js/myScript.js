$(function () {
  const flash_table = $(".cek-alert").data("table");
  const flash_pesan = $(".cek-alert").data("pesan");
  const flash_aksi = $(".cek-alert").data("aksi");
  const flash_tipe = $(".cek-alert").data("tipe");

  if (flash_pesan) {
    Swal.fire({
      title: `Data ${flash_table}`,
      text: `${flash_pesan} ${flash_aksi}`,
      icon: `${flash_tipe}`,
    });
  }
});

$(".tombol-hapus").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Apakah kamu yakin?",
    text: "Kamu tidak bisa mengembalikan data yang di hapus",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus",
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
});

$(function () {
  $(".tombol-tambah-pemesanan").on("click", async function (e) {
    e.preventDefault();
    let href = $(this).attr("href");
    const { value: jumlah } = await Swal.fire({
      title: "Mauskan jumlah barang",
      input: "text",
      inputLabel: "Jumlah barang",
      inputPlaceholder: "Masukan Jumlah",
      showCancelButton: true,
    });

    if (jumlah) {
      href += "/" + jumlah;
      document.location.href = href;
    }
  });
});
