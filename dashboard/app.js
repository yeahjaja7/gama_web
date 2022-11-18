

    $('#btnAgregarCotizacion').click(function(){
      if(validarFormVacio('frmAgregaCotizacion') > 0){
        alertify.alert(".: Debes llenar todos los campos por favor! :.");
        return false;
      }

      datos=$('#frmAgregaCotizacion').serialize();


      $.ajax({
        type:"POST",
        data:datos,
        url:"controller/guardarCotizacion_controller.php",
        success:function(r){
          console.log(r);
          
          $('#frmAgregaCotizacion')[0].reset();
          alertify.success("Agregado con exito :)");
      }
    });
    });


////////////////////////////////////////////////////

function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
      controles=d[i].split("=");
      if(controles[1]=="A" || controles[1]==""){
        vacios++;
      }
    }
    return vacios;
  }






