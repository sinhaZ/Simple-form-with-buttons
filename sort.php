<?php 
if(isset($_POST['sort'])){
        echo StrSort($_POST['name']);
}
function StrSort($name){
    $letters = str_split(strtolower($name)); sort($letters);
    $ret = "";
    foreach($letters as $letter){
        $ret .= $letter;
    }
    return $ret;
}

?>
<form method="post">
	<input type="textbox" name="name" required/>
    <input type="submit" name="sort"/>
</form>