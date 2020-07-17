    <div class="espacio text-center">
        <h4>Informacion del Menor</h4>
    </div>
    <hr>
    <input type="hidden" class="form-control" name="idproyecto" value="<?php echo $data['idproyecto']; ?>"  >
    <div class="row">
        <div class="form-group col-md-3 ">
            <label>Identificacion</label>
            <input type="text" class="form-control" name="identificacion_pd" value="<?php echo $data['identificacion']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Nombres</label>
            <input type="text" class="form-control" name="nombre_pd" value="<?php echo $data['nombre']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellido_pd" value="<?php echo $data['apellido']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Genero</label>
            <select class="chosen-select" name="genero_pd"  data-placeholder="-- Seleccionar --" autocomplete="off" >
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
            <select class="chosen-select" name="talla_pd" autocomplete="off">
                <option value="<?php echo $data['talla']; ?>"><?php echo $data['talla']; ?></option>
                <option value="6-8">6-8</option>
                <option value="9-11">9-11</option>
                <option value="12-14">12-14</option>
        </select>
        </div>
        

        <div class="form-group col-md-3">
            <label>Fecha de nacimiento</label>
            <input type="date" class="form-control" id='calendario_edit_pd' name="nacimiento_pd" value="<?php echo $data['nacimiento']; ?>" autocomplete="off" >
        </div>
        
        <div class="form-group col-md-3">
            <label>Edad</label>
            <input type="text" class="form-control" name="edad_pd" id="edad_edit_pd" value="<?php echo $data['edad']; ?>" autocomplete="off"  readonly >
                    <span id="edadCalculada"></span>
        </div>
        
        <div class="form-group col-md-3">
        <label>Poblacion Menor</label>
        <select class="chosen-select" name="poblacion_menor_pd"  data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value="<?php echo $data['poblacion_menor']; ?>"><?php echo $data['poblacion_menor']; ?></option>
            <option value="Afrocolombiano">Afrocolombiano</option>
            <option value="Desplazado">Desplazado</option>
            <option value="Indigena">Indígena</option>
            <option value="N/A">N/A</option>     
        </select>
    </div>
        
    </div>

    <div class="row">
        <div class="form-group col-md-3 ">
            <label>Direccion domicilio</label>
            <input type="text" class="form-control" name="direccion_domicilio_pd" value="<?php echo $data['direccion_domicilio']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Barrio domicilio</label>
            <select class="chosen-select" name="barrio_pd" data-placeholder="Barrio" autocomplete="off" >
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
            <label>Grado Escolaridad</label>
            <select class="chosen-select form-control" name="grado_escolaridad_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['grado_escolaridad']; ?>"><?php echo $data['grado_escolaridad']; ?></option>
                <option value="No estudia">No estudia</option>
                <option value="1 de primaria">1° de primaria</option>
                <option value="2 de primaria">2° de primaria</option>
                <option value="3 de primaria">3° de primaria</option>
                <option value="4 de primaria">4° de primaria</option>
                <option value="5 de primaria">5° de primaria</option>
                <option value="6 de bachillerato">6° de bachillerato</option>
                <option value="7 de bachillerato">7° de bachillerato</option>
                <option value="8 de bachillerato">8° de bachillerato</option>
                <option value="9 de bachillerato">9° de bachillerato</option>
                <option value="10 de bachillerato">10° de bachillerato</option>
                <option value="11 de bachillerato">11° de bachillerato</option>        
            </select>
        </div>
        
        <div class="form-group col-md-3 ">
            <label>Institucion Educativa</label>
            <input type="text" class="form-control" name="institucion_educativa_pd" value="<?php echo $data['institucion_educativa']; ?>"  >
        </div>
    </div>
    

    <div class="row">
        
        <div class="form-group col-md-3">
            <label>Proyecto</label>
            <input type="text" class="form-control" name="proyecto_pd" value="<?php echo $data['proyecto']; ?>" readonly >
        </div>
        
        <div class="form-group col-md-3">
            <label >Deporte</label>
            <select class="form-control" name="modalidad_pd"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['modalidad']; ?>"><?php echo $data['modalidad']; ?></option>
                <option value="Atletismo">Atletismo</option>
                <option value="Baloncesto">Baloncesto</option>
                <option value="Beisbol">Béisbol</option>
                <option value="Boxeo">Boxeo</option>
                <option value="Futbol">Futbol</option>
                <option value="Karate">Karate</option>
                <option value="Lucha Olimpica">Lucha Olimpica</option>
                <option value="Patinaje">Patinaje</option>
                <option value="Softbol">Softbol</option>
                <option value="Tekondp">Tekondo</option>
                <option value="Voleibol">Voleibol</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label >Internet</label>
            <select class="chosen-select form-control" name="internet_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['internet']; ?>"><?php echo $data['internet']; ?></option>
                <option value="Hogar">Hogar</option>
                <option value="Movil">Movil</option>
                <option value="Reg">Reg</option>
                <option value="N/A">N/A</option>   
            </select>
        </div>
        
        <div class="form-group col-md-3 ">
            <label>Lesion o efermedad deportiva</label>
            <input type="text" class="form-control" name="lesion_enfermedad_deportiva_pd" value="<?php echo $data['lesion']; ?>"  >
        </div>
        
    </div>
    
    <div class="row">
        <div class="form-group col-md-3">
            <label>Sisben</label>
            <input type="text" name="sisben_pd" class="form-control" value="<?php echo $data['sisben']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Eps</label>
            <input type="text" name="eps_pd" class="form-control" value="<?php echo $data['eps']; ?>"  >
        </div>
        
        <div class="form-group col-md-3">
            <label>Discapacidad</label>
            <select class="chosen-select form-control" name="discapacidad_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
                <option value="<?php echo $data['discapacidad']; ?>"><?php echo $data['discapacidad']; ?></option>
                <option value="Discapacidad auditiva">Discapacidad auditiva</option>
                <option value="Discapacitada de movilidad">Discapacitada de movilidad</option>
                <option value="Discapacidad en el habla">Discapacidad en el habla</option>
                <option value="Discapacidad mental">Discapacidad mental</option>
                <option value="Discapacidad visual">Discapacidad visual</option>
                <option value="N/A">N/A</option>   
            </select>
        </div>
    </div>
    <hr>
    <div class="espacio text-center">
        <h4>Informacion del Acudiente</h4>
    </div>
    <hr>
    
    <div class="row">
        
        <div class="form-group col-md-4">
            <label>Identificacion</label>
            <input type="text" name="cedula_acudiente_pd" class="form-control" value="<?php echo $data['cedula_acudiente']; ?>"  >
        </div>
        <div class="form-group col-md-4">
            <label>Nombre y Apellidos</label>
            <input type="text" name="acudiente_pd" class="form-control" value="<?php echo $data['acudiente']; ?>"  >
        </div>
        
        <div class="form-group col-md-4">
            <label>Celular</label>
            <input type="text" class="form-control" name="cel_acudiente_pd" value="<?php echo $data['cel_acudiente']; ?>"  >
        </div>
    </div>