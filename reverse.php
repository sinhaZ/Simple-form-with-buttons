<?php 
if(isset($_POST['reverse'])){
        echo getRevStr($_POST['name']);
}
function getRevStr($name){
    $revstr="";
    $count=strlen($name)-1;
    for($i=$count;$i>=0;$i--){ 
		$revstr.=$name[$i]; 
	}		
	return $revstr; } 
?>
<form method="post">
	<input type="textbox" name="name" required/>
    <input type="submit" name="reverse"/>
</form>
