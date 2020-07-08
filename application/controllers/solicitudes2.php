<?php

class Solicitudes2 extends CI_Controller {
    

    function __construct() {
        parent::__construct();
          /*  if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
            }*/
            $this->load->helper(array('codegen_helper'));
         
            $this->data['solicitudes'] = 'solicitudes';
	}	
	
	function index(){
		$this->iniciar();
	}

	function iniciar(){

        
      
       	$this->data['view'] = 'solicitudes2/solicitudes2';
       	$this->load->view('tema/topo',$this->data);
	  
       
		
    }

	
    
    
        

    

           

           

    
    
}