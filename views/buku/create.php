<head>
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

<div class="container">
  <h2 class="form-title">Form Pendakian Gunung</h2>
        <div id="error-message" class="error-message"></div>
        <div id="success-message" class="success-message"></div>
  <form method="POST" id="form577" action="index.php?page=form2">
<div class="form-group">
                <label for="jenis_kewarganegaraan">Jenis Kewarganegaraan:<span class="required" style="color: #d63031;">*</span></label>
                <select id="jenis_kewarganegaraan" class="form-control" name="jenis_kewarganegaraan"required>
                    <option value="">Pilih Kewarganegaraan</option>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:<span class="required" style="color: #d63031;">*</span></label>
                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email:<span class="required" style="color: #d63031;">*</span></label>
                <input type="email" id="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="usia">Usia:<span class="required" style="color: #d63031;">*</span></label>
                <input type="number" id="usia" class="form-control" name="usia" required min="18">
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi:<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="provinsi" class="form-control" name="provinsi"  required>
            </div>

            <div class="form-group">
                <label for="kota_kabupaten">Kota/Kabupaten (Sesuai KTP):<span class="required" style="color: #d63031;">*</span></label>
                <input type="text" id="kota_kabupaten" class="form-control" name="kota_kabupaten" required>
            </div>
            <button type="submit" class="btn btn-primary">Lanjut</button>
  </form>