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

<div id="degustaRevista">

	<?php 
		foreach ( $images as $image ) : 
		$i++;
	?>
       <div class="degRevista">
        <div class="thumb">
	<?php        		
		if(isset($image->ngg_custom_fields['site']) && trim($image->ngg_custom_fields['site']) != ''){
	?>
    <a href="http://<?php echo $image->ngg_custom_fields['site']; ?>" target="_blank">
		<img src="<?php echo $image->imageURL ?>" /> 
    </a>
	<?php			
		} else {
	?>
		<img src="<?php echo $image->imageURL ?>" />
	<?php			
		}
	?>
	</div>
   	<div class="titulo"><?php echo $image->alttext ?></div>

        </div>
        
    <?php if( ($i%4) == 0){ ?>
        
     <?php } ?>   
 	<?php 
		endforeach; 
	?>

	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>