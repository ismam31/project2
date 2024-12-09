let orders = [];
let subtotal = 0;

document.querySelectorAll('.tambah-btn').forEach(button => {
    const subtotalElement = document.getElementById('subtotal');
    button.addEventListener('click', function () {
        const name = this.getAttribute('data-name');
        const price = this.getAttribute('data-price');
        const image = this.getAttribute('data-image');

        // Buat elemen pesanan baru
        const orderList = document.getElementById('order-list');
        const orderItem = document.createElement('div');
        orderItem.classList.add('d-flex', 'align-items-center', 'border-bottom', 'pb-2', 'mb-2');
        
        orderItem.innerHTML = `
        <img src="${image}" alt="${name}" style="width: 50px; margin-right: 10px;">
        <div>
        <h6 class="mb-0">${name}</h6>
        <small class="text-muted">Rp ${Number(price).toLocaleString()}</small>
        </div>
        <div class="menu-quantity ml-auto border-outline-secondary">
        <div class="menu-actions d-flex">
        <button class="btn btn-outline-secondary btn-sm">-</button>
        <input type="text" value="1" readonly style="width: 50px; text-align: center;">
        <button class="btn btn-outline-secondary btn-sm">+</button>
                </div>
            </div>
        `;

        orderList.appendChild(orderItem);
    });
    document.querySelectorAll('.tambah-btn').forEach((button) => {
        button.addEventListener('click', function () {
            const menuId = this.dataset.id;
            const menuName = this.dataset.name;
            const menuPrice = parseInt(this.dataset.price);

            let order = orders.find((o) => o.id === menuId);
            if (order) {
                order.quantity += 1;
            } else {
                orders.push({ id: menuId, name: menuName, price: menuPrice, quantity: 1 });
            }

            subtotal += menuPrice;
            renderOrders();
        });
    });
});


// let orders = [];
// let subtotal = 0;

// document.addEventListener('DOMContentLoaded', function () {
//     const orderList = document.getElementById('order-list');
//     const subtotalElement = document.getElementById('subtotal');

//     // Fungsi untuk render pesanan di UI
//     function renderOrders() {
//         div.innerHTML = '';
//         orders.forEach((order) => {
//             const div = document.createElement('div');
//             div.className = 'form-group d-flex align-items-center mr-auto border border-outline-secondary p-1';
//             div.innerHTML = `
//                 <img src="{{ asset('storage/menus/nasi_goreng.jpg')}}" style="width: 100px;" alt="Menu Image">
//                 <div class="menu-details">
//                     <h6 class="mb-1">${order.name}</h6>
//                     <h6 class="text-success mt-1">Rp 10.000</h6>
//                 </div>
//                 <div class="menu-quantity ml-auto border-outline-secondary">
//                     <div class="menu-actions d-flex">
//                         <button class="btn btn-outline-secondary btn-sm">-</button>
//                         <input type="text" value="${order.quantity}" readonly style="width: 50px; text-align: center;">
//                         <button class="btn btn-outline-secondary btn-sm">+</button>
//                     </div>
//                 </div>
//                 ${order.name} - Rp. ${order.price} x ${order.quantity}
//                 <button class="btn btn-danger btn-sm btn-remove-order" data-id="${order.id}">&times;</button>
//             `;
//             orderList.appendChild(li);
//         });

//         subtotalElement.textContent = subtotal;

//         // Event listener untuk hapus pesanan
//         document.querySelectorAll('.btn-remove-order').forEach((button) => {
//             button.addEventListener('click', function () {
//                 const menuId = this.dataset.id;
//                 const orderIndex = orders.findIndex((o) => o.id === menuId);
//                 if (orderIndex > -1) {
//                     subtotal -= orders[orderIndex].price * orders[orderIndex].quantity;
//                     orders.splice(orderIndex, 1);
//                 }
//                 renderOrders();
//             });
//         });
//     }

//     // Event listener untuk tambah pesanan
//     document.querySelectorAll('.btn-add-menu').forEach((button) => {
//         button.addEventListener('click', function () {
//             const menuId = this.dataset.id;
//             const menuName = this.dataset.name;
//             const menuPrice = parseInt(this.dataset.price);

//             let order = orders.find((o) => o.id === menuId);
//             if (order) {
//                 order.quantity += 1;
//             } else {
//                 orders.push({ id: menuId, name: menuName, price: menuPrice, quantity: 1 });
//             }

//             subtotal += menuPrice;
//             renderOrders();
//         });
//     });
// });
