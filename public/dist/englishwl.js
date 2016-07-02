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

/////////////////////////////////////////

// Sorted list of the 500 most common English words.
var wordList = ["the", "name", "of", "very", "to", "through", "and", "just", "a", "form", "in", "much", "is", "great", "it", "think", "you", "say", "that", "help", "he", "low", "was", "line", "for", "before", "on", "turn", "are", "cause", "with", "same", "as", "mean", "I", "differ", "his", "move", "they", "right", "be", "boy", "at", "old", "one", "too", "have", "does", "this", "tell", "from", "sentence", "or", "set", "had", "three", "by", "want", "hot", "air", "but", "well", "some", "also", "what", "play", "there", "small", "we", "end", "can", "put", "out", "home", "other", "read", "were", "hand", "all", "port", "your", "large", "when", "spell", "up", "add", "use", "even", "word", "land", "how", "here", "said", "must", "an", "big", "each", "high", "she", "such", "which", "follow", "do", "act", "their", "why", "time", "ask", "if", "men", "will", "change", "way", "went", "about", "light", "many", "kind", "then", "off", "them", "need", "would", "house", "write", "picture", "like", "try", "so", "us", "these", "again", "her", "animal", "long", "point", "make", "mother", "thing", "world", "see", "near", "him", "build", "two", "self", "has", "earth", "look", "father", "more", "head", "day", "stand", "could", "own", "go", "page", "come", "should", "did", "country", "my", "found", "sound", "answer", "no", "school", "most", "grow", "number", "study", "who", "still", "over", "learn", "know", "plant", "water", "cover", "than", "food", "call", "sun", "first", "four", "people", "thought", "may", "let", "down", "keep", "side", "eye", "been", "never", "now", "last", "find", "door", "any", "between", "new", "city", "work", "tree", "part", "cross", "take", "since", "get", "hard", "place", "start", "made", "might", "live", "story", "where", "saw", "after", "far", "back", "sea", "little", "draw", "only", "left", "round", "late", "man", "run", "year", "don't", "came", "while", "show", "press", "every", "close", "good", "night", "me", "real", "give", "life", "our", "few", "under", "stop", "open", "ten", "seem", "simple", "together", "several", "next", "vowel", "white", "toward", "children", "war", "begin", "lay", "got", "against", "walk", "pattern", "example", "slow", "ease", "center", "paper", "love", "often", "person", "always", "money", "music", "serve", "those", "appear", "both", "road", "mark", "map", "book", "science", "letter", "rule", "until", "govern", "mile", "pull", "river", "cold", "car", "notice", "feet", "voice", "care", "fall", "second", "power", "group", "town", "carry", "fine", "took", "certain", "rain", "fly", "eat", "unit", "room", "lead", "friend", "cry", "began", "dark", "idea", "machine", "fish", "note", "mountain", "wait", "north", "plan", "once", "figure", "base", "star", "hear", "box", "horse", "noun", "cut", "field", "sure", "rest", "watch", "correct", "color", "able", "face", "pound", "wood", "done", "main", "beauty", "enough", "drive", "plain", "stood", "girl", "contain", "usual", "front", "young", "teach", "ready", "week", "above", "final", "ever", "gave", "red", "green", "list", "oh", "though", "quick", "feel", "develop", "talk", "sleep", "bird", "warm", "soon", "free", "body", "minute", "dog", "strong", "family", "special", "direct", "mind", "pose", "behind", "leave", "clear", "song", "tail", "measure", "produce", "state", "fact", "product", "street", "black", "inch", "short", "lot", "numeral", "nothing", "class", "course", "wind", "stay", "question", "wheel", "happen", "full", "complete", "force", "ship", "blue", "area", "object", "half", "decide", "rock", "surface", "order", "deep", "fire", "moon", "south", "island", "problem", "foot", "piece", "yet", "told", "busy", "knew", "test", "pass", "record", "farm", "boat", "top", "common", "whole", "gold", "king", "possible", "size", "plane", "heard", "age", "best", "dry", "hour", "wonder", "better", "laugh", "true", "thousand", "during", "ago", "hundred", "ran", "am", "check", "remember", "game", "step", "shape", "early", "yes", "hold", "hot", "west", "miss", "ground", "brought", "interest", "heat", "reach", "snow", "fast", "bed", "five", "bring", "sing", "sit", "listen", "perhaps", "six", "fill", "table", "east", "travel", "weight", "less", "language", "morning", "among"];

//////////////////////////////////////////

// Knuth-Fisher-Yates Shuffle
// http://bost.ocks.org/mike/shuffle/
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
    // BUG: page refresh with keyboard triggers onkeyup and starts timer
    // Use restart button to reset timer

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
    
    // prevent negative wpm from incorrect words

    // template strings are pretty cool
    var results = "<ul id=\"results\">\n        <li>WPM: <span class=\"wpm-value\">" + wpm + "</span></li>\n        <li>Accuracy: <span class=\"wpm-value\">" + accuracy + "%</span></li>\n        <li id=\"results-stats\">\n        Total Words: <span>" + total + "</span> |\n        Correct Words: <span>" + correct + "</span> |\n        Incorrect Words: <span>" + incorrect + "</span>       </li>\n        </ul>";

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
        }
    }
}

function restartTest() {
    location.reload();
    $("#typebox")[0].value = "";
    // TODO: proper reset
}

var bar = new ProgressBar.Line(probar, {
  strokeWidth: 20,
  easing: 'easeInOut',
  duration: 60100,
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

// function akuad(){
//   swal({
//     title: "Selamat!!!",
//     text: "Kamu berhasil mendapatkan score tertinggi",
//     type: "input",
//     // showCancelButton: true,
//     closeOnConfirm: false,
//     animation: "slide-from-top",
//     inputPlaceholder: "Nama kamu"

    
//   },
//   function(inputValue){

//     if (inputValue === false) return false;

//     if (inputValue === "") {
//       swal.showInputError("opps, tulis nama kamu.");
//         return false
//       }

//       swal("Yeee", "Selamat " + inputValue , "success");
//     });
// }

