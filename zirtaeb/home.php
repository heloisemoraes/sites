<?php require_once("redirect_mobile/include.php"); ?>

<?php get_header(); ?>

<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Aviso') ) :  endif; ?>

	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Quadro de Servi&ccedil;os') ) :  endif; ?>
	
	<div id="destk_news_bnr">
		<div id="destaques">
			<ul id="abas">
						<li class="venda"><a href="#venda"><span>Venda</span></a></li>
						<li class="aluguel"><a href="#aluguel"><span>Aluguel</span></a></li>
			</ul>
			<div id="venda" class="contaba">
				<div class="slider ve"></div>
				<div class="nav"><a id="nextBtnve" href="#"></a></div>
			</div>
			<div id="aluguel" class="contaba">
				<div class="slider alu"></div>
				<div class="nav"><a id="nextBtnalu" href="#"></a></div>
			</div>
		</div>
		<div id="noticias">
			<?php if (have_posts()) : ?>
			<h3><span>Noticias</span></h3>
			<ul>
				<?php query_posts(array( 'cat' => 3, 'posts_per_page' => 4)); // Mostra posts apenas da categoria 4 (artigos)
				$i = 0;
				$classe = 'odd';
				while (have_posts()) : the_post(); 
					$i++;
					if($i%2 == 0) {$classe = 'even';} else {$classe = 'odd';}
				?>
					<li id="post-<?php the_ID(); ?>" class="<?=$classe?>"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		 <?php endif; wp_reset_query(); ?>
                        <div class="mais_news"><a href="<?php bloginfo('url'); ?>/index.php/noticias/">+ Mais not&iacute;cias</a></div>
		</div>
		<div id="banners">
			<a id="proposta">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/bnr_solicite-proposta.png" /></a>
                        <!-- tooltip element -->
                        <div class="tooltip">
                            <a href="<?php bloginfo('url'); ?>/index.php/solicite-uma-proposta/">Condom&iacute;nio</a><br />
                            <br />
                            <a href="<?php bloginfo('url'); ?>/index.php/locacao/solicite-uma-proposta-de-administracao-de-imoveis/">Loca&ccedil;&atilde;o</a><br />
                            <br />
                            <a href="<?php bloginfo('url'); ?>/index.php/fale-conosco/">Compra e Venda</a><br />
                            <br />
                            <a href="<?php bloginfo('url'); ?>/index.php/seguros/peca-agora-o-seu-calculo/">Seguros</a><br />
                        </div>
			<br /><br />
			<a href="http://www.zirtaeb.com/mobile/">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/bnr_versao-mobile.png" /></a>
		</div>
		<br class="clear" />
	</div>
<?php get_footer(); ?>

