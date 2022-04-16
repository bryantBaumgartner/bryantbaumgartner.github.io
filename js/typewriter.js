var i = 0;
var txt = document.getElementById("title").innerHTML;
var subtxt = document.getElementById("subtitle").innerHTML;
var speed = 50;
document.getElementById("title").innerHTML = "";
document.getElementById("subtitle").innerHTML = "_";

function typeWriter() {
    if (i < txt.length + 1) {
        document.getElementById("title").innerHTML = txt.substring(0, i) + '<span style="margin:.2em"></span><span class="blink-cursor"></span>';
        i++;
        setTimeout(typeWriter, speed);
    } else {
        setTimeout(subtypewriter, 1000);
    }
}

function subtypewriter() {
    document.getElementById("subtitle").innerHTML = subtxt;
    document.getElementById("subtitle").classList.add("opacity");
    document.getElementById("subtitle").style.removeProperty("opacity");
}

setTimeout(typeWriter, 1000)
