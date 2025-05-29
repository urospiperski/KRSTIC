var audio1 = document.getElementById("gitara");
var audio2 = document.getElementById("audioID");
var audio3 = document.getElementById("audioID");
var audio4 = document.getElementById("audioID");
var audio5 = document.getElementById("audioID");
var audio6 = document.getElementById("audioID");

function PlaySound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.play();
}
function StopSound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.pause();
    thissound.currentTime = 0;
}
function OpenWikiF(){
	window.open('https://sr.wikipedia.org/wiki/%D0%A4%D1%80%D1%83%D0%BB%D0%B0');
}
function OpenWikiV(){
	window.open('https://sr.wikipedia.org/wiki/%D0%92%D0%B8%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0');
}
function OpenWikiS(){
	window.open('https://sr.wikipedia.org/wiki/%D0%A1%D0%B0%D0%BA%D1%81%D0%BE%D1%84%D0%BE%D0%BD');
}
function OpenWikiK(){
	window.open('https://sr.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B0%D0%B2%D0%B8%D1%80');
}
function OpenWikiG(){
	window.open('https://sr.wikipedia.org/wiki/%D0%93%D0%B8%D1%82%D0%B0%D1%80%D0%B0');
}
function OpenWikiB(){
	window.open('https://sr.wikipedia.org/wiki/%D0%91%D1%83%D0%B1%D1%9A%D0%B5%D0%B2%D0%B8');
}