<?php 
  if($_GET['form']=='add') { 
    include  "add.php";
  }
  else if($_GET['form']=='edit') { 
    include "edit.php";
  }
  else if($_GET['form']=='detalles') { 
    include "details.php" ;
  }
?>