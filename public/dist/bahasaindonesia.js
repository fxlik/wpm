// jQuery like selection of elements.
"use strict";

window.$ = document.querySelectorAll.bind(document);

// Changes for  Firefox
if (navigator.userAgent.match(/firefox/i)) {
    // Unicode font sizes
    var ffBtn = "font-weight: normal; font-size: 2em; margin-left: 0.3em;";
    $("#restart-symbol")[0].setAttribute("style", ffBtn);

    var ffwait = "line-height: 1em; font-size: 4em;";
    $(".waiting")[0].setAttribute("style", ffwait);
}

// wordlist
var wordList = ["yang", "felik", "yuricha", "isa", "dan", "di", "ini", "untuk", "mereka", "kita", "dari", "adalah", "tidak", "itu", "akan", "dalam", "bahwa", "dengan", "anda", "ada", "saya", "pada", "kami", "ke", "lebih", "telah", "seperti", "planet", "apa", "satu", "tahun", "hal", "tapi", "bumi", "besar", "sangat", "bisa", "semua", "mungkin", "hanya", "orang", "memiliki", "jika", "sebuah", "beberapa", "atau", "banyak", "dunia", "karena", "menjadi", "dapat", "lain", "benar", "oleh", "sebagai", "bintang", "melihat", "aku", "luar", "alam", "dia", "tahu", "hidup", "jadi", "apakah", "manusia", "sama", "sekarang", "datang", "harus", "bagaimana", "hari", "ketika", "sini", "narator", "tempat", "salah", "membuat", "sendiri", "tentang", "semesta", "sistem", "tetapi", "mana", "waktu", "bulan", "terjadi", "paling", "menemukan", "pergi", "kehidupan", "baru", "air", "setiap", "kecil", "juga", "sesuatu", "cara", "baik", "bahkan", "sekitar", "kemudian", "ia", "kembali", "jauh", "matahari", "seluruh", "saat", "surya", "kuno", "lalu", "mulai", "pernah", "pertama", "angkasa", "ruang", "begitu", "selama", "saja", "makhluk", "keluar", "atas", "cukup", "tata", "melakukan", "energi", "bawah", "biasa", "bagi", "hampir", "teknologi", "sana", "gravitasi", "uang", "ingin", "lagi", "pikir", "sampai", "mengapa", "laut", "setelah", "secara", "disebut", "mengambil", "sedikit", "seorang", "mengatakan", "panas", "namun", "dua", "melalui", "asing", "cahaya", "bagian", "bekerja", "menarik", "jenis", "permukaan", "ufo", "antara", "berpikir", "ditemukan", "masih", "sudah", "percaya", "gas", "masyarakat", "kali", "mendapatkan", "bukan", "aneh", "penting", "bentuk", "teori",
"para",
"sumber",
"masalah",
"perjalanan",
"mars",
"langit",
"ilmuwan",
"kau",
"dekat",
"sebenarnya",
"nya",
"menggunakan",
"awal",
"amerika",
"berbeda",
"menciptakan",
"tanpa",
"juta",
"sehingga",
"berarti",
"menunjukkan",
"berada",
"tak",
"suatu",
"pesawat",
"bukti",
"pemerintah",
"tentu",
"kekuatan",
"mencari",
"miliar",
"masa",
"lakukan",
"jupiter",
"terus",
"udara",
"rumah",
"diri",
"lainnya",
"galaksi",
"kepada",
"daya",
"raksasa",
"ribuan",
"ya",
"memberikan",
"es",
"akhirnya",
"gambar",
"mesin",
"meskipun",
"tanah",
"mencoba",
"pertanyaan",
"alien",
"perlu",
"malam",
"lihat",
"lama",
"perang",
"tersebut",
"merupakan",
"jelas",
"sementara",
"akhir",
"terlalu",
"kuat",
"maka",
"batu",
"peradaban",
"tinggi",
"selalu",
"daripada",
"tampaknya",
"membawa",
"dingin",
"terbesar",
"punya",
"belum",
"sejarah",
"tetap",
"sebelum",
"lubang",
"sebagian",
"dibuat",
"alasan",
"mil",
"titik",
"cepat",
"terlihat",
"menghasilkan",
"proses",
"terbang",
"sedang",
"dasar",
"digunakan",
"penemuan",
"ilmiah",
"anak",
"muncul",
"turun",
"depan",
"jam",
"pengetahuan",
"gunung",
"atmosfer",
"dikenal",
"sekali",
"terakhir",
"bola",
"segala",
"perusahaan",
"luas",
"emas",
"bahan",
"membangun",
"pun",
"tengkorak",
"negara",
"berubah",
"ekonomi",
"siapa",
"selatan",
"tumbuh",
"jalan",
"tepat",
"tertentu",
"indah",
"jumlah",
"ilmu",
"tiga",
"abad",
"berbicara",
"berkembang",
"saturnus",
"hewan",
"kedua",
"awan",
"satunya",
"spesies",
"mengubah",
"panjang",
"mencapai",
"tujuan",
"bersama",
"membantu",
"tiba",
"hitam",
"ukuran",
"membentuk",
"orbit",
"moneter",
"semacam",
"hukum",
"suasana",
"cincin",
"kapal",
"kristal",
"cerita",
"sederhana",
"sejak",
"berkata",
"agama",
"tubuh",
"sempurna",
"tinggal",
"mampu",
"struktur",
"sosial",
"mata",
"kemungkinan",
"berjalan",
"suhu",
"musim",
"tanaman",
"pesan",
"ide",
"lingkungan",
"semuanya",
"merasa",
"dilakukan",
"radiasi",
"menurut",
"masuk",
"hidrogen",
"berikutnya",
"kerja",
"memahami",
"seseorang",
"tua",
"sebelumnya",
"informasi",
"mengorbit",
"demikian",
"dibangun",
"jatuh",
"semakin",
"daerah",
"menyebabkan",
"dimana",
"laki",
"penuh",
"maju",
"menakjubkan",
"dasarnya",
"jutaan",
"bank",
"empat",
"setengah",
"atom",
"kilometer",
"tim",
"masing",
"perubahan",
"pekerjaan",
"menghancurkan",
"tengah",
"cair",
"kondisi",
"cerdas",
"hilang",
"utama",
"merah",
"lima",
"memungkinkan",
"bergerak",
"teleskop",
"pusat",
"langsung",
"karbon",
"mati",
"lingkaran",
"umum",
"listrik",
"astronom",
"berat",
"tampak",
"berasal",
"gagasan",
"militer",
"terhadap",
"astronot",
"pasti",
"garis",
"penjelasan",
"wilayah",
"tsoukalos",
"sisi",
"a",
"et",
"bertahan",
"terletak",
"mesir",
"dimulai",
"einstein",
"gelombang",
"metode",
"berbagai",
"perilaku",
"radio",
"bahasa",
"muda",
"debu",
"belakang",
"kota",
"pikiran",
"rasa",
"ratusan",
"itulah",
"kesempatan",
"belajar",
"mengungkapkan",
"sulit",
"misteri",
"makanan",
"skala",
"hutan",
"kaki",
"tekanan",
"tanggal",
"piramida",
"mirip",
"tunggal",
"io",
"mudah",
"kepala",
"tingkat",
"gelap",
"komputer",
"misi",
"inggris",
"tangan",
"venus",
"dewa",
"fisika",
"burung",
"terbaik",
"yeah",
"massa",
"berapi",
"produk",
"sepuluh",
"sering",
"sinyal",
"apapun",
"berbasis",
"membayangkan",
"tanda",
"menjelaskan",
"meninggalkan",
"kurang",
"kenyataannya",
"badai",
"bang",
"nah",
"keuntungan",
"diambil",
"fakta",
"mengejutkan",
"terbuat",
"memberitahu",
"duduk",
"kontak"];

