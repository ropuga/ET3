$(document).ready(function() { main(); });

function main(){
  $('.buscatit').keyup(function(){busca($(this).val(),'.itemtit')});
  $('.buscatit2').keyup(function(){busca($(this).val(),'.itemtit2')});
  //$('.col-md-4 , .col-md-6 , .col-md-5').draggable();
}

function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop];
    }
}

function busca(buscador,tipo){
  $(tipo).map(function(){
    var value = $(this).children("span").html();
    if(value.toLowerCase().indexOf(buscador) < 0){
      $(this).hide('slow');
    }else{
      $(this).show('slow');
    }
  });
}

function deleteNotificaciones() {
      $.ajax({
           url: 'borrarNotificaciones.php',
           success:function(html) {deleteALLNotifications(html);}

      });
 }
 function deleteALLNotifications(){
   $('.itemNotificacion').remove();
   $('#numNotif').html("0");
 }
