$(function () {
    $(document).on('click', '#deleteButton', function (e) {
        e.preventDefault(); // Hentikan default button action

        var form = $(this).closest('form'); // Ambil form terdekat tombol

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan SweetAlert kedua setelah confirm
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success",
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
