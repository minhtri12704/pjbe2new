<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý Đơn hàng</title>
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
    background-color: #2c2c2e;
    color: #fff0f6;
    margin: 0;
    padding: 0;
    }

    header {
        background-color: #ffb6c1;
    padding: 20px;
    text-align: center;
    color: #2c2c2e;
    }

    h1 {
      margin: 0;
    }

    .container {
      padding: 20px;
      max-width: 900px;
      margin: auto;
    }

    table {
        width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #3c3c3f;
    border-radius: 10px;
    overflow: hidden;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #555;
    }

    th {
        background-color: #ffb6c1;
        color: #2c2c2e;
    }

    tr:hover {
    background-color: #4a4a4d;
  }

  form {
    background-color: #3c3c3f;
    padding: 20px;
    margin-top: 20px;
    border-radius: 10px;
  }

  input, select {
    padding: 10px;
    margin: 8px 0;
    width: 100%;
    border: none;
    border-radius: 4px;
    background-color: #555;
    color: #fff0f6;
  }

  button {
    background-color: #ffb6c1;
    color: #2c2c2e;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold;
  }

  button:hover {
    background-color: #ff80ab;
  }

  .actions button {
    margin-right: 5px;
  }
  </style>
</head>
<body>
  <header>
    <h1>Quản lý Đơn hàng</h1>
  </header>

  <div class="container">
    <form id="orderForm">
      <h2>Thêm / Cập nhật Đơn hàng</h2>
      <input type="text" id="orderName" placeholder="Tên đơn hàng" required>
      <input type="text" id="customerName" placeholder="Tên khách hàng" required>
      <input type="number" id="quantity" placeholder="Số lượng" required>
      <button type="submit">Lưu</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Tên đơn hàng</th>
          <th>Khách hàng</th>
          <th>Số lượng</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody id="orderList">
      </tbody>
    </table>
  </div>

  <script>
    let orders = [];
    let editIndex = -1;

    const form = document.getElementById('orderForm');
    const orderList = document.getElementById('orderList');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const orderName = document.getElementById('orderName').value;
      const customerName = document.getElementById('customerName').value;
      const quantity = document.getElementById('quantity').value;

      const order = { orderName, customerName, quantity };

      if (editIndex === -1) {
        orders.push(order);
      } else {
        orders[editIndex] = order;
        editIndex = -1;
      }

      form.reset();
      renderOrders();
    });

    function renderOrders() {
      orderList.innerHTML = '';
      orders.forEach((order, index) => {
        const row = document.createElement('tr');

        row.innerHTML = `
          <td>${index + 1}</td>
          <td>${order.orderName}</td>
          <td>${order.customerName}</td>
          <td>${order.quantity}</td>
          <td class="actions">
            <button onclick="editOrder(${index})">Sửa</button>
            <button onclick="deleteOrder(${index})">Xóa</button>
          </td>
        `;

        orderList.appendChild(row);
      });
    }

    function editOrder(index) {
      const order = orders[index];
      document.getElementById('orderName').value = order.orderName;
      document.getElementById('customerName').value = order.customerName;
      document.getElementById('quantity').value = order.quantity;
      editIndex = index;
    }

    function deleteOrder(index) {
      if (confirm("Bạn có chắc muốn xóa đơn hàng này?")) {
        orders.splice(index, 1);
        renderOrders();
      }
    }
  </script>
</body>
</html>