//acak kata
function shuffle(array) {
    var m = array.length,
        t = undefined,
        i = undefined;
    // While there remain elements to shuffle…
    while (m) {
        // Pick a remaining element…
        i = Math.floor(Math.random() * m--);
        // And swap it with the current element.
        t = array[m];
        array[m] = array[i];
        array[i] = t;
    }
    return array;
}


// Add words to word-section

function addWords() {
    // clear existing word-section
    var wordSection = $("#word-section")[0];
    wordSection.innerHTML = "";

    for (var i = 350; i > 0; i--) {
        var words = shuffle(wordList);
        var wordSpan = "<span>" + words[i] + "</span>";
        wordSection.innerHTML += wordSpan;
    }
    // mark first word as current-word
    wordSection.firstChild.classList.add("current-word");
    document.getElementById("typebox").value = "";

    // mark last word with magic-box
    // let magicBox = document.createElement("DIV");
    // magicBox.classList.add("magic-box");
    // wordSection.appendChild(magicBox);
}

//////////////////////////////////////////

// Word Colors
var colorCurrentWord = " #dddddd";
var colorCorrectWord = "#93C572";
var colorIncorrectWord = "#e50000";

// Word Count and other data.
var wordData = {
    seconds: 60,
    correct: 0,
    incorrect: 0,
    total: 0,
    typed: 0
};

