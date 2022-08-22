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
    	<div class="titulo"><?php echo $image->ngg_custom_fields['titulo_home']; ?></div>
    	<div class="descricao"><?php echo $image->description ?></div>
        
        <div class="thumb">
	<?php if(isset($image->ngg_custom_fields["link"]) && trim($image->ngg_custom_fields["link"]) != '') { ?>
            
            	<a href="<?php echo $image->ngg_custom_fields["link"]; ?>" target="_blank"><img alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" /></a>

	<?php			
		} else {
	?>
    <a href="<?php echo $image->ngg_custom_fields['link']; ?>" target="_blank">
		<img src="<?php echo $image->imageURL ?>" /> 
    </a>
	<?php			
		}
	?>
	</div>

        
 	<?php 
		if($i == 1){break;}
		endforeach; 
	?>
    


<?php endif; ?>