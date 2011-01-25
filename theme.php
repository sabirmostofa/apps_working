
<div class='liLeft'>
<div class='<?php echo $class=($current_rank>99)?'currentRank':'currentRank1'; ?>'><?php echo '#'.$current_rank;?></div> 

<div class='rankHolder <?php if($rank_diff==0):
echo 'unchanged';
elseif($rank_diff<0): echo 'down';
else: echo 'up';
endif; ?>'>
<?php 
if($rank_diff==0)echo '=';
else{
$rank_diff=($rank_diff>0)?'+'.$rank_diff:$rank_diff;
echo '<br/>'.$rank_diff;
}?>
</div>
</div>


<li class='round'>
<div class='imageHolder'>
<image  src="<?php echo $app_image; ?>" width='100' height='100'/>
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
<img src="image.php?ranks=<?php echo $ranks;?>" width='100' height='100'/>
</div>
</li>
<div style="clear:both;"></div>
