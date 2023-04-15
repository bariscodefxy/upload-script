<?php

if($_POST){
 if(is_uploaded_file($_FILES['file']['tmp_name'])
 {
  mkdir('./file');
  mkdir('./file/' . time() . '/');
  if(move_uploaded_file($_FILES['file']['tmp_name'], "./file/" . time() . "/" . $_FILES['file']['name']))
  {
   echo "File ". $_FILES['file']['name'] ." uploaded successfully.<br>";
   echo "Link: " . $_SERVER['HTTP_HOST'] . "/" . "file/" . time() . "/" . $_SERVER['file']['name'] . "<br>";
  }
 }
}

?>
<form action="" method="POST">
 <input type="file" name="file" />
 <button type="submit"></button>
</form>
