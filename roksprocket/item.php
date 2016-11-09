<?php
  $postid = $item->getID();
  $value = get_field( "name_testimonial", $postid ); 
  echo $value;
?>