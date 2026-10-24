<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendakian Gunung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <style>
        body {
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            text-align: center;
            color: #2d3436;
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: 600;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
            margin: 20px auto;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            display: grid;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            color: #555;
        }

        input, select, button {
            padding: 14px;
            font-size: 16px;
            border: 1px solid #dfe6e9;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }

        input:focus, select:focus {
            border-color: rgb(0, 0, 0);
            box-shadow: 0 0 12px rgb(46, 46, 46);
            background-color: #fff;
        }

        button {
            background-color: rgb(46, 46, 46);
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: transform 0.2s, background-color 0.3s;
        }

        button:hover {
            background-color: rgb(0, 0, 0);
            transform: scale(1.05);
        }

        .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .table-container {
            margin-top: 30px;
            animation: slideUp 1s ease-in-out;
            display: flex;
            flex-direction: column;
        }

        .filter-section {
            position: sticky;
            top: 0;
            background-color: white;
            padding: 10px 0;
            z-index: 10;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .table-section {
            overflow-x: auto;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }

        th, td {
            padding: 6px;
            text-align: left;
            border-bottom: 1px solid #dfe6e9;
        }

        th {
            background-color: rgb(0, 0, 0);
            color: white;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }

        td {
            background-color: #f9f9f9;
            word-wrap: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        td.email-cell {
            max-width: 120px;
        }
        td.provinsi-cell {
            max-width: 120px;
        }
        td.nama-cell {
            max-width: 120px;
        }
        td.kota-cell {
            max-width: 120px;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover td {
            background-color: #dfe6e9;
            color: #2d3436;
            transition: background-color 0.3s ease;
        }

        #filter577 {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #dfe6e9;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
            position: relative;
            background-color: white;
        }

        #filter577:focus {
            border-color: rgb(0, 0, 0);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }

        .alert {
            color: #d63031;
            background-color: #ffe6e6;
            padding: 12px;
            border-radius: 8px;
            margin-top: 10px;
            font-size: 14px;
            display: none;
        }

        .success-message {
            color: #27ae60;
            background-color: #e6ffe6;
            padding: 12px;
            border-radius: 8px;
            margin-top: 10px;
            font-size: 14px;
            display: none;
        }

        .error-message {
            color: #d63031;
            background-color: #ffe6e6;
            padding: 12px;
            border-radius: 8px;
            margin-top: 10px;
            font-size: 14px;
            display: none;
        }

        .submit-btn {
            background-color: rgb(46, 46, 46);
            color: white;
            gap: 10px;
        }

        .submit-btn:hover {
            background-color: rgb(0, 0, 0);
        }

        button.edit-btn, button.delete-btn {
            background: none;
            border: none;
            color: rgb(0, 0, 0);
            cursor: pointer;
            font-size: 18px;
            margin: 0 5px;
        }

        button.edit-btn:hover, button.delete-btn:hover {
            color: #d63031;
        }

        button i {
            font-size: 18px;
            vertical-align: middle;
        }
        .buttom-style {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pendakian Gunung</h2>
        <form id="form561">
            <label for="nama561">Nama Anggota:</label>
            <input type="text" id="nama561" required><br>
            
            <label for="barang561">Barang yang Dibawa:</label>
            <input type="text" id="barang561" required><br>
            
            <label for="nomor561">Nomor HP:</label>
            <input type="text" id="nomor561" required><br>
            
            <label for="umur561">Umur:</label>
            <input type="number" id="umur561" required><br>
            
            <label for="alamat561">Alamat:</label>
            <input type="text" id="alamat561" required><br>

            <label for="tanggal561">Tanggal Pendakian:</label>
            <input type="date" id="tanggal561" required><br>

            <label for="kelamin561">Jenis Kelamin:</label>
            <select id="kelamin561" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            <div class="buttom-style">

                <button type="submit">Lanjutkan</button>
                <button type="button" id="TambahAttr">Atribut</button>
            </div>

        </form>

        <div class="table-container">
            <h3>Filter Data:</h3>
            <input type="text" id="filter561" onkeyup="filterTable()" placeholder="Cari Nama...">
            
            <h3>Data Pendakian</h3>
            <table id="table561">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Barang</th>
                        <th>Nomor HP</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Tanggal Pendakian</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <button type="button" id="pendaftaran4" class="submit-btn hidden">Lanjutkan ke Form Anggota</button>
        <div id="error-message" class="alert" style="display:none;"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#form561').on('submit', function(event) {
                event.preventDefault();
                
                var nama = $('#nama561').val();
                var barang = $('#barang561').val();
                var nomor = $('#nomor561').val();
                var umur = $('#umur561').val();
                var alamat = $('#alamat561').val();
                var tanggal = $('#tanggal561').val();
                var kelamin = $('#kelamin561').val();
                
                var queryString = '?nama=' + encodeURIComponent(nama) +
                                '&barang=' + encodeURIComponent(barang) +
                                '&nomor=' + encodeURIComponent(nomor) +
                                '&umur=' + encodeURIComponent(umur) +
                                '&alamat=' + encodeURIComponent(alamat) +
                                '&tanggal=' + encodeURIComponent(tanggal) +
                                '&kelamin=' + encodeURIComponent(kelamin);

                // Panggil `process.php` untuk memproses data
                $.get('process561.php' + queryString, function(response) {
                    var data = JSON.parse(response);

                    if (data.error) {
                        $('#error-message').text(data.error).show();
                    } else {
                        var newRow = `<tr data-nama="${data.nama}" data-barang="${data.barang}" data-nomor="${data.nomor}" data-umur="${data.umur}" data-alamat="${data.alamat}" data-tanggal="${data.tanggal}" data-kelamin="${data.kelamin}">
                                        <td>${data.nama}</td>
                                        <td>${data.barang}</td>
                                        <td>${data.nomor}</td>
                                        <td>${data.umur}</td>
                                        <td>${data.alamat}</td>
                                        <td>${data.tanggal}</td>
                                        <td>${data.kelamin}</td>
                                    </tr>`;
                        $('#table561 tbody').append(newRow);
                    }

                    $('#form561')[0].reset();
                });
            });
        });

        function filterTable() {
            var input = $('#filter561').val().toLowerCase();
            $('#table561 tbody tr').each(function() {
                var nama = $(this).find('td').eq(0).text().toLowerCase();
                if (nama.indexOf(input) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
        $("#TambahAttr").click(function(){
        $("tbody").css("background-color", "#2d3436");
        $("tbody").css("color", "red");
    });

    $("#pendaftaran4").click(function(){
       $("#Pendaftaran").load("formterakhir.php");
     });
    </script>
</body>
</html>
