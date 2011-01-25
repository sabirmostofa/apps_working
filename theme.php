<li class='round'>

<div class='imageHolder'>
<div class='<?php echo $class=($current_rank>99)?'currentRank':'currentRank1'; ?>'><?php echo '#'.$current_rank;?></div> 
<image  src="<?php echo $app_image; ?>"/>
<div class='rankHolder'>
<?php echo $rank_diff;?>
</div>
</div>
<div class='holder'>
<h4 style='text-align:center;'><?php echo $post_title;?></h4>

<div class='content'><?php echo $post_excerpt;?></div>
<?php if($read_more!=''):?>
<div class='more'>Read more</div>
<?php endif;?>
<div class='read-more'><?php echo $read_more;?></div>
</div>
<div style='float:left'>
<img src="image.php?ranks=<?php echo $ranks;?>"/>
</div>

<div style="clear:both;"></div>

</li>
