 (function($){
                                               $("#customRadioInlinerepre2").click(function(){
                                                        $("#ventana").css("display", "none");
                                                     });
                                               $("#customRadioInlinerepre1").click(function(){
                                                        $("#ventana").css("display", "block");
                                                     });

                                                 $("#motivo").on("change",function(){
                                                       // alert($(this).val());
                                                          
                                                       if($(this).val() == "Cuestionamiento en el Reporte Crediticio"){
                                                          $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                          $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                       }else if($(this).val() == "Disconformidad con cobro de intereses y comisiones"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                           }else if($(this).val() == "Operacion no procesada o mal realizada"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        } else if($(this).val() == "Producto no contratado"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        }   else if($(this).val() == "Pedido de duplicado de Estado de Cuenta"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",true);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",false);

                                                        }     else if($(this).val() == "Confirmacion o detalle de operaciones"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",true);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",false);

                                                        }      else if($(this).val() == "Demora/Incumplimiento en envios de correspondencia"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        }      
                                                           else if($(this).val() == "Trato inadecuado y mala atencion"){
                                                           $("#tiporeclamo option[value='Requerimiento']").attr("selected",false);
                                                           $("#tiporeclamo option[value='Reclamo']").attr("selected",true);

                                                        }                                                             
                                                        
                                                  });
                                                                                             

                                                      $(".departamento").on("change",function(){
                                                   
                                                        var countryID = $(this).val();
                                                          if(countryID){
                                                               $.ajax({
                                                               type:"POST",
                                                               url:"../demo2.php",
                                                               data:"idDepa="+countryID,
                                                                success:function(html){
                                                                     $("#provincia").html(html);
                                                          }
                                                       }); 
      
                                                    }
                                                     });

                                                    $('#provincia').on('change',function(){
                                                       var stateID = $(this).val();
                                                           if(stateID){
                                                                  $.ajax({
                                                                  type:'POST',
                                                             url:'../demo2.php',
                                                             data:'idProv='+stateID,
                                                             success:function(html){
                                                             $('#distrito').html(html);
                                                                 }
                                                                 }); 
                                                             }else{
                                                           $('#distrito').html('<option value="">Selecciona distrito first</option>'); 
                                                            }
                                                                });

                                              })( jQuery );  
                                 
                                       $("#bot").click(function(){
                                                   $('#bot2').hide(6000);
			                           $('#bot2').hide("fast");                                      
                                       }) 
