$(document).ready(function() {
    $('#acudiente').hide();
    $('#lesion').hide();
    $('#medi').hide();
    $('#modalidad_add').hide();

    $('#calendario').change(function() {
        var date = $("#calendario").val();

        var edad = calcularEdad(date);
  
        $('#edad').val(edad);
        if($('#edad').val() < 18){
            $('#acudiente').show();
        }else{
            $('#acudiente').hide(); 
        }
    });

    $('#calendario_edit').change(function() {
        var date = $("#calendario_edit").val();

        var edad = calcularEdad(date);
  
        $('#edad_edit').val(edad);
        if($('#edad_edit').val() < 18){
            $('#edit_acudiente').show();
        }else{
            $('#edit_acudiente').hide();
        }
    });



    $('#calendario2').change(function() {
        var date = $("#calendario2").val();

        var edad = calcularEdad(date);
  
        $('#edad2').val(edad);
    });

    $('input:radio[name=lesion]').change(function(){

        var lesion = $('input:radio[name=lesion]:checked').val();
        if(lesion == '1'){
            $('#lesion').show();
        }else{
            $('#lesion').hide();
        }
    })

    $('input:radio[name=medi]').change(function(){

        var medi = $('input:radio[name=medi]:checked').val();
        if(medi == 'yes'){
            $('#medi').show();
        }else{
            $('#medi').hide();
        }
    })

    $('#proyecto_add').change(function(){
        var proyecto = $('#proyecto_add').val();
        if(proyecto == 3){
            $('#modalidad_add').show();
        }else{
            $('#modalidad_add').hide();
        }
    })

    var proyecto_edit = $('#proyecto_edit').val();
    if(proyecto_edit == 3){
        $('#modalidad_edit').show();
    }else{
        $('#modalidad_edit').hide();
    }

    $('#proyecto_edit').change(function(){
        if($('#proyecto_edit').val( ) == 3){
            console.log($('#proyecto_edit').val());
            $('#modalidad_edit').show();
        }else{
            console.log($('#proyecto_edit').val());
            $('#modalidad_edit').hide();
        }
    })

    
    var proyecto_detail = $('#proyecto_detail').val();
    if(proyecto_detail == "Deportes"){
        $('#modalidad_detail').show();
    }else{
        $('#modalidad_detail').hide();
    }

});


function editar_registro(){
    swal({   
        title: "Editado con Exito",     
        type: "success",  

        confirmButtonColor: "green",   
        confirmButtonText: "¡Ok!",    
        cancelButtonColor: "green",
        closeOnConfirm: false}, 
    
        function(isConfirm){   
            if (isConfirm) {     
                window.location.href="main.php?module=usuarios"; 
            }
        });

}

function buscar(){
    swal ( "Oops" ,  "Este Usuario Ya Se Encontraba Registrado!" ,  "error" )

}

function nuevo_registro(){
    swal({   
        title: "guardado con Exito",     
        type: "success",  

        confirmButtonColor: "green",   
        confirmButtonText: "¡Ok!",    
        cancelButtonColor: "green",
        closeOnConfirm: false}, 
    
        function(isConfirm){   
            if (isConfirm) {     
                window.location.href="main.php?module=usuarios"; 
            }
        
    });
}

function borrar_registro(){
    swal({   
        title: "borrado con Exito",     
        type: "success",  

        confirmButtonColor: "green",   
        confirmButtonText: "¡Ok!",    
        cancelButtonColor: "green",
        closeOnConfirm: false}, 
    
        function(isConfirm){   
            if (isConfirm) {     
                window.location.href="main.php?module=usuarios"; 
                
            }
        
    });
}


function calcularEdad(fecha) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

    return edad;
}

