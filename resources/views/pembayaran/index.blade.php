<x-layout>
@extends('layouts.app') <!-- Gunakan layout AdminLTE -->

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h3>Daftar Pesanan</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h3>Detail Pembayaran</h3>
            <form id="paymentForm">
                <div class="mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="text" id="subtotal" class="form-control" value="Rp {{ number_format($subtotal, 0, ',', '.') }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">Diskon</label>
                    <input type="number" id="discount" name="discount" class="form-control" placeholder="Masukkan diskon">
                </div>
                <div class="mb-3">
                    <label for="payment_method" class="form-label">Metode Pembayaran</label>
                    <select id="payment_method" name="payment_method" class="form-select" required>
                        <option value="" selected>Pilih Metode Pembayaran</option>
                        <option value="cash">Cash</option>
                        <option value="bank_transfer">Transfer Bank</option>
                    </select>
                </div>
                <button type="button" id="payButton" class="btn btn-primary">Bayar</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Pembayaran -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Konfirmasi Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Metode Pembayaran: <span id="modalPaymentMethod"></span></p>
                <p>Total Pembayaran: <span id="modalTotal"></span></p>
                <p>Apakah Anda yakin ingin melanjutkan pembayaran?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="confirmPaymentButton" class="btn btn-primary">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('payButton').addEventListener('click', function () {
        const subtotal = ($subtotal); // Pastikan nilai subtotal diterima dari server
        const discount = parseFloat(document.getElementById('discount').value) || 0; // Pastikan nilai diskon angka
        const paymentMethod = document.getElementById('payment_method').value;
        const total = subtotal - discount;

        if (!paymentMethod) {
            alert('Pilih metode pembayaran!');
            return;
        }

        document.getElementById('modalPaymentMethod').innerText = paymentMethod === 'cash' ? 'Cash' : 'Transfer Bank';
        document.getElementById('modalTotal').innerText = `Rp ${total.toLocaleString('id-ID')}`;

        // Tampilkan modal
        const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'), {});
        paymentModal.show();
    });

    document.getElementById('confirmPaymentButton').addEventListener('click', function () {
        const formData = new FormData(document.getElementById('paymentForm'));

        fetch("{{ route('pembayaran.process') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}", // CSRF token Laravel
            },
            body: formData,
        })
        .then((response) => {
            if (!response.ok) {
                // Handle error response
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            if (data.status === 'success') {
                alert(data.message);
                location.reload(); // Refresh halaman setelah pembayaran
            } else {
                alert('Gagal memproses pembayaran!');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat memproses pembayaran.');
        });
    });
</script>
@endsection


</x-layout>
