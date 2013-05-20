<?php
  $image_url = '';
  $preset = 'blog_teaser';
  //print $output;
  if (!empty($output)){
    $image_url = imagecache_external_generate_path($output, $preset);
    print "<img src=\"$image_url\" />";
  }
  else {
  	print '';
  }
?>