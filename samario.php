<div id="muevete_sm">

<div class="form-row">
    <div class="form-group col-md-4">
        <label >Identificaciòn</label>
        <input type="number" name="identificacion_ms" class="form-control" >
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id='calendario' name="nacimiento_ms" autocomplete="off" >
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Gènero</label>
        <select class="chosen-select form-control   " name="genero_ms" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="F">Otro</option>
        </select>
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-5">
        <label >Nombres</label>
        <input type="text" name="nombre_ms"  class="form-control" >
    </div>
    <div class="form-group col-md-5">
        <label >Apellidos</label>
        <input type="text" name="apellido_ms"  class="form-control"  >
    </div>

    <div class="form-group col-md-2">
        <label >Edad</label>
        <input type="text" class="form-control" name="edad_ms" id="edad" autocomplete="off"  readonly >
            <span id="edadCalculada"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label >Correo</label>
        <input type="email" name="correo_ms"  class="form-control" placeholder="@">
    </div>
    <div class="form-group col-md-6">
        <label >Celular/WhatsApp</label>
        <input type="number" name="celular_ms"  class="form-control" >
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label >Direccion domicilio</label>
        <input type="text" name="direccion_domicilio_ms"  class="form-control"  >
    </div>
    <div class="form-group col-md-4">
        <label >Bario</label>
        <select class="chosen-select form-control" name="barrio_ms" data-placeholder="Barrio" autocomplete="off" >
            <option value=""></option>
            <?php  
            $query = mysqli_query($mysqli,"SELECT * FROM barrios");
            while($data = mysqli_fetch_assoc($query)){
            ?>
            <option value="<?php echo $data['idbarrios']?>"><?php echo $data['nombre']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label >Caracterizaciòn</label>
        <select class="chosen-select form-control" name="caracterizacion_ms" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
            <option value="Adulto Mayor">Adulto Mayor</option>
            <option value="Afrocolombiano">Afrocolombiano</option>
            <option value="Desmovilizado">Desmovilizado</option>
            <option value="Discapacitado">Discapacitado</option>
            <option value="Indigena">Indígena</option>
            <option value="Desplazado">Desplazado</option>
            <option value="Embarazada">Embarazada</option>
            <option value="Extrangero">Extrangero</option>
            <option value="LGBTI">LGBTI</option>
            <option value="Raizal">Raizal</option>
            <option value="Ninguna">Ninguna</option>        
        </select>
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-5">
        <label >Foto</label>
        <input type="file" name="file" class="form-control" accept="image/*" >
    </div>
    <div class="form-group col-md-5">
        <label >Ocupacion</label>
        <input type="text" name="ocupacion_ms"  class="form-control"  >
    </div>
    <div class="form-group col-md-2">
        <label >Talla</label>
        <select class="form-control" name="talla_ms" data-placeholder="-- Seleccionar --" autocomplete="off">
                <option value=""></option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
        </select>
    </div>
</div>
</div> <!--fin muevete samario  -->
