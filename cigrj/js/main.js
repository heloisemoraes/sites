jQuery(document).ready(function($){

    //Videos do youtube adicionados por iframe, ficarem responsivos
    $('.post_body iframe[src*="youtube.com/embed/"]').wrap( "<div class='video-container'></div>" );

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     LATERAL FIXA
     - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
   /* $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 51 && $(window).width() > 954) {

                var cntSobre = $("#sobre");
                var cntSidebar = $("#lateral");
                var sidebarBottomPos = (parseInt(cntSidebar.position().top) + parseInt(cntSidebar.height()));

                if(
                    ( parseInt(cntSobre.position().top) > sidebarBottomPos ) ||
                    ( parseInt(cntSidebar.position().top) > $(this).scrollTop() )
                ){
                    $('.sidebar').css('top', ($(this).scrollTop()-51) );
                    $('.admin-bar .sidebar').css('top','-18px');
                }

            } else {
                $('.sidebar').css('top','51px');
                $('.admin-bar .sidebar').css('top','83px');
            }
        });
    });*/

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     SINGLE PAGE EFFECT
     - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
     $('.go-to-section a').click(function(e){
        e.preventDefault();

        var section = $(this).attr('href');
        $("html, body").animate({ 
            scrollTop: $(section).offset().top 
        }, 1000);

        return false;
     });

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     ALTURA FIXO DA VISUALIZAÇÃO EM GRADE
     - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
     $('.row_grade').each(function(){

        var maxHeightPost = 0;
        $(this).find('.post_body').each(function(){
            $(this).css('display','table');
            var theight = $(this).height();
            
            if(theight > maxHeightPost){
                maxHeightPost = theight;
            }
        });
        $(this).find('.post_body').height(maxHeightPost);

        var maxHeightTitulo = 0;
        $(this).find('.titulo').each(function(){
            var theight = $(this).height();
            
            if(theight > maxHeightTitulo){
                maxHeightTitulo = theight;
            }
        });
        $(this).find('.titulo').height(maxHeightTitulo);

     });

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     ALTURA FIXO DA VISUALIZAÇÃO EM GRADE
     - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
    var jcarousel = $('.jcarousel');

    jcarousel
        .on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this),
                width = carousel.innerWidth();

            if (width >= 600) {
                width = width / 4;
            } else if (width >= 350) {
                width = width / 2;
            }

            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        })
        .jcarousel({
            wrap: 'circular'
        });

    $('.jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
        });
		
/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
		PLACEHOLDER PESQUISA
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	$('#pesquisar .pesquise').each(function(){
	   var textoExemplo = '';
	   $(this).attr("value", "");
	   if($(this).attr("value") == ''){
		   $(this).attr("value", textoExemplo).addClass('vazio');
	   }
	   $(this).focus(function(){
		   if($(this).attr("value") == textoExemplo){
				$(this).attr("value", "").removeClass('vazio');
		   }
	   });
	   $(this).blur(function(){
		   if($(this).attr("value") == ''){
			   $(this).attr("value", textoExemplo).addClass('vazio');
		   }
	   });
    });
		


$(document).ready(function () {
$('.navbar ').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.nav-menu-superior').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".nav-menu-superior");
  $subMenu.toggleClass('show');


  $(this).parents('li.menu-item').on('hidden.bs.dropdown', function(e) {
    $('.navbar-submenu .show').removeClass("show");
  });


  return false;
});
});



});