    <input type="hidden" class="form-control" name="idproyecto" value="<?php echo $data['idproyecto']; ?>"  >
    <div class="row">
        <div class="form-group col-md-3 ">
            <label>Identificacion</label>
            <input type="text" class="form-control" name="identificacion_ms" value="<?php echo $data['identificacion']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Nombres</label>
            <input type="text" class="form-control" name="nombre_ms" value="<?php echo $data['nombre']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellido_ms" value="<?php echo $data['apellido']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Genero</label>
            <select class="chosen-select" name="genero_ms"  data-placeholder="-- Seleccionar --" autocomplete="off" >
              <option value="<?php echo $data['genero']; ?>"><?php echo $data['genero']; ?></option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              <option value="Otro">Otro</option>
            </select>
        </div>
        

    </div>
    
    <div class="row">

        <div class="form-group col-md-3">
            <label>Talla</label>
            <select class="chosen-select" name="talla_ms" autocomplete="off">
                <option value="<?php echo $data['talla']; ?>"><?php echo $data['talla']; ?></option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
        </select>
        </div>
        
        <div class="form-group col-md-3">
            <label>Correo</label>
            <input type="email" class="form-control" name="correo_ms" value="<?php echo $data['correo']; ?>"  >
        </div>
        <div class="form-group col-md-3">
            <label>Fecha de nacimiento</label>
            <input type="date" class="form-control" id='calendario_edit' name="nacimiento_ms" value="<?php echo $data['nacimiento']; ?>" autocomplete="off" >
        </div>
        
        <div class="form-group col-md-3">
            <label>Edad</label>
            <input type="text" class="form-control" name="edad_ms" id="edad_edit" value="<?php echo $data['edad']; ?>" autocomplete="off"  readonly >
                    <span id="edadCalculada"></span>
        </div>
        
    </div>

    <div class="row">
        <div class="form-group col-md-3 ">
            <label>Direccion domicilio</label>
            <input type="text" class="form-control" name="direccion_domicilio_ms" value="<?php echo $data['direccion_domicilio']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Barrio domicilio</label>
            <select class="chosen-select" name="barrio_ms" data-placeholder="Barrio" autocomplete="off" >
               <option value="<?php echo $data['idbarrio']; ?>"><?php echo $data['barrio']; ?></option>
               <?php  
                 $query2 = mysqli_query($mysqli,"SELECT * FROM barrios");
                 while($data2 = mysqli_fetch_assoc($query2)){
               ?>
               <option value="<?php echo $data2['idbarrios']?>"><?php echo $data2['nombre']?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group col-md-3">
            <label>Celular</label>
            <input type="text" class="form-control" name="celular_ms" value="<?php echo $data['celular']; ?>"  >
        </div>
        
        <div class="form-group col-md-3 ">
            <label>Lesion o efermedad deportiva</label>
            <input type="text" class="form-control" name="lesion_enfermedad_deportiva_ms" value="<?php echo $data['lesion']; ?>"  >
        </div>
    </div>
    

    <div class="row">
        <div class="form-group col-md-3 ">
            <label>Ocupacion</label>
            <input type="text" class="form-control" name="ocupacion_ms" value="<?php echo $data['ocupacion']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Proyecto</label>
            <input type="text" class="form-control" name="proyecto_ms" value="<?php echo $data['proyecto']; ?>" readonly >
        </div>
        
        <div class="form-group col-md-3">
            <label>Barrio Proyecto</label>
            <select class="form-control" name="barrio_proyecto_ms"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['barrio_ms']; ?>"><?php echo $data['barrio_ms']; ?></option>
                <option value="20 DE JULIO">20 DE JULIO</option>
                <option value="ALMENDRO PM">ALMENDRO PM</option>
                <option value="ALMENDRO AM">ALMENDRO AM</option>
                <option value="ANDREA CAROLINA">ANDREA CAROLINA</option>
                <option value="BASTIDAS">BASTIDAS</option>
                <option value="BONDA">BONDA</option>
                <option value="BOSQUE">BOSQUE</option>
                <option value="BULEVAR DE LA ROSA">BULEVAR DE LA ROSA</option>
                <option value="CANTILITO">CANTILITO</option>
                <option value="CISNE">CISNE</option>
                <option value="CIUDAD EQUIDAD AM">CIUDAD EQUIDAD AM</option>
                <option value="CRISTO REY">CRISTO REY</option>
                <option value="CURINCA">CURINCA</option>
                <option value="EL MAYOR">EL MAYOR</option>
                <option value="EL PARQUE">EL PARQUE</option>
                <option value="GAIRA">GAIRA</option>
                <option value="HONDAS DEL CARIBE">HONDAS DEL CARIBE</option>
                <option value="LA BOLIVARIANA">LA BOLIVARIANA</option>
                <option value="LA PAZ">LA PAZ</option>
                <option value="LIBANO">LIBANO</option>
                <option value="MANZANARE">MANZANARE</option>
                <option value="MARIA EUGENIA">MARIA EUGENIA</option>
                <option value="NACHO VIVE">NACHO VIVE</option>
                <option value="PANDO">PANDO</option>
                <option value="PARQUE DEL AGUA">PARQUE DEL AGUA</option>
                <option value="PARQUES DE BOLIVAR">PARQUES DE BOLIVAR</option>
                <option value="PESCAITO">PESCAITO</option>
                <option value="RODADERO">RODADERO</option>
                <option value="SAN MIGUEL">SAN MIGUEL</option>
                <option value="SAN PEDRO">SAN PEDRO</option>
                <option value="SANTA ANA">SANTA ANA</option>
                <option value="SANTA CLARA">SANTA CLARA</option>
                <option value="SANTA CRUZ">SANTA CRUZ</option>
                <option value="TAGANGA">TAGANGA</option>
                <option value="TAMINAKA">TAMINAKA</option>
                <option value="TEJARES">TEJARES</option>
                <option value="TRUPILLO">TRUPILLO</option>
                <option value="VILLA BOLIOVARIANA AM">VILLA BOLIOVARIANA AM</option>
                <option value="VILLA BOLIOVARIANA PM">VILLA BOLIOVARIANA PM</option>
                <option value="VILLA MARBELLA">VILLA MARBELLA</option>
            </select>
        </div>
        
        <div class="form-group col-md-3">
            <label>Caracterizacion</label>
            <select class="chosen-select" name="caracterizacion_ms"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['caracterizacion']; ?>"><?php echo $data['caracterizacion']; ?></option>
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
    