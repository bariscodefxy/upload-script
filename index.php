<?php

if($_FILES){
 if(is_uploaded_file($_FILES['file']['tmp_name']))
 {
  if( substr( $_FILES['file']['name'], -4) == ".php") die("you cant troll lol");
  mkdir('./file');
  mkdir('./file/' . explode('/tmp/php', $_FILES['file']['tmp_name'])[1] . time() . '/');
  if(move_uploaded_file($_FILES['file']['tmp_name'], "./file/" . explode('/tmp/php', $_FILES['file']['tmp_name'])[1] . time() . "/" . $_FILES['file']['name']))
  {
   echo "File ". $_FILES['file']['name'] ." uploaded successfully.<br>";
   echo "Link: <a href=\"file/" . explode('/tmp/php', $_FILES['file']['tmp_name'])[1] . time() . "/" . $_FILES['file']['name'] . "\" target=\"_blank\">Git</a><br>";
  }
 }
}

?>
<form action="" method="POST" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit">Upload</button>
</form>
