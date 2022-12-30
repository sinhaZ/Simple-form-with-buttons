<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>Assesment</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php $result=" "?>
    <?php $text=" "?>
    <?php $nameValue=" "?>
  <?php 
      if(isset($_POST['reverse'])){
        // echo getRevStr($_POST['name']);
        $nameValue = $_POST['name'];
        $text ='';
        $result = getRevStr($_POST['name']);
      }
      function getRevStr($name){
        $revstr="";
        $count=strlen($name)-1;
        for($i=$count;$i>=0;$i--){
           $revstr.=$name[$i]; 
        } 
        return $revstr;
      } 
    ?>
  <?php
    if(isset($_POST['counter'])){
      $nameValue = $_POST['name'];
      $text = 'Number of vowel is';
      $result = count_Vowels($_POST['name']);
    }

    function count_Vowels($name){
      preg_match_all('/[aeiou]/i', $name, $matches);
      return count($matches[0]);
    }
  ?>
  <?php 
    if(isset($_POST['character'])){
      $nameValue = $_POST['name'];
      $text = '3rd character is';
      $result = get3rdChar($_POST['name']);
  }
  function get3rdChar($name){
	  return $name[2]; } 
  ?>
  <?php 
    if(isset($_POST['space'])){
      $nameValue = $_POST['name'];
      $text ='';
      $result = spaceReplaceByHypen($_POST['name']);
    }
    function spaceReplaceByHypen($name){
      $str="";
      $str = str_replace(' ', '-', $name);
      return $str;
    }
  ?>
  <?php 
  if(isset($_POST['sort'])){
    $nameValue = $_POST['name'];
    $text = '';
    $result = StrSort($_POST['name']);
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
    <div class="container">
      <div class="main">
        <div class="clientForm">
          <h1>Enter Enquiries</h1>
          <form method="post">
            <div class="mb-3">
              <label for="clientName" class="form-label">Full Name</label>
              <input type="name" class="form-control" id="clientName" name="name" value="<?php echo ($nameValue) ?>"/>
            </div>
            <div class="mb-3">
              
              <input type="name" class="form-control" id="result" name="result" value="<?php echo ($text. " " .$result) ?>"/>
            </div>
            <div id="clientHelp" class="form-text">
              Button description:
              <ul>
                <li>Reverse will reverse string</li>
                <li>Counter will count vowels in any name</li>
                <li>Character will find 3rd character of any name</li>
                <li>Space will replace space with hyphens</li>
                <li>
                  Sort will sort the characters of any name 
                </li>
              </ul>
            </div>
           
            <button type="submit" class="btn btn-outline-primary" name="reverse">
              Reverse
            </button>
            <button type="submit" class="btn btn-outline-secondary" name="counter">
              Counter
            </button>
            <button type="submit" class="btn btn-outline-success" name="character">
              Character
            </button>
            <button type="submit" class="btn btn-outline-danger" name="space">Space</button>
            <button type="submit" class="btn btn-outline-warning" name="sort">Sort</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
