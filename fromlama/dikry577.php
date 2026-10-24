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
            gap: 20px;
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
            gap: 20px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">Form Pendakian Gunung</h2>
        <div id="error-message" class="error-message"></div>
        <div id="success-message" class="success-message"></div>

        <form id="form577" novalidate>
            <div class="form-group">
                <label for="jenis_kewarganegaraan">Jenis Kewarganegaraan:<span class="required" style="color: #d63031;">*</span></label>
                <select id="jenis_kewarganegaraan" required>
                    <option value="">Pilih Kewarganegaraan</option>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:<span class="required" style="color: #d63031;">*</span></label>
                <select id="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email:<span class="required" style="color: #d63031;">*</span></label>
                <input type="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="usia">Usia:<span class="required" style="color: #d63031;">*</span></label>
                <input type="number" id="usia" required min="18">
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi:<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="provinsi" required>
            </div>

            <div class="form-group">
                <label for="kota_kabupaten">Kota/Kabupaten (Sesuai KTP):<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="kota_kabupaten" required>
            </div>

            <div class="button-group">
                <button type="submit" class="submit-btn">Daftar</button>
                <button type="reset" class="clear-btn">Reset</button>
            </div>
        </form>
        <br>
        <div class="table-container">
            <div class="filter-section">
                <h3>Filter Data Pendaki</h3>
                <input type="text" id="filter577" placeholder="Cari berdasarkan nama...">
            </div>
            
            <div class="table-section">
                <table id="table577">
                    <thead>
                        <tr>
                            <th>Warga Negara</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Usia</th>
                            <th>Provinsi</th>
                            <th>Kota/Kabupaten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <button type="button" id="pendaftaran2" class="submit-btn hidden">Lanjutkan ke Form Anggota</button>
    </div>

    <script>
        $(document).ready(function() {
    $('#form577').on('submit', function(event) {
        event.preventDefault();
        
        var warga = $('#jenis_kewarganegaraan').val();
        var jeniskelamin = $('#jenis_kelamin').val();
        var namalengkap = $('#nama_lengkap').val(); 
        var email = $('#email').val();
        var usia = $('#usia').val();
        var provinsi = $('#provinsi').val();
        var kota = $('#kota_kabupaten').val();
        
        var queryString = '?warga=' + encodeURIComponent(warga) +
                        '&jeniskelamin=' + encodeURIComponent(jeniskelamin) +
                        '&namalengkap=' + encodeURIComponent(namalengkap) +
                        '&email=' + encodeURIComponent(email) +
                        '&usia=' + encodeURIComponent(usia) +
                        '&provinsi=' + encodeURIComponent(provinsi) +
                        '&kota=' + encodeURIComponent(kota); 

        $.get('../proses/proses577.php' + queryString, function(response) {
            var data = JSON.parse(response);

            if (data.error) { 
                $('#error-message').text(data.error).show();
            } else {
                var newRow = `<tr data-warga="${data.warga}" data-jeniskelamin="${data.jeniskelamin}" data-namalengkap="${data.namalengkap}" data-email="${data.email}" data-usia="${data.usia}" data-provinsi="${data.provinsi}" data-kota="${data.kota}">
                                <td>${data.warga}</td>
                                <td>${data.jeniskelamin}</td>
                                <td class="nama-cell">${data.namalengkap}</td>
                                <td class="email-cell">${data.email}</td>
                                <td>${data.usia}</td>
                                <td class="provinsi-cell">${data.provinsi}</td>
                                <td class="kota-cell">${data.kota}</td>
                                <td>
                                    <button class="edit-btn" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>`;
                $('#table577 tbody').append(newRow);
            }

            $('#form577')[0].reset();
        });
    });

    $('#filter577').on('input', function() {
        var input = $('#filter577').val().toLowerCase();
        $('#table577 tbody tr').each(function() {
            var warga = $(this).find('td').eq(2).text().toLowerCase();
            if (warga.indexOf(input) !== -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $('#table577').on('click', '.edit-btn', function() {
        var row = $(this).closest('tr');
         warga = row.data('warga');
         jeniskelamin = row.data('jeniskelamin');
         namalengkap = row.data('namalengkap');
         email = row.data('email');
         usia = row.data('usia');
         provinsi = row.data('provinsi');
         kota = row.data('kota');
        
        $('#jenis_kewarganegaraan').val(warga);
        $('#jenis_kelamin').val(jeniskelamin);
        $('#nama_lengkap').val(namalengkap);
        $('#email').val(email);
        $('#usia').val(usia);
        $('#provinsi').val(provinsi);
        $('#kota_kabupaten').val(kota);
    });

     $('#table577').on('click', '.delete-btn', function() {
        var row = $(this).closest('tr');
        row.remove(); 
    });
    $("#pendaftaran2").click(function(){
       $("#Pendaftaran").load("./LUKYUAS559.php");
     });
});
    </script>
</body>
</html>
