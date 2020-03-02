function xhr(){ 

let xhr = null;
if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    try {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
} else{
    alert("Mettre à jour votre navigateur");
    xhr = false
}

return xhr;

}