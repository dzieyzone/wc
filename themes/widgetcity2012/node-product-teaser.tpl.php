<?php
$imgpreset = ($phaseout)?'phaseout-list':'product-front-list';
?>
<div class="product-teaser <?php echo $classes; ?><?php echo ($unpublished)?' teaser-unpublished':'';?>">
  <div class="node-inner">
    <div class="teaser-image">
    <?php
    $product_image = $node->field_product_image[0];
    echo '<a href="'.$node_url.'">'.theme('imagecache', $imgpreset, $product_image['filepath'],$title,$product_image['data']['description']).'</a>';
    ?>
    </div>
    <div class="teaser-detail">
      <h3 class="title"><a href="<?php echo $node_url; ?>" title="<?php echo $title ?>"><?php echo (strlen($title) < 20)?$title : substr($title,0, 20).' ...'; ?></a></h3>
      <?php 
				if ($phaseout):
						echo '<div class="sell-price">Phase Out</div>';														 
				else:
					if ($node->list_price > 0):
						echo '<div class="list-price">'.uc_currency_format($node->list_price).'</div>';
					endif;
						echo '<div class="sell-price">'.uc_currency_format($node->sell_price).'</div>';
				endif;
        ?>
    </div>
  </div>
</div>
