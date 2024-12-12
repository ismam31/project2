document.addEventListener('DOMContentLoaded', function () {
    const orderList = document.getElementById('order-list');
    const subtotalElement = document.getElementById('subtotal');
    const discountInput = document.getElementById('discount');
    const applyButton = document.querySelector('.input-group-text'); // Tombol Apply

    let orders = [];
    let subtotal = 0;
    let discount = 0;

    // Fungsi untuk render pesanan di UI
    function renderOrders() {
        orderList.innerHTML = '';
        orders.forEach((order) => {
            const div = document.createElement('div');
            div.className = 'd-flex justify-content-between border-bottom pb-2 mb-2';
            div.innerHTML = `
                <div class="d-flex align-items-center">
                    <img src="${order.image}" alt="${order.name}" style="width: 50px; object-fit: cover; border-radius: 5px; margin-right: 10px;">
                    <div>
                        <h6 class="mb-0">${order.name}</h6>
                        <small class="text-muted">Rp ${Number(order.price * order.quantity).toLocaleString()}</small>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-secondary btn-sm btn-decrease" data-id="${order.id}">-</button>
                    <input type="text" value="${order.quantity}" readonly style="width: 40px; text-align: center; margin: 0 5px;">
                    <button class="btn btn-outline-secondary btn-sm btn-increase" data-id="${order.id}">+</button>
                </div>
            `;
            orderList.appendChild(div);
        });

        // Update subtotal dengan diskon
        const discountedTotal = subtotal - discount;
        subtotalElement.textContent = `Rp ${Number(discountedTotal > 0 ? discountedTotal : 0).toLocaleString()}`;

        // Tambahkan event listener untuk tombol +/- setelah render ulang
        addQuantityListeners();
    }

    // Fungsi untuk menambahkan event listener pada tombol +/- setiap kali render ulang
    function addQuantityListeners() {
        document.querySelectorAll('.btn-increase').forEach((button) => {
            button.addEventListener('click', function () {
                const menuId = this.dataset.id;
                const order = orders.find((o) => o.id === menuId);
                if (order) {
                    order.quantity += 1;
                    subtotal += order.price;
                    renderOrders();
                }
            });
        });

        document.querySelectorAll('.btn-decrease').forEach((button) => {
            button.addEventListener('click', function () {
                const menuId = this.dataset.id;
                const orderIndex = orders.findIndex((o) => o.id === menuId);
                if (orderIndex > -1) {
                    const order = orders[orderIndex];
                    if (order.quantity > 1) {
                        // Kurangi quantity dan subtotal
                        order.quantity -= 1;
                        subtotal -= order.price;
                    } else {
                        // Hapus item dari daftar pesanan
                        subtotal -= order.price;
                        orders.splice(orderIndex, 1);
                    }
                    renderOrders();
                }
            });
        });
    }

    // Event listener untuk tambah pesanan
    document.querySelectorAll('.tambah-btn').forEach((button) => {
        button.addEventListener('click', function () {
            const menuId = this.dataset.id;
            const menuName = this.dataset.name;
            const menuPrice = parseInt(this.dataset.price);
            const menuImage = this.dataset.image;

            let order = orders.find((o) => o.id === menuId);
            if (order) {
                order.quantity += 1;
            } else {
                orders.push({ id: menuId, name: menuName, price: menuPrice, quantity: 1, image: menuImage });
            }

            subtotal += menuPrice;
            renderOrders();
        });
    });

    // Event listener untuk tombol Apply
    applyButton.addEventListener('click', function () {
        const discountValue = parseInt(discountInput.value) || 0;

        if (discountValue >= 0 && discountValue <= subtotal) {
            discount = discountValue;
            renderOrders();
        } else {
            alert('Diskon tidak valid!');
        }
    });
});
