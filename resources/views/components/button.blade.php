<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h5>Subtotal: <span id="subtotal"> 0</span></h5>
            <div class="form-group">
                <label for="discount">Discount</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="discount" placeholder="Enter discount">
                    <div class="input-group-prepend">
                        <button class="input-group-text">
                            Apply
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="jenisPesanan">Kategori</label>
                <div class="input-group">
                    <select class="form-control" name="pembayaran" id="metodeFormControlSelect1">
                        <option value="" disabled selected>Pilih Pembayaran</option>
                        <option value="Dine In">DANA</option>
                        <option value="Take Away">OVO</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary flex-grow-1 mx-1" id="pay-button">Bayar</button>
            <button class="btn btn-outline-primary flex-grow-1 mx-1" id="save-button">Simpan</button>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('js/menu.js') }}"></script>
@endpush