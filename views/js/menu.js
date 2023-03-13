console.log("menu.js cargado correctamente");

function setImageUrl(imgId, inputUrl) {
    url = document.getElementById(inputUrl).value;
    console.log(url);
    document.getElementById(imgId).src = url;
}