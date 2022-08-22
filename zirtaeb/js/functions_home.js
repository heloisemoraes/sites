jQuery(document).ready(function() { // inicio jquery

	
	
	// (INICIO) Abas de imoveis em destaque
	jQuery(function(){
	  	jQuery("div.contaba").hide();
	  	jQuery("div.contaba:first").show();
		jQuery("#abas a:first").addClass("selecionado");
		jQuery("#abas a").click(function(){
			jQuery("div.contaba").hide();
			jQuery("#abas a").removeClass("selecionado");
			jQuery(this).addClass("selecionado");
			jQuery(jQuery(this).attr("href")).show();
			return false;
		});
	});
	// (FIM) Abas de imoveis em destaque
        
        jQuery("#proposta").tooltip({  position: "center left", effect: 'slide'});
	

}); // fim jquery