
<?php  

require_once "config/database.php";


$query = mysqli_query($mysqli, "SELECT identificacion, nombre,idrol FROM empleados WHERE identificacion='$_SESSION[identificacion]'")
                                or die('error: '.mysqli_error($mysqli));


$data = mysqli_fetch_assoc($query);
?>

<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 

    <img src="images/user/user-default.png" class="user-image" alt="User Image"/>
  
 

    <span class="hidden-xs"><?php echo $data['nombre']; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
  </a>
  <ul class="dropdown-menu">

    <li class="user-header">

        <img src="images/user/user-default.png" class="img-circle" alt="User Image"/>
     

      <p>
        <?php echo $data['nombre']; ?>

      </p>
    </li>
    
    <!-- Menu Footer-->
    <li class="user-footer">

      <div class="pull-right">
        <a style="width:80px" data-toggle="modal" href="#logout" class="btn btn-primary btn-flat">Salir</a>
      </div>
    </li>
  </ul>
</li>