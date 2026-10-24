<head>
    <title>Struk Pendaftaran</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background: #f0f0f0;
            padding: 40px;
            margin: 0;
        }

        .receipt {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 360px;
            margin: 0 auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: 1px dashed #ccc;
        }

        .receipt h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt p {
            margin: 5px 0;
        }

        .qr {
            text-align: center;
            margin-top: 20px;
        }

        /* Tombol container agar center */
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

.button {
 display: inline-block;
 border-radius: 7px;
 border: none;
 background: #1875FF;
 color: white;
 font-family: inherit;
 text-align: center;
 font-size: 13px;
 box-shadow: 0px 14px 56px -11px #1875FF;
 width: 10em;
 padding: 1em;
 transition: all 0.4s;
 cursor: pointer;
}

.button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.4s;
}

.button span:after {
 content: 'for free';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -20px;
 transition: 0.7s;
}

.button:hover span {
 padding-right: 3.55em;
}

.button:hover span:after {
 opacity: 4;
 right: 0;
}
    </style>

    <!-- Tambahkan html2pdf.js dari CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body>
    <div class="receipt" id="struk">
        <h2>Struk Pendaftaran</h2>
        <p>Nama Lengkap: <?= htmlspecialchars($daftar->nama_lengkap) ?></p>
        <p>Jenis Kelamin: <?= htmlspecialchars($daftar->jenis_kelamin) ?></p>
        <p>Usia: <?= htmlspecialchars($daftar->usia) ?></p>
        <p>Email: <?= htmlspecialchars($daftar->email) ?></p>
        <p>Jenis Kewarganegaraan: <?= htmlspecialchars($daftar->jenis_kewarganegaraan) ?></p>
        <p>Provinsi: <?= htmlspecialchars($daftar->provinsi) ?></p>
        <p>Kota/Kabupaten: <?= htmlspecialchars($daftar->kota_kabupaten) ?></p>
        <p>Tanggal: <?= htmlspecialchars($daftar->tanggal) ?></p>
        <p>Jalur: <?= htmlspecialchars($daftar->jalur) ?></p>
        <div class="qr">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $qrData ?>" alt="QR Code">
        </div>
    </div>
    <div class="button-container">
      <button onclick="downloadStruk()" class="button" style="vertical-align:middle"><span>Download</span></button>
    </div>
      <!-- <div class="button-container">
        <div onclick="downloadStruk()" class="button" data-tooltip="Size: 35,4 KB">
            <div class="button-wrapper">
                <div class="text">Download</div>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"/>
                    </svg>
                </span>
            </div>
        </div> -->
</div>

    <script>
        function downloadStruk() {
            const element = document.getElementById('struk');
            html2pdf().from(element).save('Struk_Pendaftaran.pdf');
        }
    </script>
</body>
