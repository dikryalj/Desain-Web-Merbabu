<style>
        .faq-container {
            width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .faq-item {
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            font-size: 18px;
            font-weight: 700;
            padding-bottom: 3px;
            padding-top: 3px;
        }

        .faq-answer {
            font-size: 16px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }

        .faq-answer.active {
            border-bottom: 1px solid #e0e0e0;
        }

        .icon-container i {
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .icon-container i.active {
            transform: rotate(90deg);
        }
    </style>


<div class="faq-container" id="faqContainer">
</div>

<script>
    $(document).ready(function() {
        // Define your FAQ data
        const faqData = [
            {
                question: "Apa itu Gunung Merbabu?",
                answer: "Gunung Merbabu adalah sebuah gunung berapi yang terletak di Jawa Tengah, Indonesia. Gunung ini memiliki ketinggian sekitar 3.145 meter di atas permukaan laut dan merupakan salah satu gunung berapi aktif di Indonesia."
            },
            {
                question: "Di mana letak Gunung Merbabu?",
                answer: "Gunung Merbabu terletak di perbatasan Kabupaten Magelang, Kabupaten Boyolali, dan Kota Salatiga, Jawa Tengah."
            },
            {
                question: "Apa yang membuat Gunung Merbabu menjadi tempat pendakian favorit?",
                answer: "Gunung Merbabu memiliki jalur pendakian yang menarik, pemandangan yang indah, serta medan yang bervariasi, mulai dari hutan tropis hingga padang rumput yang luas. Selain itu, puncaknya menawarkan panorama yang menakjubkan, termasuk pemandangan Gunung Merapi dan wilayah sekitar."
            },
            {
                question: "Apa saja jalur pendakian yang ada di Gunung Merbabu?",
                answer: "Beberapa jalur pendakian Gunung Merbabu antara lain jalur Selo (dari Boyolali), jalur Cuntel (dari Magelang), dan jalur Thekelan (dari Salatiga). Setiap jalur memiliki karakteristik dan tingkat kesulitan yang berbeda."
            },
            {
                question: "Apakah pendakian Gunung Merbabu aman?",
                answer: "Pendakian Gunung Merbabu cukup aman selama dilakukan dengan persiapan yang matang dan mengikuti jalur resmi. Namun, tetap ada risiko terkait cuaca, medan yang terjal, serta aktivitas alam lainnya. Pendaki disarankan untuk mendaki bersama pemandu dan selalu memperhatikan petunjuk keselamatan."
            },
            
            {
                question: "Berapa lama waktu yang diperlukan untuk mencapai puncak Gunung Merbabu?",
                answer: "Waktu yang diperlukan untuk mencapai puncak Gunung Merbabu bervariasi tergantung jalur yang dilalui. Rata-rata pendakian memerlukan waktu 4 hingga 7 jam."
            },
            {
                question: "Apakah pendakian Gunung Merbabu bisa dilakukan oleh pemula?",
                answer: "Pendakian Gunung Merbabu bisa dilakukan oleh pemula, terutama melalui jalur yang lebih landai seperti jalur Selo atau Kopeng. Namun, pemula tetap disarankan untuk mendaki dengan pendamping yang berpengalaman dan mempersiapkan fisik dengan baik."
            },
            
        ];


        function createFaqItem(question, answer) {
            const faqItem = $('<div>', { class: 'faq-item' });

            const questionDiv = $('<div>', { class: 'faq-question' }).text(question);
            const iconDiv = $('<div>', { class: 'icon-container' }).html('<i class="fas fa-chevron-right"></i>');
            const answerDiv = $('<div>', { class: 'faq-answer' }).html('<p>' + answer + '</p>');

            faqItem.append(questionDiv, iconDiv);
            $('#faqContainer').append(faqItem, answerDiv);

            // Add click event for expanding/collapsing the answer
            faqItem.on('click', function() {
                const icon = iconDiv.find('i');
                answerDiv.toggleClass('active');
                icon.toggleClass('active');

                if (answerDiv.hasClass('active')) {
                    answerDiv.css('max-height', answerDiv.prop('scrollHeight') + 'px');
                } else {
                    answerDiv.css('max-height', '0');
                }

                // FAQ items
                $('.faq-item').not(faqItem).each(function() {
                    const otherItem = $(this);
                    const otherAnswer = otherItem.next('.faq-answer');
                    const otherIcon = otherItem.find('i');
                    otherAnswer.removeClass('active').css('max-height', '0');
                    otherIcon.removeClass('active');
                });
            });
        }

        // Add FAQ items dynamically
        faqData.forEach(faq => {
            createFaqItem(faq.question, faq.answer);
        });
    });
</script>