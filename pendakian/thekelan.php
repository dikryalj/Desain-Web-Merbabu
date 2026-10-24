<html>
<head>
    <title>Jalur Pendakian Via Wekas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .contentt {
            max-width: 800px;
            margin: 20px auto;
            text-align: center;
        }

        .contentt img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .thumbnail-container {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .thumbnail {
            flex: 1;
            padding: 5px;
        }

        .thumbnail img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .form-container {
            max-width: 800px;
            margin: 40px auto 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            background-color:rgb(0, 0, 0);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .description {
            max-width: 800px;
            margin: 20px auto;
            text-align: justify;
            font-size: 14px;
            color: #666;
        }

        #jalu2 {
            display: none;
        }

        /* Media query untuk layar kecil */
        @media (max-width: 768px) {
            .thumbnail-container {
                flex-direction: column;
            }

            .button-container {
                margin-top: 10px;
            }

            .description {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 12px;
                padding: 8px;
            }

            .button-container a {
                padding: 8px 16px;
                font-size: 14px;
            }

            .description {
                font-size: 12px;
                line-height: 1.5;
            }
        }

    </style>
</head>
<body>
    <div class="contentt">
        <img alt="Pendakian Thekelan" src="../img/thekelan 1.jpeg" height="350" />
        <div class="thumbnail-container">
        </div>
    </div>

    <div class="form-container">
        <div class="table-container">
            <table>
                <tr>
                    <th>Harga Tiket</th>
                    <th>Weekdays</th>
                    <th>Weekend</th>
                    <th>Aktifitas</th>
                </tr>
                <tr>
                    <td>Wisatawan Lokal</td>
                    <td>Rp.5,000/hari</td>
                    <td>Rp.7,500/hari</td>
                    <td>Rp.5,000</td>
                </tr>
                <tr>
                    <td>Wisatawan Asing</td>
                    <td>Rp.150,000/hari</td>
                    <td>Rp.225,000/hari</td>
                    <td>Rp.5,000</td>
                </tr>
            </table>

            <div class="button-container">
                <a href="https://g.co/kgs/QBvzvV5">LOKASI</a>
            </div>
        </div>

        <div class="description">
            <p><strong>Informasi Jalur Thekelan</strong></p>
            <p>
                Jalur pendakian dengan atraksi alam yang menarik. Di sepanjang jalur pendaki dapat mengamati obyek fenomena alam karts pereng putih, watu gubuk, dan juga kawah mati. Jalur pendakian yang dapat diakses melalui Dusun Thekelan, Desa Batur, Kec. Getasan Semarang, dengan panjang jalur 6,8 km. Terdapat basecamp di jalur thekelan dengan julukan sebagai green basecamp, basecamp ini dilengkapi dengan solar cell, perpustakaan basecamp, dan air bersih siap minum.
            </p>
        </div>
    </div>
</body>
</html>
