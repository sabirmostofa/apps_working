<?php
require_once('connect.php');
require_once('functions/functions.php');
require_once('header.php');
?>


<select name='feed_selector' id='fselector'>
<?php
$query='select feedtype from feeds';
$result=mysql_query($query) or die(mysql_error());
while($array=mysql_fetch_assoc($result)):
foreach($array as $value) echo '<option>'.$value.'</option>';
endwhile;

?>
</select>
<select name='genre_selector' id='gselector'>
<?php
$query='select genre_name from genres';
$result=mysql_query($query) or die(mysql_error());
while($array=mysql_fetch_assoc($result)):
foreach($array as $value) echo '<option>'.$value.'</option>';
endwhile;

?>
</select>


<input type='button' name='form-submit' id= 'fsubmit' value='View the apps'/>
<div class='clearBoth'></div>
<div id='loadingDiv'><image  src='images/loading.gif'></image></div>

<div class='pagination'>
<?php for($i=1;$i<16;$i++):?>
<input type='button' style='float:left;margin-left:5px;' class='paginator' value='<?php  echo $i; ?>'/>
<?php endfor; ?>
</div>
<div class='clearBoth'></div>


<?php

 





?>
<div id='ajax_return'></div>
<div class='pagination'>
<?php for($i=1;$i<16;$i++):?>
<input type='button' style='float:left;margin-left:5px;' class='paginator' value='<?php  echo $i; ?>'/>
<?php endfor; ?>
</div>

