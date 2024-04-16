<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pesanan - CoffeBella</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Warna latar belakang halaman */
            margin: 50px;
            padding: 0px;
            background-image: url('https://media.istockphoto.com/id/1338854185/vector/chocolate-wave-abstract-background-vector-illustration.jpg?s=612x612&w=0&k=20&c=ND21ibFxR-T3vvIwzmpERbC0mXK_Iy9RzRs1ZKbEp48=');
            background-size: cover;
            background-position: center;
            justify-content: center;
            align-items: center;
            height: 100vh;
        
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang konten */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .heading h2 {
            color: #5d4037; /* Warna teks judul */
            font-size: 32px;
            margin: 0;
            padding: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #5d4037; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4d2e22; /* Warna hover tombol */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #5d4037; /* Warna latar belakang header tabel */
            color: #fff; /* Warna teks header tabel */
        }
    </style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>
<div class="container">
    <!-- Container untuk formulir pemesanan -->
    <div class="heading">
        <!-- Bagian judul -->
        <h2>Buat Pesanan</h2>
        <!-- Judul -->
    </div>
    <form id="orderForm">
        <!-- Formulir untuk mengirim pesanan -->
        <div class="form-group">
            <!-- Grup formulir untuk nama produk -->
            <label for="productName">Nama Produk:</label>
            <!-- Label untuk input nama produk -->
            <input type="text" id="productName" name="productName" required>
            <!-- Input untuk nama produk -->
        </div>
        <div class="form-group">
            <!-- Grup formulir untuk harga produk -->
            <label for="price">Harga:</label>
            <!-- Label untuk input harga produk -->
            <input type="number" id="price" name="price" required>
            <!-- Input untuk harga produk -->
        </div>
        <div class="form-group">
            <!-- Grup formulir untuk jumlah produk -->
            <label for="quantity">Jumlah:</label>
            <!-- Label untuk input jumlah produk -->
            <input type="number" id="quantity" name="quantity" required>
            <!-- Input untuk jumlah produk -->
        </div>
        <button type="submit">Tambah Pesanan</button>
        <!-- Tombol submit untuk menambahkan pesanan -->
    </form>
    <table>
        <!-- Tabel untuk menampilkan pesanan -->
        <thead>
            <!-- Bagian header tabel -->
            <tr>
                <!-- Baris tabel untuk header -->
                <th>Nama Produk</th>
                <!-- Header untuk nama produk -->
                <th>Harga</th>
                <!-- Header untuk harga produk -->
                <th>Jumlah</th>
                <!-- Header untuk jumlah produk -->
                <th>Aksi</th>
                <!-- Header untuk aksi (edit/hapus) -->
            </tr>
        </thead>
        <tbody id="orderList">
            <!-- Badan tabel untuk daftar pesanan -->
            <!-- Daftar pesanan akan ditampilkan di sini -->
            <!-- Placeholder untuk daftar pesanan -->
        </tbody>
    </table>
</div>

<!-- JavaScript untuk menambahkan fungsionalitas CRUD -->
<!-- JavaScript untuk menambahkan fungsionalitas tambah, baca, ubah, hapus -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Event listener ketika DOM telah dimuat
        const orderForm = document.getElementById('orderForm');
        // Dapatkan referensi ke formulir pemesanan
        const orderList = document.getElementById('orderList');
        // Dapatkan referensi ke badan tabel daftar pesanan

        orderForm.addEventListener('submit', function(event) {
            // Event listener untuk pengiriman formulir
            event.preventDefault();
            // Menghentikan perilaku pengiriman formulir bawaan

            const productName = document.getElementById('productName').value;
            // Dapatkan nilai input nama produk
            const price = document.getElementById('price').value;
            // Dapatkan nilai input harga
            const quantity = document.getElementById('quantity').value;
            // Dapatkan nilai input jumlah

            const newRow = `
                <!-- Buat baris baru dengan detail pesanan -->
                <tr>
                    <!-- Baris tabel untuk pesanan baru -->
                    <td>${productName}</td>
                    <!-- Tampilkan nama produk -->
                    <td>${price}</td>
                    <!-- Tampilkan harga produk -->
                    <td>${quantity}</td>
                    <!-- Tampilkan jumlah produk -->
                    <td>
                        <!-- Tombol aksi untuk edit/hapus -->
                        <button onclick="editRow(this)">Edit</button>
                        <!-- Tombol edit -->
                        <button onclick="deleteRow(this)">Hapus</button>
                        <!-- Tombol hapus -->
                    </td>
                </tr>
            `;

            orderList.innerHTML += newRow;
            // Tambahkan baris baru ke daftar pesanan
            orderForm.reset();
            // Reset input formulir setelah pengiriman
        });

        function editRow(button) {
            // Fungsi untuk mengedit baris
            const row = button.parentElement.parentElement;
            // Dapatkan baris yang berisi tombol yang diklik
            const cells = row.querySelectorAll('td');
            // Dapatkan semua sel dalam baris

            const productName = cells[0].innerText;
            // Dapatkan nama produk dari sel pertama
            const price = cells[1].innerText;
            // Dapatkan harga dari sel kedua
            const quantity = cells[2].innerText;
            // Dapatkan jumlah dari sel ketiga

            document.getElementById('productName').value = productName;
            // Tetapkan nilai input nama produk dengan nama yang didapat
            document.getElementById('price').value = price;
            // Tetapkan nilai input harga dengan harga yang didapat
            document.getElementById('quantity').value = quantity;
            // Tetapkan nilai input jumlah dengan jumlah yang didapat

            row.remove();
            // Hapus baris dari daftar pesanan setelah diedit
        }

        function deleteRow(button) {
            // Fungsi untuk menghapus baris
            const row = button.parentElement.parentElement;
            // Dapatkan baris yang berisi tombol yang diklik
            row.remove();
            // Hapus baris dari daftar pesanan
        }
    });
</script>

</body>
</html>
