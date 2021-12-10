// $(function () {
//   $(".tombolTambahData").on("click", function () {
//     $("#judul-modal").html("Tambah Data Mahasiswa");
//     $(".modal-footer button[type=submit]").html("Tambah Data");
//   });

//   $(".tombolUbahData").on("click", function () {
//     $("#judul-modal").html("Ubah Data Mahasiswa");
//     $(".modal-footer button[type=submit]").html("Ubah Data");
//     $(".modal-body form").attr("action", "http://localhost/belajarmvc/public/mahasiswa/ubah");

//     const id = $(this).data("id");

//     $.ajax({
//       url: "http://localhost/belajarmvc/public/mahasiswa/getUbah",
//       data: { id: id },
//       method: "post",
//       dataType: "json",
//       success: function (data) {
//         $("#nama").val(data.nama);
//         $("#nim").val(data.nim);
//         $("#email").val(data.email);
//         $("#jurusan").val(data.jurusan);
//         $("#id").val(data.id);
//       },
//     });
//   });
// });

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
