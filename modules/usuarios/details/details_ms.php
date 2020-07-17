<div class="row ">
                <div class="col-md-4">
                   <img src="modules/usuarios/<?php echo $data['foto'] ?>" width="120px" height="150px" > <br>
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
                    <label>Correo</label>
                    <input type="email" class="form-control" value="<?php echo $data['correo']; ?>" readonly >
                </div>
                <div class="form-group col-md-3">
                    <label>Fecha de nacimiento</label>
                    <input type="text" class="form-control" value="<?php echo $data['nacimiento']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Edad</label>
                    <input type="text" class="form-control" value="<?php echo $data['edad']; ?>" readonly >
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
                    <label>Celular</label>
                    <input type="text" class="form-control" value="<?php echo $data['celular']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3 ">
                    <label>Lesion o efermedad deportiva</label>
                    <input type="text" class="form-control" value="<?php echo $data['lesion']; ?>" readonly >
                </div>
            </div>
            

            <div class="row">
                <div class="form-group col-md-3 ">
                    <label>Ocupacion</label>
                    <input type="text" class="form-control" value="<?php echo $data['ocupacion']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Proyecto</label>
                    <input type="text" class="form-control" value="<?php echo $data['proyecto']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Barrio Proyecto</label>
                    <input type="text" class="form-control" value="<?php echo $data['barrio_ms']; ?>" readonly >
                </div>
                
                <div class="form-group col-md-3">
                    <label>Caracterizacion</label>
                    <input type="text" class="form-control" value="<?php echo $data['caracterizacion']; ?>" readonly >
                </div>

            </div>
            