//////////////////////////////////////////
// Initial implementation notes:
// next word on <space>, if empty, then set value=""
// after <space> if value == current-word, mark as correct-word
// else, mark as incorrect-word
// if value.length != current-word[:value.length], mark as incorrect-word
// else, mark as current-word
//////////////////////////////////////////

function checkWord(word) {
    var wlen = word.value.length;
    // how much we have of the current word.
    var current = $(".current-word")[0];
    var currentSubstring = current.innerHTML.substring(0, wlen);
    // check if we have any typing errors
    if (word.value.trim() != currentSubstring) {
        current.classList.add("incorrect-word-bg");
        return false;
    } else {
        current.classList.remove("incorrect-word-bg");
        return true;
    }
}

function submitWord(word) {
    // update current-word and
    // keep track of correct & incorrect words
    var current = $(".current-word")[0];

    if (checkWord(word)) {
        current.classList.remove("current-word");
        current.classList.add("correct-word-c");
        wordData.correct += 1;
    } else {
        current.classList.remove("current-word", "incorrect-word-bg");
        current.classList.add("incorrect-word-c");
        wordData.incorrect += 1;
    }
    // update wordData
    wordData.total = wordData.correct + wordData.incorrect;

    // make the next word the new current-word.
    current.nextSibling.classList.add("current-word");
}

function clearLine() {
    // remove past words once you get to the next line
    var wordSection = $("#word-section")[0];
    var current = $(".current-word")[0]; // second line (first word)
    var previous = current.previousSibling; // first line (last word)
    var children = $(".correct-word-c, .incorrect-word-c").length;

    // <span>'s on the next line have a greater offsetTop value
    // than those on the top line.
    // Remove words until the first word on the second line
    // is the fistChild of word-section.
    if (current.offsetTop > previous.offsetTop) {
        for (var i = 0; i < children; i++) {
            wordSection.removeChild(wordSection.firstChild);
        }
    }
}

function isTimer(seconds) {

    var time = seconds;
    // only set timer once
    var one = $("#timer > span")[0].innerHTML;
    if (one == "1:00") {
        (function () {
            var typingTimer = setInterval(function () {
                if (time <= 0) {
                    clearInterval(typingTimer);
                } else {
                    time -= 1;
                    var timePad = time < 10 ? "0" + time : time; // zero padded
                    $("#timer > span")[0].innerHTML = "0:" + timePad;
                }
            }, 1000);
        })();
    } else if (one == "0:00") {
        return false;

    }
    return true;

}

