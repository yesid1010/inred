<div class="row ">
                <div class="col-md-4">
                   <img src="modules/usuarios/<?php echo $data['foto'] ?>" width="120px" height="150px" > <br>
                   <div class="espacio">
                       <a target="_blank"  href="modules/usuarios/<?php echo $data['copia_identidad_menor'] ?>">Documento del menor</a> <br>
                       <a target="_blank" href="modules/usuarios/<?php echo $data['cedula_adjunto_acudiente'] ?>">Documento del Acudiente</a>
                   </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-3 ">
                    <label>Identificacion</label>
                    <input type="text" class="form-control" value="<?php echo $data['identificacion']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Nombres</label>
                    <input type="text" class="form-control" value="<?php echo $data['nombre']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" value="<?php echo $data['apellido']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Genero</label>
                    <input type="text" class="form-control" value="<?php echo $data['genero']; ?>" readonly >
                </div>
            </div>
            
            <div class="row">

                <div class="form-group col-md-3">
                    <label>Talla</label>
                    <input type="text" class="form-control" value="<?php echo $data['talla']; ?>" readonly >
                </div>
                <div class="form-group col-md-3">
                    <label>Fecha de nacimiento</label>
                    <input type="text" class="form-control" value="<?php echo $data['nacimiento']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Edad</label>
                    <input type="text" class="form-control" value="<?php echo $data['edad']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Internet</label>
                    <input type="text" class="form-control" value="<?php echo $data['internet']; ?>" readonly >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 ">
                    <label>Lesion o efermedad deportiva</label>
                    <input type="text" class="form-control" value="<?php echo $data['lesion']; ?>" readonly >
                </div>
                
                
                <div class="form-group col-md-3">
                    <label>Sisben</label>
                    <input type="text" class="form-control" value="<?php echo $data['sisben']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Eps</label>
                    <input type="text" class="form-control" value="<?php echo $data['eps']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Discapacidad</label>
                    <input type="text" class="form-control" value="<?php echo $data['discapacidad']; ?>" readonly >
                </div>

            </div>
            
            <div class="row">
                <div class="form-group col-md-3 ">
                    <label>Direccion domicilio</label>
                    <input type="text" class="form-control" value="<?php echo $data['direccion_domicilio']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Barrio domicilio</label>
                    <input type="text" class="form-control" value="<?php echo $data['barrio']; ?>" readonly >
                </div>
                <div class="form-group col-md-3">
                    <label>Grado escolaridad</label>
                    <input type="text" class="form-control" value="<?php echo $data['grado_escolaridad']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Institucion Educativa</label>
                    <input type="text" class="form-control" value="<?php echo $data['institucion_educativa']; ?>" readonly >
                </div>
            </div>
            

            <div class="row">
                <div class="form-group col-md-3 ">
                    <label>Fecha registro</label>
                    <input type="text" class="form-control" value="<?php echo $data['fecha_registro']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Proyecto</label>
                    <input type="text" class="form-control" value="<?php echo $data['proyecto']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Deporte</label>
                    <input type="text" class="form-control" value="<?php echo $data['modalidad']; ?>" readonly >
                </div>
                <div class="form-group col-md-3">
                    <label>Poblacion menor</label>
                    <input type="text" class="form-control" value="<?php echo $data['poblacion_menor']; ?>" readonly >
                </div>

            </div>
            
            <div class="row">
                <div class="form-group col-md-3">
                    <label>Acudiente</label>
                    <input type="text" class="form-control" value="<?php echo $data['acudiente']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Cedula acudiente</label>
                    <input type="text" class="form-control" value="<?php echo $data['cedula_acudiente']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Celular acudiente</label>
                    <input type="text" class="form-control" value="<?php echo $data['cel_acudiente']; ?>" readonly >
                </div>
            </div>