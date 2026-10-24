<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Pendakian</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
</head>

<style>

    .container {
        max-width: 800px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2, h3 {
        text-align: center;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background: #2d3436;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.3s ease;
    }

    button:hover {
        background: rgb(0, 0, 0);
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background: #2d3436;
        color: white;
    }

    tr:nth-child(even) {
        background: #f9f9f9;
    }

    tr:hover {
        background: #f1f1f1;
    }

    #filterInput559 {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <h2>Formulir Pemesanan Paket Pendakian</h2>
        <form id="dynamicForm559">
            <label>Jalur:</label>
            <select id="jalur_pendakian559" name="jalur">
                <option value="Wekas">Wekas</option>
                <option value="Selo">Selo</option>
                <option value="Cuntel">Cuntel</option>
                <option value="Suwanting">Suwanting</option>
                <option value="Thekelan">Thekelan</option>
            </select>

            <label>Paket:</label>
            <select id="paket_pendakian559" name="paket">
                <option value="Reguler">Reguler</option>
                <option value="Premium">Premium</option>
                <option value="Keluarga">Keluarga</option>
            </select>

            <label>Durasi:</label>
            <input type="number" id="durasi559" name="durasi" min="1" max="7">

            <label>Fasilitas:</label>
            <input type="text" id="fasilitas559" name="fasilitas" placeholder="Contoh: Tenda, Porter">

            <label>Keberangkatan:</label>
            <input type="date" id="tanggal_berangkat559" name="keberangkatan">

            <label>Kepulangan:</label>
            <input type="date" id="tanggal_pulang559" name="kepulangan">

            <button type="submit">Submit</button>
        </form>

        <h3>Filter Data</h3>
        <input type="text" id="filterInput559" placeholder="Cari data...">
        
        <table id="tabel559">
            <thead>
                <tr>
                    <th>Jalur</th>
                    <th>Paket</th>
                    <th>Durasi</th>
                    <th>Fasilitas</th>
                    <th>Keberangkatan</th>
                    <th>Kepulangan</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <button type="button" id="pendaftaran2" class="submit-btn hidden">Lanjutkan ke Form Anggota</button>
    </div>

    <script>
        $(document).ready(function () {
            // Event submit form dengan AJAX
            $('#dynamicForm559').submit(function (e) {
                e.preventDefault(); // Mencegah reload halaman

                let formData = $(this).serialize(); // Ambil data form dalam format GET

                // Kirim data ke proses_form.php menggunakan AJAX
                $.ajax({
                    url: 'proses_form559.php', // File PHP untuk proses data
                    type: 'GET', // Metode pengiriman
                    data: formData, // Data yang dikirimkan
                    dataType: 'json', // Format data yang diharapkan
                    success: function (response) {
                        if (response.error) {
                            alert(response.error);
                        } else {
                            // Tambahkan data ke tabel
                            const newRow = `<tr>
                                <td>${response.jalur}</td>
                                <td>${response.paket}</td>
                                <td>${response.durasi} hari</td>
                                <td>${response.fasilitas}</td>
                                <td>${response.keberangkatan}</td>
                                <td>${response.kepulangan}</td>
                            </tr>`;
                            $('#tabel559 tbody').append(newRow);
                        }
                    },
                    error: function (xhr, status, error) {
        console.log("Error: ", status, error, xhr.responseText);
        alert('Terjadi kesalahan saat mengirim data.')
                    }
                });
            });

            // Filter pencarian
            $('#filterInput559').on('keyup', function () {
                var value = $(this).val().toLowerCase();
                $('#tabel559 tbody tr').filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            $("#pendaftaran2").click(function(){
            $("#Pendaftaran").load("./adamuas561.php");
            });
        });
    </script>
</body>
</html>
