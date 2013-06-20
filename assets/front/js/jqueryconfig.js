/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function(){
$.mobile.pageLoadErrorMessage = 'Esta pagina no existe, el mensaje de error ha sido cambiado';
//$.mobile.fixedToolbars.show(true);
$.mobile.defaultDialogTransition='slideup';
$.mobile.defaultPageTransition='flip';
$("#mostrar").click(function(e){
    $.mobile.loadingMessage = "Hemos modificado el mensaje del Loading";
$.mobile.showPageLoadingMsg('');
});

$("#ocultar").click(function(e){
$.mobile.hidePageLoadingMsg();
});
});


