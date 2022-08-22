    <?php get_template_part( 'template-parts/instagram' ); ?>
    <?php get_template_part( 'template-parts/youtube' ); ?>
    <?php get_template_part( 'template-parts/looks' ); ?>
    

</div> <!-- #main -->


<?php /* PARTE COM LARGURA MAIOR */ ?>

<?php get_template_part( 'template-parts/sobre' ); ?>
<?php get_template_part( 'template-parts/atuacao' ); ?>

<?php get_template_part( 'template-parts/agenda' ); ?>
<?php get_template_part( 'template-parts/footer' ); ?>


</div></div></div>
<div class="copy col-sm-12 col-xs-12">
Desenvolvido por: Agage Design	
</div>
	<!--div id="back-top" class="visible-lg-block visible-md-block">
		<a href="#top"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/gototop.png"></a>
	</div-->

<?php wp_footer(); ?>

<script charset="UTF-8" src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script charset="UTF-8" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousel.min.js"></script>
<script charset="UTF-8" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js?<?php echo filemtime(dirname(__FILE__).'/js/main.js'); ?>"></script>


</body>
</html>