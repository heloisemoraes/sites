

</div> <!-- #main -->


<?php /* PARTE COM LARGURA MAIOR */ ?>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12  mt-3"> 
                <div class="col-sm-2 col-xs-12 tel mt-2"> <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logob.png"/></a></div>
                <div class="col-sm-1 col-xs-12 tel mt-2"></div>
                <div class="col-sm-3 col-xs-12 tel mt-2"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Endereco') ):  endif; ?></div>
                <div class="col-sm-3 col-xs-12 telefone mt-2"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Telefone') ):  endif; ?></div>  
                <div class="col-sm-3 col-xs-12 tel mt-2 redes">
                    <h2>Redes Socias</h2>
                    <ul>
                        <li> <a href="https://www.facebook.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/face.png"/></a></li>
                        <li> <a href="https://www.instagram.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/insta.png"/></a></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="whats" >
		<a href="https://api.whatsapp.com/send?phone=5521970455308"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/whatsapp.png"></a>
	</div>

<div class="copy p-3"> 
                <p>Desenvolvido por: <a href="http://agagedesign.com">Agage Design</a>.</p>
            </div> 
        <!--div class="via"><a href="https://robertomarques.icondo.com.br/wp-login.php"><img src="< ?php bloginfo('stylesheet_directory'); ?>/imagens/via.png"/></a></div-->

</div></div></div>

	<!--div id="back-top" class="visible-lg-block visible-md-block">
		<a href="#top"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/gototop.png"></a>
	</div-->

<?php wp_footer(); ?>

<script charset="UTF-8" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousel.min.js"></script>
<script charset="UTF-8" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js?<?php echo filemtime(dirname(__FILE__).'/js/main.js'); ?>"></script>
<script src="https://portal.icondo.com.br/js/login-base.js"></script>
</body>
</html>