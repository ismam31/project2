$(function () {
    $(document).on('click', '#deleteButton', function (e) {
        e.preventDefault(); // Hentikan default button action

        var form = $(this).closest('form'); // Ambil form terdekat tombol

        Swal.fire({
            title: "Apakah kamu yakin ?",
            text: "Anda tidak akan dapat mengembalikan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Batal",
            confirmButtonText: "Ya, hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan SweetAlert kedua setelah confirm
                Swal.fire({
                    title: "Hapus!",
                    text: "Data anda telah dihapus.",
                    icon: "Berhasil",
                    confirmButtonText: "OK",
                }).then(() => {
                    form.submit(); // Submit form manual setelah popup kedua selesai
                });
            }
        });
    });
});
$(function () {
    $(document).on('click', '#realtime_button', function (e) {
        Swal.fire({
            icon: "warning",
            title: "PERINGATAN",
            text: "Sistem Mendeteksi Adanya Kebocoran Gas di Bagian Dapur!",
        });
    });
});
