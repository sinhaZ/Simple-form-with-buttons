<?php 
if(isset($_POST['character'])){
        echo get3rdChar($_POST['name']);
}
function get3rdChar($name){
	return $name[2]; } 
?>
<form method="post">
	<input type="textbox" name="name" required/>
    <input type="submit" name="character"/>
</form>
