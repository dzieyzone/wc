<?php
  $image_url = '';
  $preset = 'blog_teaser';
  if ($url = $output){
    $image_url = imagecache_external_generate_path($url, $preset);
    print "<img src=\"$image_url\" />";
  }
  else {
  	print '';
  }
?>