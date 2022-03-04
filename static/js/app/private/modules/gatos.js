jQuery(document).ready(function ($) {
console.log('en -  gatos.js');


$('select').on('change', function() {
    event.preventDefault();
    $("#usuario_id").val(this.value ).change();

                $.ajax({
                     url:base_url() + "gato/show_gatos",
                     type: "post",
                     data: {usuario_id: this.value},
                         success: function (response) {

                            alert('success');

                            //console.log(json.response_code);
                            //console.log(json.message);
                            $("tabla-gatos").load(response);

         
                        },
                        error: function(ts) {
                           console.log(ts.responseText);
                            alert('Ocurrió un error, por favor vuelva a intentarlo');
                         } 
                    }); 


});  



    //clear
    $(document).on(
        'click',
        '#btn-clear',
        function (event) {
            event.preventDefault();
            console.log('clear forma'); 
            clear_form();

        }
    );       

    //cancelar
    $(document).on(
        'click',
        '#btn-cancel',
        function (event) {
            event.preventDefault();
            console.log('cancelar forma'); 
            clear_form();

        }
    );

  
    

    $(document).on('click', '#btn-save', function (event) {
        event.preventDefault();
        console.log('save forma'); 
        //Validamos  
      let id_usuario            = $.trim($("#usuario_id").val());
      let gato_id               = $.trim($("#gato_id").val());
      let nombre_gato           = $.trim($("#nombre_gato").val());
      let gato_edad             = $.trim($("#gato_edad").val()); 
      let caracteristicas_gato  = $.trim($("#caracteristicas_gato").val());
      let gato_raza             = $.trim($("#gato_raza").val());
      let gato_foto             = $.trim($("#gato_foto").val());
      let gato_cumpleanos       = $.trim($("#gato_cumpleanos").val()); 

      let goToValidation = true;


       if (nombre_gato.length < 1) {
           $("#nombre_gato").focus();
          goToValidation = false;
      }

      if (gato_edad.length < 1) {
           $("#gato_edad").focus();
          goToValidation = false;
      }      

      if (caracteristicas_gato.length < 1) {
           $("#caracteristicas_gato").focus();
          goToValidation = false;
      }

      if (gato_raza.length < 1) {
           $("#gato_raza").focus();
          goToValidation = false;
      }


      if (gato_foto.length < 1) {
           $("#gato_foto").focus();
          goToValidation = false;
      }

      if (gato_cumpleanos.length < 1) {
           $("#gato_cumpleanos").focus();
          goToValidation = false;
      }

        if(goToValidation){
            if(gato_id.length < 1){

                //si no tiene id es insert 
                data = {
                        id_usuario : id_usuario,
                        gato_id : gato_id, 
                        nombre_gato : nombre_gato,
                        gato_edad : gato_edad,
                        caracteristicas_gato : caracteristicas_gato,
                        gato_raza : gato_raza,
                        gato_foto : gato_foto,
                        gato_cumpleanos : gato_cumpleanos,
                    }; 

                    console.log(base_url() + "gato/add");
                    console.log(data);

                $.ajax({
                     url:base_url() + "gato/add",
                     type: "post",
                     data: data,
                     dataType: "json",
                        success: function (json) { 

                            if(json.response_code == 200){
                                alert(json.message); 
                                 is_req_register = true;
                                //reload_tabla();
                                location.reload();

                            }else{
                                alert('Ocurrió un error, por favor vuelva a intentarlo');
                                //unblock_btn_submit();
                                console.log(json);

                            }
         
                        },
                        error: function(ts) {
                           console.log(ts.responseText);
                            alert('Ocurrió un error, por favor vuelva a intentarlo');
                            unblock_btn_submit();
                        } 
                    });  
            }else{
                //si tiene id es update
                data ={ 
                        gato_id         : gato_id,
                        nombre_gato     : nombre_gato, 
                        gato_edad       : gato_edad,
                        caracteristicas_gato : caracteristicas_gato,
                        gato_raza       : gato_raza,
                        gato_foto       : gato_foto,
                        gato_cumpleanos : gato_cumpleanos,
                    };

             console.log(base_url() + "gato/edit");
             console.log(data);
                $.ajax({
                     url:base_url() + "gato/edit",
                     type: "post",
                     data: data,
                     dataType: "json",
                        success: function (json) {

                            //console.log(json.response_code);
                            //console.log(json.message);

                            if(json.response_code == 200){
                                alert(json.message);
                                is_req_register = true;
                                //reload_tabla();

                            }else{
                                alert('Ocurrió un error, por favor vuelva a intentarlo');
                                 console.log(json);

                            }
         
                        },
                        error: function(ts) {
                           console.log(ts.responseText);
                            alert('Ocurrió un error, por favor vuelva a intentarlo');
                         } 
                    });             

            }

        }else{
            alert('Por favor revisa los campos');
        }

    });

    $(document).on(
        'click',
        '.btn-delete',
        function (event) {
            event.preventDefault();

if (window.confirm("Esta seguro de eliminar este usuario?")) {
  
          $.ajax({
             url:base_url() + "gato/delete",
             type: "post",
             data: {"id_gato":$(this).attr('data-id')},
             cache:false,
             dataType: "json",
                success: function (json) {
                    console.log(json.response_code);
                    console.log(json.message);

                    if(json.response_code == 200){
                        alert(json.message);
                        //reload_tabla();


                    }else{
                        alert('Ocurrió un error, por favor vuelva a intentarlo');
                    }

                },
                error: function(ts) {
                   console.log(ts.responseText);
                    alert('Ocurrió un error, por favor vuelva a intentarlo');
                    clear_form();

                } 
             });  

}



        }
    );    
 
    $(document).on(
        'click',
        '.btn-userread',
        function (event) {
            event.preventDefault();                    

          $.ajax({
             url:base_url() + "gato/read",
             type: "post",
             data: {"id_gato":$(this).attr('data-id')},
             cache:false,
             dataType: "json",
                success: function (json) {
                    console.log(json.response_code);
                    console.log(json.message);
                    console.log(json.data);

                    if(json.response_code == 200){

                    // document.getElementById('gato_id').removeAttribute('readonly');
                    //document.getElementById('gato_id').readOnly = false;
                        $("#gato_id").val(json.data.gato_id).change();
                        $("#nombre_gato").val(json.data.nombre_gato).change();
                        $("#gato_edad").val(json.data.gato_edad).change();
                        $("#caracteristicas_gato").val(json.data.caracteristicas_gato).change();
                        $("#gato_raza").val(json.data.gato_raza).change();
                        $("#gato_foto").val(json.data.gato_foto).change();
                        $("#gato_cumpleanos").val(json.data.gato_cumpleanos).change();

                    }else{
                        alert('Ocurrió un error, por favor vuelva a intentarlo');
                    }

                },
                error: function(ts) {
                   console.log(ts.responseText);
                    alert('Ocurrió un error, por favor vuelva a intentarlo');

                } 
             });  

        }
    );   
 

});



function clear_form(){
    $('#form-gatos').trigger("reset");
    $("#gato_id").val('').change();
    $("#nombre_gato").val('').change();
    $("#gato_edad").val('').change();
    $("#caracteristicas_gato").val('').change();
    $("#gato_raza").val('').change();
    $("#gato_foto").val('').change();
    $("#gato_cumpleanos").val('').change();
  }

function block_btn_submit(){
 
}

function unblock_btn_submit(){
 
}