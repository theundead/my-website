<?php


$name = $_REQUEST['name'];


echo $name;

if($name != null )
{
    header("Location: http://localhost/my-website/success.php");
}
else {
    header("Location: http://localhost/my-website/error.php");
}


?>
