var bouton = document.getElementById('uo');
var div = document.getElementById('test');
/*
bouton.onclick = function() {
if($(div).style.display=='none')
$(div).Slide.style.display='block';
else
div.style.display='none';
};
*/
jQuery(document).ready(function($) { 
 $('#uo').click(function (){ 

     if($('#test').css('display') == 'none'){ 

          $('#test').slideDown(200); 

     }else{ 

          $('#test').slideUp(200); 

     } 

}); 
});