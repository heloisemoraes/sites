jQuery(document).ready(function() { // inicio jquery
								
// (INICIO) Label no busca livre
	jQuery('#buscaLivre .cmp').each(function(){
	   var textoExemplo = 'Digite aqui Ex: Apartamento Copacabana';
	   jQuery(this).attr("value", "");
	   if(jQuery(this).attr("value") == ''){
		   jQuery(this).attr("value", textoExemplo).addClass('vazio');
	   }
	   jQuery(this).focus(function(){
		   if(jQuery(this).attr("value") == textoExemplo){
				jQuery(this).attr("value", "").removeClass('vazio');
		   }
	   });
	   jQuery(this).blur(function(){
		   if(jQuery(this).attr("value") == ''){
			   jQuery(this).attr("value", textoExemplo).addClass('vazio');
		   }
	   });
    });
	// (FIM) Label no busca livre
	// (INICIO) Efeito nos quadrados
	jQuery("#quadrados img").hover(function(){
        jQuery(this).stop().animate({
            "backgroundColor" : "#ffffff"
        }, 400);
    }, function(){
        jQuery(this).stop().animate({
            "backgroundColor" : "#ffffff"
        }, 400);
    }); 	 	
    jQuery("#quadrados a").hover(function() {
        jQuery(this).siblings().stop().fadeTo(400,0.6);
    }, function() {
        jQuery(this).siblings().stop().fadeTo(400,1);
    });
	// (FIM) Efeito nos quadrados
        
}); // fim jquery