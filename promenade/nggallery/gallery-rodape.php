<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
 * 
 * ARQUIVO ORIGINAL: /wp-content/plugins/nextgen-gallery/view/gallery.php
**/

?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<?php 
    #echo '<pre>'; var_dump($gallery); echo '</pre>';
    //echo '<pre>'; print_r($images); echo '</pre>';
    #echo '<pre>'; var_dump($pagination); echo '</pre>';
?>


<style>

footer.rodape ul.ngg-breadcrumbs{
	display: none !important;
}
.galeria-rodape{
	
}
.galeria-rodape img{
	max-width: 100%;
}
</style>

<div class="container-fluid">
	<div class="galeria-rodape row">

	<?php
    $link = home_url() . "/galerias";
	foreach ( $images as $image ) :
	
		if ( ! empty ($image->description) && $image->description != " " ){
			$desc = $image->description;
		}else{
			$desc = "";
		}
		
	?>
    
	<a class="col-sm-4" href="<?php echo $link; ?>" target="_blank" >
	<img alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" title="<?php echo $image->alttext ?>">
    <p><?php echo $desc; ?></p>
	</a>
	
 	<?php endforeach; ?>
</div>

</div>


<?php endif; ?>