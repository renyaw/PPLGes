<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>$id=$_GET['id'];
if($id!='x'){
  echo $id;
}
else{
  echo 'Keseluruhan';
}

?>