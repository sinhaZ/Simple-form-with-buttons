<?php 
if(isset($_POST['space'])){
    echo spaceReplaceByHypen($_POST['name']);
}
function spaceReplaceByHypen($name){
    $str="";
    $str = str_replace(' ', '-', $name);
    return $str;}
?>
<form method="post">
	<input type="textbox" name="name" required/>
    <input type="submit" name="space"/>
</form>