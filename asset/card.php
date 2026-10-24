<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tambahkan jQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
    <style>
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            max-width: 1000px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            gap: 20px;
            justify-content: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .card {
            position: relative;
            width: 300px;
            height: 300px;
            background-color: #f2f2f2;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1000px;
            box-shadow: 0 0 0 5px #ffffff80;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
        }

        .card__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f2f2f2;
            transform: rotateX(-90deg);
            transform-origin: bottom;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card__title {
            margin: 0;
            font-size: 24px;
            color: #333;
            font-weight: 700;
        }

        .card__description {
            margin: 10px 0 0;
            font-size: 14px;
            color: #777;
            line-height: 1.4;
            max-height: 200px; /* Membatasi tinggi deskripsi */
            overflow-y: auto; /* Menambahkan scroll jika diperlukan */
        }

        .card:hover .card__content {
            transform: rotateX(0deg);
        }

    </style>
</head>
<body>
    <div class="cards-container">
        <!-- Baris pertama -->
        <div class="row">
            <!-- card 1 -->
            <div class="card" data-form="jalur2">
                <img alt="" height="350" src="../img/cuntel 1.jpeg" width="600"/>
                <div class="card__content">
                    <p class="card__title">Cuntel</p>
                    <p class="card__description" id="desc1">
                        Pemandangan (view) pegunungan di sebelah utara dan barat diantaranya adalah Gunung Telomoyo, Gunung Andong, Gunung Ungaran, Gunung Sindoro dan Gunung Sumbing. Di sebelah timur terdapat view rawa pening, dan sebelum pemancar terdapat hamparan Eidelweis. Jika melalui jalur ini, maka akan bertemu dengan batas tiga kabupaten (Semarang, Magelang, Boyolali), pertemuan antara jalur pendakian Cuntel, Wekas dan Thekelan.
                    </p>
                </div>
            </div>
            <!-- card 2 -->
            <div class="card" data-form="jalur6">
            <img alt="" height="350" src="../img/Wekas 1.jpeg" width="600"/>
                <div class="card__content">
                    <p class="card__title">Wekas</p>
                    <p class="card__description" id="desc1">
                    Jalur Wekas merupakan jalur paling banyak diminati para pendaki, selain jalur terpendek juga jalur gunung wekas banyak terdapat sumber mata air. Menuju basecamp Gunung Merbabu via Wekas sahabat bisa menempuh dari Jawa barat menggunakan kereta jurusan Jakarta – Semarang. Sesampainya di Semarang sahabat carilah bus yang menuju terminal Solo. Turun Salatiga di perempatan pasar sapi, naiklah angkutan umum arah ke Magelang, Akan tetapi perlu diingat untuk naik angkutan umum usahakan sampai perempatan pasar sapi sebelum sore hari dikarenakan angkutan umum beroperasi dari pagi sampai sore.
            Akan tetapi jika sahabat dari Jawa Timur bisa naik kereta atau bus dengan jurusan Semarang, dari Semarang sahabat cari bus arah terminal semarang dan turun di Salatiga turun di perempatan pasar sapi, dari perempatan sapi cari angkutan umum arah ke basecamp Wekas. tapi perlu diingat untuk naik angkutan umum usahakan sampai terminal Boyolali sebelum sore hari dikarenakan angkutan umum beroperasi dari pagi sampai sore.
           
                    </p>
                </div>
            </div>
            <!-- card 3 -->
            <div class="card" data-form="jalur3">
            <img alt="" height="350" src="../img/Jalur-Selo.jpeg" width="600"/>
                <div class="card__content">
                    <p class="card__title">Selo</p>
                    <p class="card__description" id="desc1">
             Sepanjang perjalanan dari pintu masuk pendakian Selo akan dijumpai berbagai macam flora maupun fauna/satwa. Jenis tumbuhan yang isa ditemui sepanjang pendakian adalah jenis Bintami, Cemara Gunung, Puspa, Pinus, Pakis, Akasia decurens, Kesowo, Pampung, Cantigi, Eidelweiss dan lain sebagainya. Satwa yang bisa dijumpai di jalur pendakian Selo diantaranya adalah Rek-rekan (sebagai satwa prioritas di Taman Nasional Gunung Merbabu), Lutung budeng/Lutung hitam, monyet ekor panjang, ayam hutan, elang maupun beberapa jenis burung.
            Dilihat dari data pengunjung di jalur pendakian Selo, rata-rata adalah wisatawan nusantara yang berasal dari kota-kota besar di Pulau Jawa, dengan menggunakan sepeda motor, mobil, atau menyewa kendaraan. Untuk menuju ke Selo dari Boyolali menggunakan bus kecil jurusan Selo. Bus yang langsung ke Selo agak jarang biasanya hanya sampai Pasar Cepogo, dan dari pasar Cepogo ganti lagi bus kecil yang menuju Selo.
            Dari kota Boyolali bus kecil yang menuju Selo ini tidak parkir di terminal Boyolali. Pendaki harus sedikit berjalan kaki ke Pasar Sapi di mana bus kecil jurusan Cepogo/Selo berhenti mencari penumpang. Di Pasar ini terdapat patung Sapi yang melambangkan industri peternakan sapi yang menjadi andalan pendapatan masyarakat Boyolali.
            Pendaki bisa menyewa mobil bak sayuran untuk menuju ke basecamp, atau bisa juga naik ojek. Untuk pemanasan pendakian, berjalan kaki bisa menjadi pilihan yang lebih murah. Kondisi Jalan Solo – Boyolali – Selo cukup bagus, jalan arah Selo – Basecamp Genting, jalanan sudah cor beton, menanjak dan bila hujan agak rawan. Kondisi jalan Jogja – Magelang – Selo, sedikit ada perbaikan jalan di sekitar Selo sampai batas kabupaten Magelang, sehingga menimbulkan kemacetan di beberapa ruas jalan (buka tutup jalan).

                    </p>
                </div>
            </div>
        </div>

        <!-- Baris kedua -->
        <div class="row">
            <!-- card 4 -->
            <div class="card" data-form="jalur5">
            <img alt="" height="350" src="../img/thekelan 1.jpeg" width="600"/>
                <div class="card__content">
                    <p class="card__title">Thekelan</p>
                    <p class="card__description" id="desc1">
                    Jalur pendakian dengan atraksi alam yang menarik. Di sepanjang jalur pendaki dapat mengamati obyek fenomena alam karts pereng putih, watu gubuk, dan juga kawah mati. Jalur pendakian yang dapat diakses melalui Dusun Thekelan, Desa Batur, Kec. Getasan Semarang, dengan panjang jalur 6,8 km. Terdapat basecamp di jalur thekelan dengan julukan sebagai green basecamp, basecamp ini dilengkapi dengan solar cell, perpustakaan basecamp, dan air bersih siap minum.
                    </p>
                </div>
            </div>
            <!-- card 5 -->
            <div class="card" data-form="jalur4">
            <img alt="" height="350" src="../img/Jalur-Suwanting-1.jpeg" width="600"/>
                <div class="card__content">
                    <p class="card__title">Suwanting</p>
                    <p class="card__description" id="desc1">
                    Jalur pendakian gunung Merbabu via Suwanting merupakan jalur pendakian sisi barat Gunung Merbabu yang berada di kabupaten Magelang. Lokasi basecamp berada di Jl. Suwanting, Suwanting, Banyuroto, Sawangan, Magelang, Jawa tengah.
            Jalur Pendakian Gunung Merbabu sangat terjal, karena terbentang deretan bukit yang sangat tinggi dan curam, jalue Suwanting dijuluki sebagai jalur Merbabu yang nggak ada bonusnya. Jalur pendakian ini kurang cocok bagi pendaki pemula, karena tekstur jalur nanjak sampai puncak. Yang kemiringannya sampai 59,1 derajat. Artinya, pendaki harus siap nanjak mulai dari basecamp sampai ke puncak.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script jQuery -->
    <script>
        $(document).ready(function() {
    $('.card').click(function() {
        var formUrl = $(this).data('form');
        
        // Map the URLs to their corresponding content files
        switch(formUrl) {
            case 'jalur2':
                $('#Jalur').load('../pendakian/cuntel.php');
                break;
            case 'jalur6':
                $('#Jalur').load('../pendakian/wekas.php');
                break;
            case 'jalur3':
                $('#Jalur').load('../pendakian/selo.php');
                break;
            case 'jalur5':
                $('#Jalur').load('../pendakian/thekelan.php');
                break;
            case 'jalur4': // Suwanting
                $('#Jalur').load('../pendakian/suwanting.php');
                break;
            default:
                $('#Jalur').load('../card.php');
                break;
        }
    });
});
    </script>
</body>
</html>
