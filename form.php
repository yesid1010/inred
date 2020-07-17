<div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label >Identificaciòn</label>
                                        <input type="number" name="identificacion" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id='calendario' name="nacimiento" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Gènero</label>
                                        <select class="chosen-select form-control   " name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" required>
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
                                        <input type="text" name="nombre"  class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label >Apellidos</label>
                                        <input type="text" name="apellido"  class="form-control" required >
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label >Edad</label>
                                        <input type="text" class="form-control" name="edad" id="edad" autocomplete="off"  readonly required>
                                            <span id="edadCalculada"></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label >Correo</label>
                                        <input type="email" name="correo"  class="form-control" placeholder="@">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label >Celular</label>
                                        <input type="number" name="celular"  class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label >Fijo</label>
                                        <input type="number" name="telefono"  class="form-control"  >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label >Direccion domicilio</label>
                                        <input type="text" name="direccion"  class="form-control" required >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label >Bario</label>
                                        <select class="chosen-select form-control" name="barrio" data-placeholder="Barrio" autocomplete="off" required>
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
                                        <select class="chosen-select form-control" name="caracterizacion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
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
                                        <input type="file" name="foto" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label >Ocupacion</label>
                                        <input type="text" name="ocupacion"  class="form-control" required >
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label >Talla</label>
                                        <select class="form-control" name="talla" data-placeholder="-- Seleccionar --" autocomplete="off">
                                                <option value=""></option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- ACUDIENTE -->
                                                
                                <div id ='acudiente'>
                                    <hr>
                                    <P style="text-align: center;"> <b>DATOS DEL ACUDIENTE</b> </P>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label >Parentezco</label>
                                            <select class="form-control" name="parentezco" data-placeholder="-- Seleccionar --" autocomplete="off">
                                                <option value=""></option>
                                                <option value="Madre">Madre</option>
                                                <option value="Padre">Padre</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Identificaciòn</label>
                                            <input type="number" name="cedula_acudiente" class="form-control" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Celular</label>
                                            <input type="number" name="cel_acudiente" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label >Nombres</label>
                                            <input type="text" class="form-control" name="acudiente">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label >Correo</label>
                                            <input type="email" name="correo_acudiente" class="form-control">
                                        </div>
                                    </div>
                                </div>                      
                        </div> <!-- fin div class="tab-pane" id="home" -->
                        <div class="tab-pane fade mt-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                            <div class="form-row" id="lesion_enfermedad">
                                <div class="form-group col-md-7">
                                    <label ><b>Lesión/Enfermedad</b></label>
                                    <label class="col-sm-2 ">Si</label>
                                    <input type="radio" class="col-sm-1" value="1" name="lesion">
                                    <label class="col-sm-2 ">No</label>
                                    <input type="radio" class="col-sm-1" value="0" checked name="lesion">
                                </div>
                                <div id = "lesion" class="form-group col-md-5">
                                    <input type="text" placeholder="¿Cual?" class="form-control" name="lesion_efermedad_deportiva">
                                </div>
                            </div>
                            <div class="form-row" id="medicamentos">
                                <div class="form-group col-md-7" >
                                    <label ><b>Usa Medicamentos&nbsp;</b></label>
                                    <label class="col-sm-2 ">Si</label>
                                    <input type="radio" class="col-sm-1" value="yes" name="medi">
                                    <label class="col-sm-2 ">No</label>
                                    <input type="radio" class="col-sm-1" value="not" checked name="medi">
                                </div>
                                <div id = "medi" class="form-group col-md-5">
                                    <input type="text" placeholder="¿Cual?"  name="medicamentos"  class="form-control" >
                                </div>
                            </div>
                            <div class="form-row" id="sisben">
                                <div class="form-group col-md-7">
                                    <label ><b>Afiliado al Sisben  &nbsp;&nbsp;</b></label>
                                    <label class="col-sm-2 ">Si</label>
                                    <input type="radio" class="col-sm-1" value="Si" name="sisben">
                                    <label class="col-sm-2 ">No</label>
                                    <input type="radio" class="col-sm-1" value="No" checked name="sisben">
                                </div>
                            </div>
                            <div class="form-row" id="eps">
                                <div class="form-group col-md-6">
                                    <label ><b>EPS</b></label>
                                    <input type="text" class="form-control"  name="eps" autocomplete="off" required>

                                </div>
                                <div class="form-group col-md-6">
                                    <label ><b>Tipo de Sangre</b></label>
                                    <select class="chosen-select form-control" name="grupo_sanguineo" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                        <option value=""></option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>

                        
                        </div> <!-- fin div class="tab-pane" id="profile" -->

                        <div class="tab-pane mt-5 fade show active" id="proyecto" role="tabpanel" aria-labelledby="proyecto-tab">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label ><b>Proyecto</b></label>
                                    <select class="chosen-select form-control" name="proyecto" id="proyecto_add" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                        <option value=""></option>
                                        <?php  
                                            $query = mysqli_query($mysqli,"SELECT * FROM proyectos");
                                            while($data = mysqli_fetch_assoc($query)){
                                        ?>
                                        <option value="<?php echo $data['idproyecto']?>"><?php echo $data['nombre']?></option>
                                            <?php } ?>
                                    </select>

                                </div>
                                <div class="form-group col-md-4" id="modalidad_add" >
                                    <label ><b>Deporte</b></label>
                                    <select class="form-control" name="modalidad"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                
                                        <option value="Futbol">Futbol</option>
                                        <option value="Softbol">Softbol</option>
                                        <option value="Voleibol">Voleibol</option>
                                        <option value="Atletismo">Atletismo</option>
                                        <option value="Ajedrez">Ajedrez</option>
                                        <option value="Beisbol">Béisbol</option>
                                        <option value="Patinaje">Patinaje</option>
                                        <option value="Boxeo">Boxeo</option>
                                        <option value="Baloncesto">Baloncesto</option>
                                        <option value="Lucha">Lucha</option>
                                        <option value="Natacion">Natación</option>
                                        <option value="Futbol de Salon">Futbol de salón</option>
                                        <option value="Levantamiento de Peso">Levantamiento de Peso</option>
                                        <option value="Bmx">Bmx</option>
                                        <option value="Escuelas Nauticas">Escuelas Nauticas</option>
                                    </select>
                                </div>
                                <!-- barrios deporte muevete samario -->
                                <div class="form-group col-md-4" id="barrio_ms" >
                                    <label ><b>Barrio</b></label>
                                    <select class="form-control" name="barrio_ms"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                
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

                                <div class="form-group col-md-4" id="barrio_proyecto">
                                    <label ><b>Bario Proyecto</b></label>
                                    <select class="chosen-select form-control" name="barrio_proyecto" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                        <option value=""></option>
                                        <?php  
                                        $query = mysqli_query($mysqli,"SELECT * FROM barrios");
                                        while($data = mysqli_fetch_assoc($query)){
                                        ?>
                                        <option value="<?php echo $data['nombre']?>"><?php echo $data['nombre']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <a href="http://www.inredsantamarta.gov.co/"class="btn btn-danger" > <i class="fa fa-times"></i> Cancelar</a>
                                    <button type="submit" name="Guardar" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button> 
                            </div>
