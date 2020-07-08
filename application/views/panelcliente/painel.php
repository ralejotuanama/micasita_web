
 
  <div class="span12" style="margin-left: 0;">


                    <div class="widget-box"> 
                         <h5>Cantidad Lineas</h5>
                        
                         <div class="quick-actions_homepag" >
                            <ul class="quick-actions">
                                <li class="bg_lb span2"> <a href=""> <i class="icon-tasks">
                                  <?php 
                                      $this->db->where('estadolinea',0);
                                      $this->db->where('idClientes',$this->session->userdata('id'));
                                      $this->db->from("lineas");
                                       echo $this->db->count_all_results();
                                   ?>
                                   </i> En Evaluacion</a> 
                                </li>

                               <li class="bg_ls span2"> <a href=""><i class="icon-tasks">
                               
                                    <?php
                                     $this->db->where('estadolinea',1);
                                     $this->db->where('idClientes',$this->session->userdata('id'));
                                      
                                     $this->db->from("lineas");
                                    echo $this->db->count_all_results();
                                   
                                   ?>
                               
                               </i> Aprobadas</a>
                               </li>
                               <li class="bg_lg span2"> <a href=""><i class="icon-tasks">
                               
                               <?php 
                                   $this->db->where('estadolinea',2);
                                   $this->db->where('idClientes',$this->session->userdata('id'));
                                      
                                   $this->db->from("lineas");
                                   echo $this->db->count_all_results();
                                   ?>
                               
                               </i> Rechazadas</a>
                               </li>
                           </ul>
                         </div>
                

                   </div> 


                  <div class="widget-box"> 
                      <h5>Cantidad Solicitudes</h5>
                 
                         <div class="quick-actions_homepag" >
                            <ul class="quick-actions" >
                               <li class="bg_lb span2"> <a href=""> <i class="icon-tasks">
                                  <?php 
                                      $this->db->where('estadosolicitud',0);
                                      $this->db->where('idClientes',$this->session->userdata('id'));
                                      $this->db->from("solicitudes");
                                       echo $this->db->count_all_results();
                                   ?>
                                   </i> En Evaluacion</a> 
                                </li>

                               <li class="bg_ls span2"> <a href=""><i class="icon-tasks">
                               
                                    <?php
                                     $this->db->where('estadosolicitud',1);
                                     $this->db->where('idClientes',$this->session->userdata('id'));
                                     $this->db->from("solicitudes");
                                    echo $this->db->count_all_results();
                                   
                                   ?>
                               
                               </i> Aprobadas</a>
                               </li>
                               <li class="bg_lg span2"> <a href=""><i class="icon-tasks">
                               
                               <?php 
                                   $this->db->where('estadosolicitud',2);
                                   $this->db->where('idClientes',$this->session->userdata('id'));
                                   $this->db->from("solicitudes");
                                   echo $this->db->count_all_results();
                                   ?>
                               
                               </i> Rechazadas</a>
                               </li>
                           </ul>
                         </div>
                

                   </div> 
      

      
      

                  

             
  </div>



 
