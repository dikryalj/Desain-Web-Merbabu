<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <title>Informasi Pendakian</title>
    <style>
        .containerinfo {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .containerinfo h2 {
            color:rgb(255, 0, 0);
            font-size: 30px;
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

        .contentinfo {
            margin-top: 20px;
            animation: slideUp 0.8s ease-out; /* Menambahkan animasi slide-up pada konten */
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .footerinfo {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: rgb(255, 0, 0);
        }

        /* Tombol Next */
        .next-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color:rgb(0, 0, 0);
            color: #fff;
            font-size: 16px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .next-btn:hover {
            background-color:rgb(41, 44, 42);
        }
        
        #Pendaftaran2 {
            display: none;
        }
        
    </style>
</head>
<body>

    <div class="containerinfo">
        <h2>Informasi Penting Tentang Pendakian</h2>
        <div class="contentinfo">
            <h2>Hal yang Tidak Boleh Dilakukan Selama Pendakian</h2>
            <p>Selama pendakian, terdapat beberapa hal yang harus dihindari demi keselamatan diri sendiri, sesama pendaki, dan kelestarian alam. Berikut adalah hal-hal yang tidak boleh dilakukan selama pendakian:</p>
            <ul>
                <li><strong>Merusak Alam Sekitar:</strong> Jangan merusak atau mengganggu flora dan fauna di sepanjang jalur pendakian. Jangan memetik bunga, merusak pohon, atau menangkap hewan liar.</li>
                <li><strong>Membuang Sampah Sembarangan:</strong> Pastikan Anda membawa semua sampah kembali dengan Anda. Buang sampah pada tempatnya dan bawa kantong sampah untuk sampah pribadi.</li>
                <li><strong>Merokok atau Membakar Api di Sembarangan Tempat:</strong> Hindari merokok atau membuat api unggun di luar area yang telah ditentukan. Api yang tidak terkendali dapat menyebabkan kebakaran hutan yang merusak ekosistem.</li>
                <li><strong>Melakukan Pendakian Sendirian (Solo Hiking):</strong> Hindari pendakian solo tanpa persiapan dan pengetahuan yang cukup. Selalu lakukan pendakian bersama teman atau kelompok untuk meningkatkan keselamatan.</li>
                <li><strong>Mengabaikan Cuaca dan Kondisi Alam:</strong> Jangan memaksakan diri mendaki ketika cuaca buruk atau kondisi alam tidak memungkinkan. Selalu periksa prakiraan cuaca dan kondisi jalur sebelum berangkat.</li>
                <li><strong>Mengganggu Kehidupan Satwa Liar:</strong> Jangan mendekati, memberi makan, atau menangkap satwa liar. Kehidupan satwa harus dibiarkan bebas dan tidak diganggu.</li>
                <li><strong>Melewati Jalur yang Tidak Resmi atau Terlarang:</strong> Jangan melewati jalur yang tidak resmi atau yang sudah ada larangan dari pihak berwenang. Ikuti petunjuk jalur pendakian yang ada.</li>
                <li><strong>Menggunakan Alat atau Perlengkapan yang Tidak Aman:</strong> Pastikan peralatan pendakian yang digunakan dalam kondisi baik dan sesuai dengan kebutuhan. Jangan menggunakan peralatan yang tidak memenuhi standar keselamatan.</li>
                <li><strong>Minum Alkohol atau Menggunakan Narkoba:</strong> Hindari mengonsumsi alkohol atau narkoba selama pendakian karena dapat mengurangi kewaspadaan dan meningkatkan risiko kecelakaan.</li>
            </ul>
        </div>

        <div class="footerinfo" >
            <p>Semoga informasi ini bermanfaat untuk memastikan keselamatan dan kenyamanan pendakian Anda. Selamat mendaki!</p>
        </div>

        <!-- Tombol Next -->
        <div style="text-align: center;">
            <button class="next-btn" id="form2">Next</button>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#pendaftaran1").click(function(){
                $("#Pendaftaran").load("../cardinfo.php")
            });
            $("#form2").click(function(){
                $("#Pendaftaran").load("../fromlama/dikry577.php")
            });
            $("#pendaftaran2").click(function(){
                $("#Pendaftaran").load("../fromlama/luki559.php")
            });
            $("#pendaftaran3").click(function(){
                $("#Pendaftaran").load("../fromlama/adam561.php")
            });
            $("#pendaftaran4").click(function(){
                $("#Pendaftaran").load("../fromlama/dikry577.php")
            });
        });
    </script>

</body>
</html>
