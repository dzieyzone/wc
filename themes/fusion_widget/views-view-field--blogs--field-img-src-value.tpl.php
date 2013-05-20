<?php
  $image_url = '';
  $preset = 'blog_teaser';
  if (!empty($output)){
  	print $output;
    $image_url = imagecache_external_generate_path($output, $preset);
    print "<img src=\"$image_url\" />";
  }
  else {
  	print '';
  }
?>