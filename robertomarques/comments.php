<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
				?>
		

				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?></p>
				

				<?php

				return;
            }
        }

		/* Varíavel */

		$oddcomment = 'alt';

?>



<!-- AQUI COMEÇA -->

<?php if ('open' == $post-> comment_status) : ?>



<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Você está <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logado como</a></p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>


<p>Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

<?php else : ?>

<p>
<label for="author"><small>Nome <?php if ($req) _e('*'); ?></small></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
</p>

<p>
<label for="email"><small>E-mail  <?php if ($req) _e('*'); ?></small></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />

</p>

<p>
<label for="url"><small>Blog</small></label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

</p>



<?php endif; ?>



<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<br />

<?php do_action('comment_toolbar', 'comment'); ?>
<?php if ( function_exists(csm_comment_form) ) {csm_comment_form();}?>
<p><textarea name="comment" id="comment" cols="70%" rows="4" tabindex="4"></textarea></p>

<center><p><input name="submit" type="submit" id="submit" tabindex="5" value="Comentar" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p></center>

<?php do_action('comment_form', $post->ID); ?>
</form>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>

<?php if ($comments) : ?>

	<?php $contador = 1; foreach ($comments as $comment) : ?>
		<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>"></div>
		

<center>
<div class="comentarios">
<div class="commentdate">

 	<div id="autorcomentario">
  <div class="contador"><?php echo $contador; $contador++; ?></div>
	<?php echo get_avatar (get_the_author_email (), '64 ');?> <?php comment_author_link() ?> <div class="comdata"><?php comment_date('j') ?> de <?php comment_date('F') ?> de <?php comment_date('Y') ?> <?php /**/ ?></div><br></div>

	</div>



		<div class="comment-content"><?php if ($comment->comment_approved == '1'): ?>

<?php endif; ?>
	
<?php comment_text() ?>

                <?php if ($comment->comment_approved == '0') : ?>
			<em>Seu comentário aguarda aprovação.</em>
			<?php endif; ?>
		</div></center>


	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>



	<?php endforeach; /* end for each comment */ ?>


 <?php else : // this is displayed if there are no comments so far ?>
  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
	

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comentários desativados</p>
</div>		
	

	<?php endif; ?>
<?php endif; ?>




