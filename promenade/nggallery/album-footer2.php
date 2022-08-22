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

<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)): ?>
<style>

footer.rodape ul.ngg-breadcrumbs{
	display: none !important;
}

</style>

<div class="container-fluid imagens_album_footer" style="max-width: 300px;">


	<!-- List of galleries -->
	<?php $i=0; foreach ($galleries as $gallery) : $i++;  if($i <= 2){?>
	

	<?php if ($gallery->counter > 0) : ?>
    
	<?php
		//global $nggdb;
	    //$fotos = $nggdb->get_gallery ($gallery->gid, 'sortorder', 'ASC', true, 0, 0);
		#echo '<pre>'; var_dump($galeria); echo '</pre>';
		#$link_pag = $gallery->pagelink;
		//$link_pag = '#'; 
		
		$link_pag = home_url() . "/galeria-de-fotos/nggallery/galeria-de-fotos/".$gallery->slug; 
		
	?>

	<div class="row" style="margin-bottom: 15px;">
		<div class="col-xs-6">
			<a href="<?php echo $link_pag; ?>">
				<img alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/>
			</a>
		</div>
		<div class="col-xs-6">
			<a href="<?php echo $link_pag; ?>">
				<h5 style="margin:0;"><?php echo $gallery->title; ?></h5>
			</a>
		</div>
	</div>

	<?php endif; ?>
	
	<?php } ?> 

 	<?php endforeach; ?>
	
	
	<div class="row" style="margin-top: -10px;">
		<a  class="col-xs-6" href="<?php echo home_url() . "/galeria-de-fotos/"; ?>" style="padding: 10px; text-align: left; font-size: 12px;">
		<i class="glyphicon glyphicon-eye-open"></i> <span style="text-decoration: underline; margin-left: 7px;">ver mais</span></a>
	</div>	


</div>

<?php endif; ?>
