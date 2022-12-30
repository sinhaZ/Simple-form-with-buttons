<?php
if(isset($_POST['counter'])){
        echo count_Vowels($_POST['name']);
}

function count_Vowels($name)
{
    preg_match_all('/[aeiou]/i', $name, $matches);
    return count($matches[0]);
}

?>
<form method="post">
	<input type="textbox" name="name" required/>
    <input type="submit" name="counter"/>
</form>