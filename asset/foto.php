<style>
        .containerfoto {
            height: 100vh;
            width: 100vw;
            max-height: 800px;
            max-width: 1280px;
            min-height: 600px;
            min-width: 1000px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }
        .containerfoto h3 {
           font-size: 30px;
		   color: white;
        }

        .borderfoto {
            height: 369px;
            width: 290px;
            background: transparent;
            border-radius: 10px;
            transition: border 1s;
            position: relative;
        }

        .borderfoto:hover {
            border: 1px solid white;
        }

        .cardfoto {
            height: 379px;
            width: 300px;
            background: grey;
            border-radius: 10px;
            transition: background 0.8s;
            overflow: hidden;
            background: black;
            box-shadow: 0 70px 63px -60px #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .card0foto {
            background: url('../img/ADAM.jpg') center center no-repeat;
            background-size: 300px;
        }

        .card0foto:hover {
            background: url('../img/ADAM.jpg') left center no-repeat;
            background-size: 600px;
        }

        .card1foto {
            background: url('../img/dikry_577.jpg') center center no-repeat;
            background-size: 300px;
        }

        .card1foto:hover {
            background: url('../img/dikry_577.jpg')  left center no-repeat;
            background-size: 600px;
        }

        .card2foto {
            background: url('../img/luky559.jpeg') center center no-repeat;
            background-size: 300px;
        }

        .card2foto:hover {
            background: url('../img/luky559.jpeg') left center no-repeat;
            background-size: 600px;
        }

        .borderfoto h2 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: white;
            margin: 20px;
            opacity: 0;
            transition: opacity 1s;
        }

        .fa {
            opacity: 0;
            transition: opacity 1s;
        }

       

        .cardfoto:hover h2,
        .cardfoto:hover .fa {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="containerfoto">
		<h3>Create By :</h3>
        <div class="cardfoto card0foto">
            <div class="borderfoto">
                <h2>ADAM (561)</h2>
            </div>
        </div>
        <div class="cardfoto card1foto">
            <div class="borderfoto">
                <h2>DIKRY ALJ (577)</h2>
            </div>
        </div>
        <div class="cardfoto card2foto">
            <div class="borderfoto">
                <h2>LUKY S (559)</h2>
            </div>
        </div>
    </div>
