<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Web Kelompok 9</title>
	  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="./asset/css/style.css">
	<link rel="stylesheet" href="./asset/css/kelompok9.css">
	<link rel="stylesheet" href="./asset/css/all.min.css">
	<link href="./img/logo.png" rel="shortcut icon">

	<!-- animasi ketik pada titel -->
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            var title = "Ubur-bur ikan lele Selamat datang lee";
            var index = 0;

            function typeTitle() {
                if (index < title.length) {
                    document.title = title.substring(0, index + 1);
                    index++;
                    setTimeout(typeTitle, 300);
                } else {
                    setTimeout(resetTitle, 2000); 
                }
            }

            function resetTitle() {
                index = 0;
                typeTitle();
            }

            typeTitle();
        });
    </script>
	<!-- end -->

  <style>
	/* img beranda */
	.herokelompok9{
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(hsl(0, 0%, 80%), rgba(0,0,0,30%)), url('./img/2.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
}

.contentkelompok9 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    width: 100%;
    padding: 0 20px;
}
/* end */
  </style>
</head>

<body>
	<header id="myHeader" class="">
	<img src="./img/logo.png" alt="Logo" id="logo">
		</svg>
		<nav>
			<a href="#Beranda" id="Beranda1">Beranda</a>
			<a href="#Informasi" id="Informasi1">Informasi</a>
			<a href="#Jalur" id="jalur1">Jalur</a>
			<a href="#Pendaftaran" id="pendaftaran1">Pendaftaran</a>
			<button id="openmenu">
				<span></span>
				<span></span>
			</button>
		</nav>
	</header>
	<div id="page" class="">
		<section id="Beranda">
			<div class="herokelompok9" id="beranda">
				<div class="contentkelompok9">
					<h1 class="welcome-text" id="typing-welcome"></h1>
					<h1 class="main-title" id="typing-main"></h1>
				</div>
			</div>
			
			<!-- JavaScript for Typing Effect -->
			<script>
				function typeText(elementId, text, speed, callback) {
					let i = 0;
					const element = document.getElementById(elementId);
					element.textContent = '';
		
					function type() {
						if (i < text.length) {
							element.textContent += text.charAt(i);
							i++;
							setTimeout(type, speed);
						} else if (callback) {
							setTimeout(callback, 1000);
						}
					}
		
					element.classList.add('typing');
					type();
				}
		
				function startTypingAnimation() {
					typeText('typing-welcome', 'SELAMAT DATANG DI', 100, () => {
						document.getElementById('typing-welcome').textContent = '';
						typeText('typing-main', 'BOOKING ONLINE OBJEK WISATA MERBABU', 100, () => {
							document.getElementById('typing-main').textContent = '';
							setTimeout(startTypingAnimation, 2000);
						});
					});
				}
		
				window.addEventListener('load', startTypingAnimation);
			</script>
		</section>
		<section id="Informasi">
			<div id="Informasi1">
				<h1 style="text-align: center;" class="animate__animated animate__backInUp">Informasi.</h1>
			</div>
			<script>
				$(document).ready(function(){
					$("#Informasi1").click(function(){
						$("#Informasi").load("./asset/informasi.php")
					});
                });
                     </script>
		</section>

		<section id="Jalur">
            
			<h1 id="jalu2" style="text-align: center;"  class="animate__animated animate__backInUp">Jalur.</h1>
			<script>
				$(document).ready(function(){
					$("#jalur1").click(function(){
						$("#Jalur").load("./asset/card.php")
					});
					$("#jalur2").click(function(){
						$("#Jalur").load("./pendakian/cuntel.php")
					});
					$("#jalur3").click(function(){
						$("#Jalur").load("./pendakian/selo.php")
					});
					$("#jalur4").click(function(){
						$("#Jalur").load("./pendakian/suwanting.php")
					});
					$("#jalur5").click(function(){
						$("#Jalur").load("./pendakian/thekelan.php")
					});
					$("#jalur6").click(function(){
						$("#Jalur").load("./pendakian/wekas.php")
					});
				});
			</script>
		</section>

        <section id="Pendaftaran">
			<div id="Pendaftaran">
			<h1 id="Pendaftaran0" style="text-align: center;"  class="animate__animated animate__backInUp">Pendaftaran.</h1>
			</div>
			<script>
				$(document).ready(function(){
					$("#pendaftaran1").click(function(){
						$("#Pendaftaran").load("./asset/cardinfo.php")
					});
					$("#form2").click(function(){
						$("#Pendaftaran").load("./dikry577.php")
					});
					$("#pendaftaran2").click(function(){
						$("#Pendaftaran").load("./LUKYUAS559.php")
					});
					$("#pendaftaran3").click(function(){
						$("#Pendaftaran").load("./adamuas561.php")
					});
					$("#pendaftaran4").click(function(){
						$("#Pendaftaran").load("./formterakhir.php")
					});
				});
			</script>
		</section>


        <!-- FAQ  -->

		
        <section >  
			<h1 style="text-align: center; font-size: 50px;" class="animate__animated animate__backInUp">FAQ</h1>
        <div id="faq">
		</div>
        <script>
        $(document).ready(function() {
            $("#faq").load("./asset/faq.php");
        });
        </script>
		
		</section>
        <!-- location -->
		
        <section style="display: flex; justify-content: center; align-items: center; padding: 40px 0;">
			<head>
				
				<link rel="stylesheet" href="./asset/css/mapmerbabu.css">
			</head>
        <div id="mer"></div>
		<div class="map-frame">
 <div class="map-frame">
  <div id="map"></div>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="./asset/js/mapmerbabu.js"></script>

		</section>
        <!-- end location -->
        <!-- gif -->
		
        <section>
        <div id="col"></div>
        <script>
        $(document).ready(function() {
            $("#col").load("./asset/col.php");
        });
        </script>
		</section>
        <!-- gif -->
        <!-- gif -->
		
        <section>
        <div id="animasi"></div>
        <script>
        $(document).ready(function() {
            $("#animasi").load("./asset/animasi.php");
        });
        </script>
		</section>
        <!-- gif -->
<!-- FOTO BER 3 -->
		<section>

		<div id="foto3"></div>
        <script>
        $(document).ready(function() {
            $("#foto3").load("./asset/foto.php");
        });
    </script>

		</section>

		
	</div>
	<script src="./asset/js/script.js"></script>
</body>

</html>