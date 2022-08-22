<?php
/**
Template Page for the album overview

Follow variables are useable :

	$album     	 : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/

#echo '<pre>'; var_dump($album); echo '</pre>';
#echo '<pre>'; var_dump($galleries); echo '</pre>';
#echo '<pre>'; var_dump($pagination); echo '</pre>';

?>

<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : /**/ ?>


<div id="footerGallery" class="ngg-albumoverview">

	<!-- List of galleries -->
	<?php $i=0; foreach ($galleries as $gallery) : $i++;  if($i <= 3){?>
	

	<?php if ($gallery->counter > 0) : ?>
    
	<?php
		global $nggdb;
	    $fotos = $nggdb->get_gallery ($gallery->gid, 'sortorder', 'ASC', true, 0, 0);
		#echo '<pre>'; var_dump($galeria); echo '</pre>';
		
		#$link_pag = $gallery->pagelink; 
		#$link_pag = get_bloginfo('url')."/galeria-de-fotos/?album=1&gallery=".$gallery->gid; 
		$link_pag = '#';
	?>
	<div class="ngg-album-compact">
		<div class="ngg-album-compactbox">
			<div class="ngg-album-link">
				<a class="Link trigger" href="<?php echo $link_pag; ?>">
					<img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/>
				</a>
			</div>
		</div>
        <div class="gallery-content" style="display:none;">
        	<?php foreach($fotos as $foto) : ?>
            	<a href="<?php echo $foto->imageURL; ?>" title="<?php echo $foto->alttext; ?>"><img src="<?php echo $foto->thumbURL; ?>" /></a>
		 	<?php endforeach; ?>            
        </div>
		<div class="titulo"><?php echo $gallery->title; ?></div>
		<p><strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?></p>
	</div>
    
	<?php endif; ?>
	
	<?php } ?> 

 	<?php endforeach; ?>


	<!-- Pagination -->
 	<?php echo $pagination ?>
</div>

<script type='text/javascript'>
jQuery(document).ready(function($){
	var $countGal = 0;
	$('.gallery-content').each(function(){
		$countGal ++;
		
		$(this).find('a').each(function(){
			$(this).attr('rel','fancybox_'+$countGal);
		});
				
	});
	$('#footerGallery .trigger').click(function(e){
		e.preventDefault();
		$(this).parents('.ngg-album-compact').find('.gallery-content a:first').click();
	});    
});
</script>
<?php /**/ endif; ?>
