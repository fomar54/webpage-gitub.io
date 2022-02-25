<html>

<form  action="" method="post">
<label>Name: <br> <input type="text" name="name" </br>

<label>Messsage:<br><textarea cols="3"rows="4"name="message"></textarea><label></br>

<input type="submit" name="submit" value"post">.
</form>
</html>
<?php

$name = $_POST["name"];
$text = $_POST["message"];
$post =$_POST["submit"];

if($post)
#WRITE DOWN COMMENTS#
$write= fopen("com.txt","a+");
fwrite($write,"<u><b>$name</b></u><br>$text"<br>);
folose($write);
#DISPLAY COMMENTS#
$read=fopen("com.txt","r+t")
echo"All comments:;
while (feof($read)){
echo fread($read,1024);
}

fclose($read);

)

else(
  $read=fopen("com.txt","r+t")
  echo"All comments:<br>";

  while (feof($read)){
  echo fread($read,1024);
  }

  fclose($read);
)

  ?>
