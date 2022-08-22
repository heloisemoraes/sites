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
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

	<?php 
		$i = 0; 
		foreach ( $images as $image ) : 
			$i++;
			
			if($i <= 10){
	?>
    
    		<?php if(isset($image->ngg_custom_fields["link"]) && $image->ngg_custom_fields["link"] != '') { ?>
            
            	<a href="http://<?php echo $image->ngg_custom_fields["link"]; ?>"><img alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" /></a>
                
    		<?php } else { ?>
            
            		<img alt="<?php echo $image->alttext ?>" src="<?php echo $image->imageURL ?>" />
            <?php } ?>
 	<?php 
		
		}
		endforeach; 
	?>
    


<?php endif; ?>