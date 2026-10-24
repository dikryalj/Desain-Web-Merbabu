<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengupulan Surat Keanggotaan Pendaki</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <style>
        .container {
            background-color: #fff;
            width: 100%;
            max-width: 800px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }
        .container h2 {
            text-align: center;
            color: rgb(0, 0, 0);
        }

        form {
            display: flex;
            flex-direction: column;
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

        label {
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        input, textarea {
            padding: 12px;
            font-size: 14px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #fafafa;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: rgb(0, 0, 0);
            background-color: #fff;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            padding: 12px 24px;
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgb(0, 0, 0);
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .output-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f8f0;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .output-container h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }

        .output-container p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            display: none;
        }

        .buttons button {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            background-color: #f0f8f0;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .buttons button:hover {
            background-color: #ddd;
        }

        #clear-btn {
            background-color: #f44336;
            color: white;
        }

        #clear-btn:hover {
            background-color: #e53935;
        }

        #edit-btn {
            background-color: #ffa500;
            color: white;
        }

        #edit-btn:hover {
            background-color: #ff8c00;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 15px;
            }

            button {
                font-size: 14px;
                padding: 10px 20px;
            }

            .output-container p {
                font-size: 13px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pengumpulan Surat Keanggotaan Pendaki</h2>
        <form id="form-pendaki">
            <label for="email">Email:</label>
            <input type="email" id="email" required><br><br>

            <label for="drop-img">Drop Images:</label>
            <input type="file" id="drop-img" accept="image/*" multiple><br><br>

            <div id="image-container" style="display: none;">
                <p><strong>Image Previews:</strong></p>
                <div id="image-previews"></div>
                <button type="button" id="remove-all-btn">Hapus Semua Gambar</button><br><br>
            </div>

            <label for="pengalaman">Pengalaman Pendakian Sebelumnya:</label>
            <textarea id="pengalaman" required></textarea><br><br>

            <label for="minat">Minat Kegiatan/Acara:</label>
            <textarea id="minat" required></textarea><br><br>

            <label for="kode-etik">
                <input type="checkbox" id="kode-etik" required> Saya setuju dengan kode etik dan aturan komunitas
            </label><br><br>

            <button type="submit" id="submit-form">Kirim/lanjut</button>
        </form>

        <div id="output-container" class="output-container">
        </div>

        <div id="buttons" class="buttons" style="display: none;">
            <button id="edit-btn">Edit</button>
            <button id="clear-btn">Clear</button>
            <button id="kirim-btn">Kirim/lanjut</button>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        var images = [];

        // Fungsi untuk memeriksa form
        function checkForm() {
            if ($('#email').val() && $('#pengalaman').val() && $('#minat').val() && $('#kode-etik').is(':checked')) {
                $('#submit-form').prop('disabled', false); // Aktifkan tombol Kirim/lanjut
            } else {
                $('#submit-form').prop('disabled', true); // Nonaktifkan tombol Kirim/lanjut
            }
        }

        // Menangani input file drop images
        $('#drop-img').change(function (e) {
            var files = e.target.files;
            $('#image-previews').empty(); // Kosongkan container preview
            images = []; // Reset gambar yang ada

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (file && file.type.startsWith('image/')) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var imgData = event.target.result;
                        images.push(imgData); // Menambahkan gambar ke array
                        $('#image-previews').append(`
                            <div class="image-preview">
                                <img src="${imgData}" alt="Image preview" style="max-width: 100px; height: auto;">
                                <button type="button" class="remove-img-btn" data-index="${images.length - 1}">Hapus</button>
                            </div>
                        `);
                        $('#image-container').show(); // Menampilkan container gambar
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        // Menghapus gambar berdasarkan index
        $(document).on('click', '.remove-img-btn', function () {
            var index = $(this).data('index');
            images.splice(index, 1); // Hapus gambar dari array
            $(this).parent().remove(); // Hapus preview gambar dari DOM
            if (images.length === 0) {
                $('#image-container').hide(); // Sembunyikan container jika tidak ada gambar
            }
        });

        // Menghapus semua gambar
        $('#remove-all-btn').click(function () {
            images = [];
            $('#image-previews').empty(); // Kosongkan semua gambar preview
            $('#image-container').hide(); // Sembunyikan container gambar
        });

        // Periksa form saat user mengisi atau mengubah data
        $('#form-pendaki input, #form-pendaki textarea, #form-pendaki #kode-etik').on('input change', function () {
            checkForm(); // Periksa apakah form sudah lengkap
        });

        // Saat form disubmit
        $('#form-pendaki').on('submit', function (e) {
            e.preventDefault();

            // Ambil data dari form
            var email = $('#email').val();
            var dropImgs = images.length ? 'Ada gambar' : 'Tidak ada gambar';
            var pengalaman = $('#pengalaman').val();
            var minat = $('#minat').val();

            // Validasi jika checkbox setuju belum dipilih
            if (!$('#kode-etik').is(':checked')) {
                alert('Anda harus menyetujui kode etik dan aturan komunitas!');
                return;
            }

            // Tampilkan hasil input user di output-container dengan animasi slideUp
            $('#output-container').empty().show().hide().slideDown(500);  // Menyembunyikan dan menggunakan slideDown untuk animasi
            $('#output-container').html(`
                <h3>Hasil Pengisian Form</h3>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Drop Images:</strong> ${dropImgs}</p>
                <p><strong>Pengalaman Pendakian:</strong> ${pengalaman}</p>
                <p><strong>Minat Kegiatan:</strong> ${minat}</p>
                <p><strong>Setuju dengan kode etik:</strong> ${$('#kode-etik').is(':checked') ? 'Ya' : 'Tidak'}</p>
            `);

            // Tampilkan tombol Edit, Clear, dan Kirim/lanjut dengan animasi slideUp
            $('#buttons').hide().slideDown(500);
            $('#kirim-btn').prop('disabled', false);  // Aktifkan tombol Kirim/lanjut
        });

        // Edit button
        $('#edit-btn').click(function () {
            $('#email').val($('#output-container p').eq(0).text().split(': ')[1]);
            $('#pengalaman').val($('#output-container p').eq(2).text().split(': ')[1]);
            $('#minat').val($('#output-container p').eq(3).text().split(': ')[1]);

            $('#output-container').empty().hide();
            $('#buttons').hide();
            $('#kirim-btn').prop('disabled', false);
        });

        // Clear button
        $('#clear-btn').click(function () {
            $('#form-pendaki')[0].reset();
            $('#output-container').empty().hide();
            $('#buttons').hide();
            $('#kirim-btn').prop('disabled', true);
        });

        // Kirim/lanjut button
        $('#kirim-btn').click(function () {
            alert("Form berhasil dikirim!");
            $('#form-pendaki')[0].reset();
            $('#output-container').empty().hide();
            $('#buttons').hide();
        });
    });
    </script>
</body>
</html>
