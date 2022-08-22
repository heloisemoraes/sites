<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php 
if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : 
	$i = 0;
?>
	<?php 
		foreach ( $images as $image ) : 
		$i++;
	?>

		 <div class="thumb">
		<?php        		
			if(!isset($image->ngg_custom_fields['link']) || $image->ngg_custom_fields['link'] == ''){
		?>
			<img src="<?php echo $image->imageURL ?>" />
		<?php			
			} else {
		?>
		<a href="http://<?php echo $image->ngg_custom_fields['link']; ?>" target="_blank">
			<img src="<?php echo $image->imageURL ?>" /> 
		</a>
		<?php			
			}
		?>
		</div>
			<div class="titulo"><?php echo $image->alttext; ?></div>
			<div class="descricao"><?php echo '<pre>'.$image->description.'</pre>' ?></div>
	
        
       

 	<?php endforeach; ?>
    


<?php endif; ?>