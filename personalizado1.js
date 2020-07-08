function soloLetras(e){
                                              key = e.keyCode || e.which;
                                              tecla = String.fromCharCode(key).toLowerCase();
                                              letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                              especiales = "8-37-39-46";

                                              tecla_especial = false
                                                 for(var i in especiales){
                                                      if(key == especiales[i]){
                                                        tecla_especial = true;
                                                      break;
                                                       }
                                                      }

                                              if(letras.indexOf(tecla)==-1 && !tecla_especial){
                                                  return false;
                                                  }
                                            }

                                    function ocultar(){
                                              document.getElementById('bot2').style.display = 'none';
                                             }



                                  /* document.querySelector("html").classList.add('js');*/

                                   var fileInput  = document.querySelector(".input-file"),  
                                   button     = document.querySelector(".input-file-trigger"),
                                   the_return = document.querySelector(".file-return");
      
                                   button.addEventListener("keydown",function(event) {  
                                    if (event.keyCode == 13 || event.keyCode == 32) {  
                                      fileInput.focus();  
                                    }  
                                      });
                                   button.addEventListener("click", function(event) {
                                      fileInput.focus();
                                      return false;
                                       });  
                                   fileInput.addEventListener("change", function(event) {  
                                       the_return.innerHTML = this.value;  
                                    });  



                                   var fileInput2  = document.querySelector( ".input-file2" ),  
                                   button2     = document.querySelector( ".input-file-trigger2" ),
                                   the_return2 = document.querySelector(".file-return2");
      
                                   button2.addEventListener( "keydown", function( event ) {  
                                    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
                                      fileInput2.focus();  
                                    }  
                                      });
                                   button2.addEventListener( "click", function( event ) {
                                      fileInput2.focus();
                                      return false;
                                       });  
                                   fileInput2.addEventListener( "change", function( event ) {  
                                       the_return2.innerHTML = this.value;  
                                    });  


                                      var fileInput3  = document.querySelector( ".input-file3" ),  
                                   button3     = document.querySelector( ".input-file-trigger3" ),
                                   the_return3 = document.querySelector(".file-return3");
      
                                   button3.addEventListener( "keydown", function( event ) {  
                                    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
                                      fileInput3.focus();  
                                    }  
                                      });
                                   button3.addEventListener( "click", function( event ) {
                                      fileInput3.focus();
                                      return false;
                                       });  
                                   fileInput3.addEventListener( "change", function( event ) {  
                                       the_return3.innerHTML = this.value;  
                                    });  