function calculateWPM(data) {
    var seconds = data.seconds;
    var correct = data.correct;
    var incorrect = data.incorrect;
    var total = data.total;
    var typed = data.typed;

    var min = seconds / 60;
    var wpm = Math.ceil(typed / 5 - incorrect / min);
    var accuracy = Math.ceil(correct / total * 100);

    if (wpm < 0) {
        wpm = 0;
    } 
    else{
      if (wpm > 30) {
        akuad();
      }
    }
    // prevent negative wpm from incorrect words

    // template strings are pretty cool
    var results = "<ul id=\"results\">\n        <li>WPM: <span class=\"wpm-value\">" + wpm + "</span></li>\n        <li>Akurasi: <span class=\"wpm-value\">" + accuracy + "%</span></li>\n        <li id=\"results-stats\">\n        Kata diketik: <span>" + total + "</span> |\n        Benar: <span>" + correct + "</span> |\n        Salah: <span>" + incorrect + "</span>         </li>\n        </ul>";

    $("#word-section")[0].innerHTML = results;

    // color code accuracy
    var wpmClass = $("li:nth-child(2) .wpm-value")[0].classList;
    if (accuracy > 80) {
        wpmClass.add("correct-word-c");
    } else {
        wpmClass.add("incorrect-word-c");
    }

    console.log(wordData);
}

function typingTest(e) {

    // Char:        Key Code:
    // <space>      32
    // <backspace>  8
    // <shift>      16
    // [A-Z]        65-90
    // [' "]        222

    // Get key code of current key pressed.
    e = e || window.event;
    var kcode = e.keyCode;
    var word = $("#typebox")[0];

    // check if empty (starts with space)
    if (word.value.match(/^\s/g)) {
        word.value = "";
    } else {
        // Only score when timer is on.
        if (isTimer(wordData.seconds)) {
            checkWord(word); // checks for typing errors while you type
            // ayojalan();
            // <space> submits words
            if (kcode == 32) {
                submitWord(word); // keep track of correct / incorrect words
                clearLine(); // get rid of old words
                $("#typebox")[0].value = ""; // clear typebox after each word
            }
            wordData.typed += 1; // count each valid character typed
        } else {
            // Display typing test results.
            calculateWPM(wordData);

            //coba munculkan form
        }
    }
}



function restartTest() {
    location.reload();
      $("#typebox")[0].value = "";

    // TODO: proper reset
}

// test buat progressbar
// function ayojalan() {


var bar = new ProgressBar.Line(probar, {
  strokeWidth: 20,
  easing: 'easeInOut',
  duration: 60000,
  color: '#FFEA82',
  trailColor: '#93C572',
  trailWidth: 1,
  svgStyle: {width: '100%', height: '100%'},
  from: {color: '#467F21'},
  to: {color: '#ff4d4d'}, //#666666
  step: (state, bar) => {
    bar.path.setAttribute('stroke', state.color);
  }
});

bar.animate(1.0);
 //}


  function akuad(){
  swal({
    title: "Selamat!!!",
    text: "Kamu berhasil mendapatkan score tertinggi",
    type: "input",
    // showCancelButton: true,
    closeOnConfirm: false,
    animation: "slide-from-top",
    inputPlaceholder: "Nama kamu"

    
  },
  function(inputValue){

    if (inputValue === false) return false;

    if (inputValue === "") {
      swal.showInputError("opps, tulis nama kamu.");
        return false
      }

      swal("Yeee", "Selamat " + inputValue , "success");
    });
}

// function saya() {
//   swal({
//     title: "Selamat!!!",
//     text: "Kamu berhasil mendapatkan score tertinggi",
//     type: "input",
//     // showCancelButton: true,
//     closeOnConfirm: false,
//     animation: "slide-from-top",
//     inputPlaceholder: "Nama kamu",   
//   },
//   function(inputValue){

//     if (inputValue === false) return false;

//     if (inputValue === "") {
//       swal.showInputError("opps, tulis nama kamu.");
//         return false
//       }

//       swal("Yeee", "Selamat " + inputValue , "success");

//     });
// }
