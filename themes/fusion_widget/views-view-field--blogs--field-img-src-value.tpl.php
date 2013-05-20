<?php
  $image_url = '';
  $preset = 'blog_teaser';
  $pos = strpos($output, 'http');
  if ($pos !== false){
    $image_url = imagecache_external_generate_path($output, $preset);
    print "<img src=\"$image_url\" />";
  }
  else {
  	print '';
  }
?>