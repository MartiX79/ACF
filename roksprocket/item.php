<?php   $postid = $item->getID(); ?>

 <?php if ($value = get_field( "acf_field_name", $postid )): ?>
   <div class="container">
	   <?php echo $value  ?>
   </div>
 <?php endif; ?>