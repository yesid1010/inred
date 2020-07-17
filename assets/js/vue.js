$(document).ready(function() {
    $('#acudiente').hide();
    $('#lesion').hide();
    $('#medi').hide();
    //$('#modalidad_add').hide();
    $('#barrio_ms').hide();
    $('#barrio_proyecto').hide();
   // $('#escuelas_pd').hide();
    $('#muevete_sm').hide();
    
    
   // $(".alert").fadeOut(4000 );

    //$('#lesion_enfermedad').hide();
    //$('#medicamentos').hide();
    //$('#sisben').hide();
    //$('#eps').hide();

    $('#calendario2').change(function() {
        var date = $("#calendario2").val();

        var edad = calcularEdad(date);
  
        $('#edad2').val(edad);
        // if($('#edad').val() < 18){
        //     $('#acudiente').show();
        // }else{
        //     $('#acudiente').hide(); 
        // }

        if($('#edad2').val() < 5 || $('#edad2').val() > 15){
            
         swal ( "Oops" ,  "Solo se admiten menores de 6 a 14 años!" ,  "error" )
         
         $('#edad2').val('');
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


    $('#calendario_edit_pd').change(function() {
        let date = $("#calendario_edit_pd").val();

        let edad = calcularEdad(date);
  
        $('#edad_edit_pd').val(edad);

    });
    

    $('#calendario').change(function() {
        var date = $("#calendario").val();

        var edad = calcularEdad(date);
  
        $('#edad').val(edad);
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

    // escoger proyecto
    $('#proyecto_add').change(function(){
        var proyecto = $('#proyecto_add').val();

        if((proyecto == 3)){ // si es muevete samario
            $('#muevete_sm').show();
            $('#escuelas_pd').hide();
            $('#barrio_ms').show();
            $('#medicamentos').hide();
            $('#sisben').hide();
            $('#eps').hide()
            $('#modalidad_add').hide();
        }else{
            if((proyecto == 2)){ // si es escuelas populares del deporte
                $('#muevete_sm').hide();
                $('#escuelas_pd').show();
                $('#barrio_ms').hide()
                $('#modalidad_add').show();
                $('#sisben').show();
                $('#eps').show()
            }else{
                if((proyecto==1)||(proyecto == 4 )||(proyecto == 5 )){ // si son los otros proyectos
                    $('#escuelas_pd').hide();
                    $('#muevete_sm').hide();
                    $('#barrio_ms').hide();
                    $('#modalidad_add').hide();
                }
            }
            
        }

    })

    var proyecto_edit = $('#proyecto_edit').val();
    if(proyecto_edit == 1){
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



function buscar2(){
    swal({   
        title: "!! Lo sentimos !!",  
        text: "Este Usuario Ya Se Encontraba Registrado!",
           
        type: "error",  

        confirmButtonColor: "green",   
        confirmButtonText: "¡Ok!",    
        cancelButtonColor: "green",
        closeOnConfirm: false}, 
    
        function(isConfirm){   
            if (isConfirm) {     
                window.location.href="register.php"; 
            }
        
    });
    
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

function nuevo_registroCliente(){
    swal({   
        title: "guardado con Exito",  
        text: "Pronto nos comunicaremos con usted!!",
           
        type: "success",  

        confirmButtonColor: "green",   
        confirmButtonText: "¡Ok!",    
        cancelButtonColor: "green",
        closeOnConfirm: false}, 
    
        function(isConfirm){   
            if (isConfirm) {     
                window.location.href="register.php"; 
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

function nuevo_reporte(){
    swal({   
        title: "Reporte Generado con Exito",     
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

