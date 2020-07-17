<div id="escuelas_pd">
<!-- ACUDIENTE -->               
    <P style="text-align: center;"> <b>DATOS DEL ACUDIENTE</b> </P>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label >Identificaciòn</label>
            <input type="number" name="cedula_acudiente_pd" class="form-control" >
        </div>
        <div class="form-group col-md-6">
            <label >Nombres y apellidos</label>
            <input type="text" class="form-control" name="acudiente_pd">
        </div>
        <div class="form-group col-md-3">
            <label >Celular</label>
            <input type="number" name="cel_acudiente_pd" class="form-control" >
        </div>
    </div>
    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label >Cuadro informativo</label>
            <textarea class="form-control" disabled name="cuadro_informativo_pd" id="cuadro_informativo" cols="5" rows="4">Con el anexo de copia mi documento de identidad autorizo a mi hijo(a) que forme parte del programa Escuelas Populares del deporte Simón Bolívar durante el presente año, y también me responsabilizo del traslado al sitio de formación, escenarios deportivos, eventos, festivales y actividades propias del Instituto Distrital de Santa Marta para la Recreación y el Deporte. 
            </textarea>
        </div>
        <div class="form-group col-md-6">
            <label >Cedula</label>
            <input type="file" name="cedulapdf_pd" class="form-control" accept="application/pdf" >
        </div>
    </div>
    <hr>
    <P style="text-align: center;"> <b>DATOS DEL MENOR</b> </P>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label >Identificaciòn(T.I)</label>
            <input type="text" name="identificacion_pd"  class="form-control"  >
        </div>
        <div class="form-group col-md-5">
            <label >Foto</label>
            <input type="file" name="file_pd" class="form-control" accept="image/*">
        </div>
        <div class="form-group col-md-5">
            <label >Documento identidad</label>
            <input type="file" name="documento_menor_pdf_pd" class="form-control" accept="application/pdf">
        </div>

    </div>
    <div class="form-row">

    <div class="form-group col-md-5">
        <label >Nombres</label>
        <input type="text" name="nombre_pd"  class="form-control" >
    </div>
    <div class="form-group col-md-5">
        <label >Apellidos</label>
        <input type="text" name="apellido_pd"  class="form-control"  >
    </div>
    <div class="form-group col-md-2">
        <label >Talla Uniforme</label>
        <select class="form-control" name="talla_pd" data-placeholder="-- Seleccionar --" autocomplete="off">
                <option value=""></option>
                <option value="6-8">6-8</option>
                <option value="9-11">9-11</option>
                <option value="12-14">12-14</option>
        </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputPassword4">Gènero</label>
        <select class="chosen-select form-control   " name="genero_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id='calendario2' name="nacimiento_pd" autocomplete="off" >
    </div>
    <div class="form-group col-md-4">
        <label >Edad</label>
        <input type="text" class="form-control" name="edad_pd" id="edad2" autocomplete="off"  readonly >
            <span id="edadCalculada"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label >Direccion domicilio</label>
        <input type="text" name="direccion_pd"  class="form-control"  >
    </div>
    <div class="form-group col-md-4">
        <label >Bario</label>
        <select class="chosen-select form-control" name="barrio_pd" data-placeholder="Barrio" autocomplete="off" >
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
        <label >Grado de Escolaridad</label>
        <select class="chosen-select form-control" name="grado_escolaridad_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
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

</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label >Institucion educativa</label>
        <input type="text" name="institucion_educativa_pd"  class="form-control"  >
    </div>

    <div class="form-group col-md-3">
        <label >Poblacion</label>
        <select class="chosen-select form-control" name="poblacion_menor_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
            <option value="Afrocolombiano">Afrocolombiano</option>
            <option value="Desplazado">Desplazado</option>
            <option value="Indigena">Indígena</option>
            <option value="N/A">N/A</option>   
        </select>
    </div>

    <div class="form-group col-md-3">
        <label >Internet ?</label>
        <select class="chosen-select form-control" name="internet_pd" data-placeholder="-- Seleccionar --" autocomplete="off" >
            <option value=""></option>
            <option value="Hogar">Hogar</option>
            <option value="Movil">Movil</option>
            <option value="Reg">Reg</option>
            <option value="N/A">N/A</option>   
        </select>
    </div>

</div>



           
</div> <!--fin escuelas populares  -->
