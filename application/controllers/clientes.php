<?php

class Clientes extends CI_Controller {
    
    function __construct() {
        parent::__construct();
            if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
            }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('clientes_model','',TRUE);
         /*  $this->load->model('os_model','',TRUE);*/
            
            $this->data['menuClientes'] = 'clientes';
	}	
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vCliente')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }
        $this->load->library('table');
        $this->load->library('pagination');
    

        $config['base_url'] = base_url().'index.php/clientes/gerenciar/';
        $config['total_rows'] = $this->clientes_model->count('clientes');
        $config['per_page'] = 10;
        $config['next_link'] = 'Siguiente';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primero';
        $config['last_link'] = 'Ultimo';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 	
        
	    $this->data['results'] = $this->clientes_model->get('clientes','idClientes,nombreCliente,documento,telefono,celular,email,ruc,numero,barrio,ciudad,estado,referencia,estadocli','',$config['per_page'],$this->uri->segment(3));
           
      /*  $this->data['anexos'] = $this->os_model->getAnexos($this->uri->segment(3));*/

        $this->data['results3'] = $this->clientes_model->geta('lineas','idlinea,descripcion,fechainicio,fechafin,fecharegistro,estadolinea,idClientes','',$config['per_page'],$this->uri->segment(3));
        $this->data['view'] = 'clientes/clientes';
       	$this->load->view('tema/topo',$this->data);	
    }



    public function visualizarLineas($id = null){
		
        $this->data['result'] = $this->clientes_model->getById_clientes_lineas($this->uri->segment(3));
        $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));
       
        $this->data['view'] = 'clientes/visualizarLineas';
        $this->load->view('tema/topo',$this->data);
    }


    public function editarLineas($id = null){
		
        $this->data['result'] = $this->clientes_model->getById_clientes_lineas($this->uri->segment(3));
        $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));
       
        $this->data['view'] = 'clientes/editarLineas';
        $this->load->view('tema/topo', $this->data);
    }


    public function editarlineabd($id = null){
		
     
        $this->data['result'] = $this->clientes_model->getSolicitudById_($this->uri->segment(3));
        $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));

          $dataInicial = $this->input->post('finicio');
          $dataFinal = $this->input->post('ffinal');

          $idli = $this->input->post('li');


          $dataInicial = explode('/', $dataInicial);
          $dataInicial = $dataInicial[2].'-'.$dataInicial[1].'-'.$dataInicial[0];

          $dataFinal   = explode('/', $dataFinal);
          $dataFinal   = $dataFinal[2].'-'.$dataFinal[1].'-'.$dataFinal[0];

          
           $datax = array(
                 'estadolinea' => $this->input->post('esta'),
                //'estadolinea' => $this->input->post('esta')
             'fechainicio' => $dataInicial,
              'fechafin' => $dataFinal ,
              'comentario' => $this->input->post('comentario')
              );

          if ($this->clientes_model->edit('lineas', $datax, 'idlinea', $idli) == TRUE) {

                     if(!empty($_FILES['userfile1']['name'])){
                       $nombreCompleto          = $_FILES['userfile1']['name'];
                       $config['upload_path']   = '././assets/anexos/';
                       $config['allowed_types'] = '*';
                       $config['max_size']      = 2000;
                       $config['max_width']     = 0;
                       $config['max_height']    = 0;
                       $config['file_name']     = $nombreCompleto;
                       $this->load->library('upload', $config);
 
                        if (!$this->upload->do_upload('userfile1')) {
         
                         $data['uploadError'] = $this->upload->display_errors();
                         echo $this->upload->display_errors();
                         return;
                        }
     
                        $data['uploadSuccess'] = $this->upload->data();

                         $this->clientes_model->anexarlinea( $_FILES['userfile1']['name'] ,base_url().'assets/anexos/','thumb_'.$_FILES['userfile1']['name'],realpath('./assets/anexos/'),'1',$this->uri->segment(3));
           } 


           if(!empty($_FILES['userfile2']['name'])){
                        $nombreCompleto          = $_FILES['userfile2']['name'];
                        $config['upload_path']   = '././assets/anexos/';
                        $config['allowed_types'] = '*';
                        $config['max_size']      = 2000;
                        $config['max_width']     = 0;
                        $config['max_height']    = 0;
                         $config['file_name']     = $nombreCompleto;
                        $this->load->library('upload', $config);

                     if (!$this->upload->do_upload('userfile2')) {
  
                      $data['uploadError'] = $this->upload->display_errors();
                      echo $this->upload->display_errors();
                     return;
                    }

                     $data['uploadSuccess'] = $this->upload->data();
                     $this->clientes_model->anexarlinea( $_FILES['userfile2']['name'] ,base_url().'assets/anexos/','thumb_'.$_FILES['userfile2']['name'],realpath('./assets/anexos/'),'1',$this->uri->segment(3));
        
                    } 



           if(!empty($_FILES['userfile3']['name'])){        
                     $nombreCompleto          = $_FILES['userfile3']['name'];
                     $config['upload_path']   = '././assets/anexos/';
                     $config['allowed_types'] = '*';
                     $config['max_size']      = 2000;
                      $config['max_width']     = 0;
                     $config['max_height']    = 0;
                     $config['file_name']     = $nombreCompleto;
                     $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('userfile3')) {

                      $data['uploadError'] = $this->upload->display_errors();
                       echo $this->upload->display_errors();
                      return;
                    }

                    $data['uploadSuccess'] = $this->upload->data();

                    $this->clientes_model->anexarlinea( $_FILES['userfile3']['name'] ,base_url().'assets/anexos/','thumb_'.$_FILES['userfile3']['name'],realpath('./assets/anexos/'),'1',$this->uri->segment(3));
        
                      } 

             if(!empty($_FILES['userfile4']['name'])){
                 $nombreCompleto          = $_FILES['userfile4']['name'];
                 $config['upload_path']   = '././assets/anexos/';
                 $config['allowed_types'] = '*';
                 $config['max_size']      = 2000;
                 $config['max_width']     = 0;
                 $config['max_height']    = 0;
                  $config['file_name']     = $nombreCompleto;
                  $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile4')) {

                  $data['uploadError'] = $this->upload->display_errors();
                 echo $this->upload->display_errors();
                    return;
                 }

                $data['uploadSuccess'] = $this->upload->data();
                $this->clientes_model->anexarlinea( $_FILES['userfile4']['name'] ,base_url().'assets/anexos/','thumb_'.$_FILES['userfile4']['name'],realpath('./assets/anexos/'),'1',$this->uri->segment(3));
        

                   } 

             if(!empty($_FILES['userfile5']['name'])){
                $nombreCompleto          = $_FILES['userfile5']['name'];
                $config['upload_path']   = '././assets/anexos/';
                $config['allowed_types'] = '*';
                $config['max_size']      = 2000;
                $config['max_width']     = 0;
                $config['max_height']    = 0;
                $config['file_name']     = $nombreCompleto;
                 $this->load->library('upload', $config);

                  if (!$this->upload->do_upload('userfile5')) {

                  $data['uploadError'] = $this->upload->display_errors();
                  echo $this->upload->display_errors();
                  return;
             }

              $data['uploadSuccess'] = $this->upload->data();
              
              $this->clientes_model->anexarlinea( $_FILES['userfile5']['name'] ,base_url().'assets/anexos/','thumb_'.$_FILES['userfile5']['name'],realpath('./assets/anexos/'),'1',$this->uri->segment(3));
        
            } 


            $this->session->set_flashdata('success','linea modificada con éxito!');
             redirect(base_url() . 'index.php/clientes');
          } else {
               $data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';
          }
       
          $this->data['view'] = 'clientes/editarLineas';
          $this->load->view('tema/topo', $this->data);

      
}




	
    function adicionar() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){
           $this->session->set_flashdata('error','No tiene permiso para agregar clientes.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nombreCliente' => set_value('nombreCliente'),
                'documento' => set_value('documento'),
                'telefono' => set_value('telefono'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'ruc' => set_value('ruc'),
                'numero' => set_value('numero'),
                'barrio' => set_value('barrio'),
                'ciudad' => set_value('ciudad'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'fechaRegistro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == TRUE) {
                $this->session->set_flashdata('success','Cliente agregado con éxito!');
                redirect(base_url() . 'index.php/clientes/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ha ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'clientes/adicionarCliente';
        $this->load->view('tema/topo', $this->data);

    }
    function adicionarOs() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){
           $this->session->set_flashdata('error','No tiene permiso para agregar clientes.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nombreCliente' => set_value('nombreCliente'),
                'documento' => set_value('documento'),
                'telefono' => set_value('telefono'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'ruc' => set_value('ruc'),
                'numero' => set_value('numero'),
                'barrio' => set_value('barrio'),
                'ciudad' => set_value('ciudad'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'fechaRegistro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == TRUE) {
                $this->session->set_flashdata('success','Cliente agregado con éxito!');
                redirect(base_url() . 'index.php/os/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ha ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'clientes/adicionarCliente';
        $this->load->view('tema/topo', $this->data);

    }
    function adicionarV() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aCliente')){
           $this->session->set_flashdata('error','No tiene permiso para agregar clientes.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nombreCliente' => set_value('nombreCliente'),
                'documento' => set_value('documento'),
                'telefono' => set_value('telefono'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'ruc' => set_value('ruc'),
                'numero' => set_value('numero'),
                'barrio' => set_value('barrio'),
                'ciudad' => set_value('ciudad'),
                'estado' => set_value('estado'),
                'cep' => set_value('cep'),
                'fechaRegistro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == TRUE) {
                $this->session->set_flashdata('success','Cliente agregado con éxito!');
                redirect(base_url() . 'index.php/vendas/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ha ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'clientes/adicionarCliente';
        $this->load->view('tema/topo', $this->data);

    }
        

    function editar() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'eCliente')){
           $this->session->set_flashdata('error','No tiene permiso para editar clientes.');
           redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nombreCliente' => $this->input->post('nombreCliente'),
                'documento'     => $this->input->post('documento'),
                'telefono'      => $this->input->post('telefono'),
                'celular' => $this->input->post('celular'),
                'email' => $this->input->post('email'),
                'ruc' => $this->input->post('ruc'),
                'numero' => $this->input->post('numero'),
                'barrio' => $this->input->post('barrio'),
                'ciudad' => $this->input->post('ciudad'),
                'estado' => $this->input->post('estado'),
                'cep' => $this->input->post('cep')
            );

           

            if ($this->clientes_model->edit('clientes', $data, 'idClientes', $this->input->post('idClientes')) == TRUE) {
                $this->session->set_flashdata('success','Cliente editado con éxito!');
                redirect(base_url() . 'index.php/clientes/editar/'.$this->input->post('idClientes'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error</p></div>';
            }
        }


        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['view'] = 'clientes/editarCliente';

      /*  $this->data['anexos'] = $this->os_model->getAnexos($this->uri->segment(3));*/
        $this->load->view('tema/topo', $this->data);

    }

    public function visualizar(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vCliente')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar clientes.');
           redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->clientes_model->getOsByCliente($this->uri->segment(3));

        $this->data['anexos'] = $this->clientes_model->getAnexos2($this->uri->segment(3));


        $this->data['view'] = 'clientes/visualizar';
        $this->load->view('tema/topo', $this->data);

        
    }
	
    public function excluir(){

            if(!$this->permission->checkPermission($this->session->userdata('permissao'),'dCliente')){
               $this->session->set_flashdata('error','No tiene permiso para eliminar clientes.');
               redirect(base_url());
            }

            
            $id =  $this->input->post('id');
            if ($id == null){

                $this->session->set_flashdata('error','Error al intentar eliminar clientes.');            
                redirect(base_url().'index.php/clientes/gerenciar/');
            }

            //$id = 2;
            // excluindo OSs vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $os = $this->db->get('os')->result();

            if($os != null){

                foreach ($os as $o) {
                    $this->db->where('os_id', $o->idOs);
                    $this->db->delete('servicos_os');

                    $this->db->where('os_id', $o->idOs);
                    $this->db->delete('produtos_os');


                    $this->db->where('idOs', $o->idOs);
                    $this->db->delete('os');
                }
            }

            // excluindo Vendas vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $vendas = $this->db->get('vendas')->result();

            if($vendas != null){

                foreach ($vendas as $v) {
                    $this->db->where('vendas_id', $v->idVendas);
                    $this->db->delete('itens_de_vendas');


                    $this->db->where('idVendas', $v->idVendas);
                    $this->db->delete('vendas');
                }
            }

            //excluindo ingresos vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $this->db->delete('lancamentos');



            $this->clientes_model->delete('clientes','idClientes',$id); 

            $this->session->set_flashdata('success','Cliente eliminado con éxito!');            
            redirect(base_url().'index.php/clientes/gerenciar/');
    }


     
     function SolicitudesVinculadas($id = null){
        
        /*
        $this->data['result'] = $this->clientes_model->getById_clientes_lineas($this->uri->segment(3));
        $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));
       
        $this->data['view'] = 'clientes/visualizarLineas';
        $this->load->view('tema/topo',$this->data);*/


	
        $this->data['result4'] = $this->clientes_model->getSolicitudesVinculadasById($this->uri->segment(3));
        
        $this->data['view'] = 'clientes/solicitudesvinculadas';
        $this->load->view('tema/topo', $this->data);
    }



    public function editarSolicitudes($id = null){
        
       
       // $this->data['result'] = $this->Conecte_model->getById_clientes_lineas($this->uri->segment(3));
       // $this->data['anexos'] = $this->Conecte_model->getAnexosfiltroslinea($this->session->userdata('id'),'1',$this->uri->segment(3));
       $this->data['result'] = $this->clientes_model->getById_clientes_solicitudes($this->uri->segment(3));
       // $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));
        
        $this->data['view'] = 'clientes/editarSolicitudes';
        $this->load->view('tema/topo', $this->data);
    }



    public function editarsolicitudbd($id = null){
        $this->data['result'] = $this->clientes_model->getSolicitudById_($this->uri->segment(3));
      //  $this->data['anexos'] = $this->clientes_model->getAnexosfiltroslinea('1',$this->uri->segment(3));

          $dataInicial = $this->input->post('finicio');
          $dataFinal = $this->input->post('ffinal');
        //  $idli = $this->input->post('li');

          $dataInicial = explode('/', $dataInicial);
          $dataInicial = $dataInicial[2].'-'.$dataInicial[1].'-'.$dataInicial[0];

          $dataFinal   = explode('/', $dataFinal);
          $dataFinal   = $dataFinal[2].'-'.$dataFinal[1].'-'.$dataFinal[0];

           $datax = array(
                 'estadosolicitud' => $this->input->post('esta'),
                 'fechainicio' => $dataInicial,
                 'fechafin' => $dataFinal 
              );

          if ($this->clientes_model->edit('solicitudes', $datax, 'idsolicitud', $this->input->post('idsolult')) == TRUE) {
            $this->session->set_flashdata('success','linea modificada con éxito!');
             redirect(base_url() . 'index.php/clientes');
          } else {
               $data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';
          }
       
          $this->data['view'] = 'clientes/editarSolicitudes';
          $this->load->view('tema/topo', $this->data); 
}




}

