<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
	.amp {
		font-family:Garamond,Baskerville,Georgia,serif !important;
		font-style:italic;
		font-weight:normal;
		border: none;
	}
	
	a.polaroid {
		display: block;
		text-decoration: none;
		color: #333;
		padding: 10px 10px 20px 10px;
		width: 150px;
		border: 1px solid #BFBFBF;
		background-color: white;
		z-index: 2;
		font-size: 0.7em;
		-webkit-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		-moz-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		-webkit-transition: -webkit-transform 0.5s ease-in;
	}
	a.polaroid:hover,
	a.polaroid:focus,
	a.polaroid:active {
		z-index: 999;
		border-color: #6A6A6A;
		-webkit-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		-moz-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	.polaroid img {
		margin: 0 0 15px;
		width: 100%;
		height: 100%;
		object-fit: cover; /* Menjaga proporsi gambar */
	}
	
	a img {
		border: none;
		display: block;
	}
	
	.photo-album {
		position: relative;
		width: 80%;
		margin: 0 auto;
		max-width: 70em;
		height: 450px;
		margin-top: 5em;
		min-width: 800px;
		max-width: 900px;
	}
	.photo-album .polaroid {
		position: absolute;
	}
	.photo-album h1 {
		position: absolute;
		z-index: 5;
		top: 150px;
		text-align: center;
		width: 100%;
		line-height: 1.9;
        font-size: 25px;
	}
	.photo-album h1 span {
		background-color: black;
		font-family: "Helvetica Neue",Arial,Helvetica,sans-serif;
		padding: 0.2em 0.4em 0.2em 0.4em;
		-webkit-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		-moz-box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		box-shadow: 2px 2px 4px rgba(0,0, 0, 0.3);
		border: 1px solid #6A6A6A;
	}
	.photo-album .small {
		width: 75px;
		padding: 6px 6px 12px 6px;
		font-size: 0.6em;
	}
	.photo-album .small img {
		width: 75px;
		height: 75px;
		object-fit: cover; /* Menjaga proporsi gambar */
	}
	.photo-album .medium {
		width: 200px;
		padding: 13px 13px 26px 13px;
		font-size: 0.8em;
	}
	.photo-album .medium img {
		width: 200px;
		height: 200px;
		object-fit: cover; /* Menjaga proporsi gambar */
	}
	.photo-album .large {
		width: 300px;
		padding: 20px 20px 30px 20px;
		font-size: 1em;
	}
	.photo-album .large img {
		width: 300px;
		height: 300px;
		object-fit: cover; /* Menjaga proporsi gambar */
	}
	.photo-album .img1 {
		bottom: 10px;
		right: 365px;
		-webkit-transform: rotate(10deg);
		-moz-transform: rotate(10deg);
		transform: rotate(10deg);
	}
	.photo-album .img2 {
		top: 50px;
		right: 20px;
		-webkit-transform: rotate(-4deg);
		-moz-transform: rotate(-4deg);
		transform: rotate(-4deg);
	}
	.photo-album .img3 {
		left: 400px;
		top: 0;
		-webkit-transform: rotate(-5deg);
		-moz-transform: rotate(-5deg);
		transform: rotate(-5deg);
	}
	.photo-album .img4 {
		top: 15px;
		left: 495px;
		-webkit-transform: rotate(-20deg);
		-moz-transform: rotate(-20deg);
		transform: rotate(-20deg);
	}
	.photo-album .img5 {
		bottom: 0;
		right: 0;
		-webkit-transform: rotate(1deg);
		-moz-transform: rotate(1deg);
		transform: rotate(1deg);
	}
	.photo-album .img6 {
		bottom: 10px;
		right: 156px;
		-webkit-transform: rotate(6deg);
		-moz-transform: rotate(6deg);
		transform: rotate(6deg);
	}
	.photo-album .img7 {
		bottom:0;
		left:400px;
		-webkit-transform: rotate(-10deg);
		-moz-transform: rotate(-10deg);
		transform: rotate(-10deg);
	}
	.photo-album .img8 {
		bottom: -20px;
		left: 700px;
		-webkit-transform: rotate(-8deg);
		-moz-transform: rotate(-8deg);
		transform: rotate(-8deg);
	}
	.photo-album .img9 {
		bottom: 0;
		left: 0;
		-webkit-transform: rotate(-8deg);
		-moz-transform: rotate(-8deg);
		transform: rotate(-8deg);
	}
	.photo-album .img10 {
		top: 0;
		left: 20px;
		-webkit-transform: rotate(8deg);
		-moz-transform: rotate(8deg);
		transform: rotate(8deg);
	}
	.photo-album .img11 {
		top: 150px;
		right: 0;
		-webkit-transform: rotate(-8deg);
		-moz-transform: rotate(-8deg);
		transform: rotate(-8deg);
	}
	.photo-album .img12 {
		top: 0;
		left: 680px;
		-webkit-transform: rotate(18deg);
		-moz-transform: rotate(18deg);
		transform: rotate(18deg);
	}
	.photo-album .img13 {
		bottom: -20px;
		right: 630px;
		-webkit-transform: rotate(4deg);
		-moz-transform: rotate(4deg);
		transform: rotate(4deg);
	}
	.photo-album .img14 {
		top: 90px;
		left: 430px;
		-webkit-transform: rotate(15deg);
		-moz-transform: rotate(15deg);
		transform: rotate(15deg);
	}
	.photo-album .img15 {
		left:176px;
		top:20px;
		-webkit-transform: rotate(-8deg);
		-moz-transform: rotate(-8deg);
		transform: rotate(-8deg);
	}
	
	a:hover,
	a:focus {
		z-index: 5;
	}
	
    </style>
</head>
<body>
<div class="photo-album">
		
		<h1><span>Mountain <abbr title="and" class="amp"></abbr> Merbabu</span></h1>
		
		<a class="large polaroid img1"><img src="../img/foto/foto1.jpg" alt=""></a>
		<a class="polaroid img2"><img src="../img/foto/foto2.jpg" alt=""></a>
		<a class="small polaroid img3"><img src="../img/foto/foto3.jpeg" alt=""></a>	
		<a class="medium polaroid img4"><img src="../img/foto/foto4.jpeg" alt=""></a>		
		<a class="polaroid img5"><img src="../img/foto/foto5.jpeg" alt=""></a>	
		<a class="polaroid img6"><img src="../img/foto/foto6.jpeg" alt=""></a>		
		<a class="polaroid img7"><img src="../img/foto/foto7.jpeg" alt=""></a>
		<a class="small polaroid img8"><img src="../img/foto/foto8.jpeg" alt=""></a>
		<a class="medium polaroid img9"><img src="../img/foto/foto11.jpeg" alt=""></a>
		<a class="polaroid img10"><img src="../img/foto/foto10.jpeg" alt=""></a>
		<a class="small polaroid img11"><img src="../img/foto/foto9.jpeg" alt=""></a>
		<a class="small polaroid img12"><img src="../img/foto/foto12.jpeg" alt=""></a>
		<a class="small polaroid img13"><img src="../img/foto/foto13.jpg" alt=""></a>
		<a class="small polaroid img14"><img src="../img/foto/foto14.jpg" alt=""></a>
		<a class="polaroid img15"><img src="../img/foto/foto15.jpg" alt=""></a>

	</div>
	
</body>
</html>

