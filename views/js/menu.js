$(document).ready(function () {
  console.log("menu.js cargado correctamente");
  $(".menu-link").click(function () {
    $(this).next(".submenu").toggle();
  });
});