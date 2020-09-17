var intervalo = 6000;

function slide1(){

    document.getElementById("banner").src="assets/images/cao1.jpg";
    setTimeout("slide2()", intervalo);
}

function slide2(){

    document.getElementById("banner").src="assets/images/cao2.jpg";
    setTimeout("slide3()", intervalo);
}
function slide3(){

    document.getElementById("banner").src="assets/images/cao3.jpg";
    setTimeout("slide1()", intervalo);
}

