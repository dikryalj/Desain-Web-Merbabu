<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #isi {
            margin: 20px auto;
            width: 80%;
            font-family: monospace,serif;
            font-size: 16px;
            line-height: 1.5;
        }

        #isi p {
            text-align: justify;
            max-height: 99em;
            transition: all 0.2s;
            color: white;
        }

        .typewriter {
            overflow: hidden;
            max-height: 1.5em;
            white-space: nowrap;
            border-right: .5em solid #333;
            animation: typing 5s steps(100, end), blink 0.1s infinite alternate;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        #addNoteButton, .restart-button {
            display:flex;
  margin:0 auto;
  background:#666;
  color:#eee;
  border:0;
  padding:.5em 1em;
  font-size:1.2em;
  font-weight:600;
  cursor:pointer;
  box-shadow:1px 1px 0 #fff9 inset, -1px -1px 0 #3336 inset;
  text-shadow:0 3px 0 #3333;
  transition:all 0.1s;
        }

        #addNoteButton:hover, .restart-button:hover {
            translate:0 3px;
    box-shadow:1px 1px 0 #333a inset, -1px -1px 0 #fff inset;
    background:#555;
    text-shadow:0 -3px  0 #333;
    color:#ddd
        }

        .restart-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="isi">
        <h1 style="text-align: center;">Gunung Merbabu</h1>
    </div> <br>
    <button id="addNoteButton" title="Click me">Read Me</button>

    <script>
        const content = document.getElementById('isi');
        const addNoteButton = document.getElementById('addNoteButton');

        const createRestartButton = () => {
            const button = document.createElement('button');
            button.textContent = "Mulai Ulang";
            button.classList.add('restart-button');
            button.onclick = () => {
                content.innerHTML = '<h1 style="text-align: center;">Gunung Merbabu</h1>';
                getText.currentIndex = 0;
                addNoteButton.disabled = false;
                button.remove();
            };
            addNoteButton.after(button);
        };

        const getText = () => {
            const sentences = [
                "Gunung Merbabu (Hanacaraka: ꦒꦸꦤꦸꦁꦩꦼꦂꦧꦧꦸ) adalah gunung api yang bertipe Stratovulcano yang terletak secara geografis pada 7,5° LS dan 110,4° BT. Secara administratif gunung ini berada di wilayah Kabupaten Magelang di lereng sebelah barat dan Kabupaten Boyolali di lereng sebelah timur dan selatan, Kabupaten Semarang di lereng sebelah utara, Provinsi Jawa Tengah.",
                "Gunung Merbabu dikenal melalui naskah-naskah masa pra-Islam sebagai Gunung Damalung atau Gunung Pam(a)rihan.Di lerengnya pernah terdapat pertapaan terkenal dan pernah disinggahi oleh Bujangga Manik pada abad ke-15.",
                "Menurut etimologi, 'merbabu' berasal dari gabungan kata 'meru' (gunung) dan 'abu' (abu). Nama ini baru muncul pada catatan-catatan Belanda. Gunung ini pernah meletus pada tahun 1560 dan 1797. Dilaporkan juga pada tahun 1570 pernah meletus, akan tetapi belum dilakukan konfirmasi dan penelitian lebih lanjut.",
                "Puncak gunung Merbabu berada pada ketinggian 3.145 meter di atas permukaan air laut. Gunung Merbabu mempunyai kawasan Hutan Dipterokarp Bukit, Hutan Dipterokarp Atas, Hutan Montane, dan hutan Ericaceous atau hutan gunung.",
                "Gunung Merbabu merupakan salah satu gunung yang sangat populer untuk kegiatan hiking. Di Gunung Merbabu terdapat 5 jalur pendakian resmi yang sering dipakai untuk mendaki, di antaranya: 1. Jalur pendakian gunung Merbabu via Selo (Boyolali) 2. Jalur pendakian gunung Merbabu via Suwanting (Magelang) 3. Jalur pendakian gunung Merbabu via Wekas (Magelang) 4. Jalur pendakian gunung Merbabu via Cunthel (Semarang) 5.Jalur pendakian gunung Merbabu via Thekelan (Semarang) 6.Kelima jalur pendakian tersebut memiliki tingkat kesulitan masing-masing. Pendaki pemula biasanya memilih mendaki lewat jalur Selo sedangkan pendaki senior yang ingin cepat sampai puncak biasanya memilih jalur Wekas, karena waktu tempuhnya lebih pendek.",
            ];

            if (!getText.currentIndex) getText.currentIndex = 0;
            const sentence = sentences[getText.currentIndex];
            getText.currentIndex = (getText.currentIndex + 1) % sentences.length;

            if (getText.currentIndex === 0) {
                setTimeout(() => {
                    addNoteButton.disabled = true;
                    createRestartButton();
                }, 5200);
            }

            return sentence;
        };

        const addNote = () => {
            const paragraph = document.createElement('p');
            paragraph.textContent = getText();
            paragraph.classList.add('typewriter');
            content.appendChild(paragraph);

            setTimeout(() => {
                paragraph.classList.remove('typewriter');
            }, 5200);
        };

        addNoteButton.addEventListener('click', addNote);
    </script>
</body>
</html>