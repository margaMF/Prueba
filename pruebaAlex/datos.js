let ciutatsText = document.getElementById('ciutats');
function suggeriments(ciutat) {
    if (ciutat.length == 0) {
        ciutatsText.innerHTML = '';
        return;
    }
    let xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onload = function () {
        ciutatsText.innerHTML = this.responseText;
    }

    xmlhttp.open('GET', "getConsulta.php?q=" + ciutat);
    xmlhttp.send();
}
