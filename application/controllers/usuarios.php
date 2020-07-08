<?php

class Usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'cUsuario')){
          $this->session->set_flashdata('error','No tiene permiso para configurar los usuarios.');
          redirect(base_url());
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('usuarios_model', '', TRUE);
        $this->data['menuUsuarios'] = 'Usuários';
        $this->data['menuConfiguracoes'] = 'Configurações';
    }

    function index(){
		$this->gerenciar();
	}

	function gerenciar(){
        
        $this->load->library('pagination');
        

        $config['base_url'] = base_url().'index.php/usuarios/gerenciar/';
        $config['total_rows'] = $this->usuarios_model->count('usuarios');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
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
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 	

		$this->data['results'] = $this->usuarios_model->get($config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'usuarios/usuarios';
       	$this->load->view('tema/topo',$this->data);

       
		
    }
	
    function adicionar(){  
          
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('usuarios') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="alert alert-danger">'.validation_errors().'</div>' : false);

        } else
        {     

            $this->load->library('encrypt');                       
            $data = array(
                    'nombre' => set_value('nombre'),
					'rg' => set_value('rg'),
					'cpf' => set_value('cpf'),
					'ruc' => set_value('ruc'),
					'numero' => set_value('numero'),
					'barrio' => set_value('barrio'),
					'ciudad' => set_value('ciudad'),
					'estado' => set_value('estado'),
					'email' => set_value('email'),
					'clave' => $this->encrypt->sha1($this->input->post('clave')),
					'telefono' => set_value('telefono'),
					'celular' => set_value('celular'),
					'situacion' => set_value('situacion'),
                    'permissoes_id' => $this->input->post('permissoes_id'),
					'fechaRegistro' => date('Y-m-d')
            );
           
			if ($this->usuarios_model->add('usuarios',$data) == TRUE)
			{
                                $this->session->set_flashdata('success','Usuario registrado con exito!');
				redirect(base_url().'index.php/usuarios/adicionar/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';

			}
		}
        
        $this->load->model('permissoes_model');
        $this->data['permissoes'] = $this->permissoes_model->getActive('permissoes','permissoes.idPermissao,permissoes.nome');   
		$this->data['view'] = 'usuarios/adicionarUsuario';
        $this->load->view('tema/topo',$this->data);
   
       
    }	
    
    function editar(){  
          
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rg', 'RG', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ruc', 'Ruc', 'trim|required|xss_clean');
        $this->form_validation->set_rules('numero', 'Número', 'trim|required|xss_clean');
        $this->form_validation->set_rules('barrio', 'Barrio', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ciudad', 'Ciudad', 'trim|required|xss_clean');
        $this->form_validation->set_rules('estado', 'Estado', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|xss_clean');
        $this->form_validation->set_rules('situacion', 'Situaçion', 'trim|required|xss_clean');
        $this->form_validation->set_rules('permissoes_id', 'Permissão', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        { 

            if ($this->input->post('idUsuarios') == 1 && $this->input->post('situacion') == 0)
            {
                $this->session->set_flashdata('error','El usuario administrador no se puede desactivar!');
                redirect(base_url().'index.php/usuarios/editar/'.$this->input->post('idUsuarios'));
            }

            $clave = $this->input->post('clave'); 
            if($clave != null){
                $this->load->library('encrypt');   
                $clave = $this->encrypt->sha1($clave);

                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'rg' => $this->input->post('rg'),
                        'cpf' => $this->input->post('cpf'),
                        'ruc' => $this->input->post('ruc'),
                        'numero' => $this->input->post('numero'),
                        'barrio' => $this->input->post('barrio'),
                        'ciudad' => $this->input->post('ciudad'),
                        'estado' => $this->input->post('estado'),
                        'email' => $this->input->post('email'),
                        'clave' => $clave,
                        'telefono' => $this->input->post('telefono'),
                        'celular' => $this->input->post('celular'),
                        'situacion' => $this->input->post('situacion'),
                        'permissoes_id' => $this->input->post('permissoes_id')
                );
            }  

            else{

                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'rg' => $this->input->post('rg'),
                        'cpf' => $this->input->post('cpf'),
                        'ruc' => $this->input->post('ruc'),
                        'numero' => $this->input->post('numero'),
                        'barrio' => $this->input->post('barrio'),
                        'ciudad' => $this->input->post('ciudad'),
                        'estado' => $this->input->post('estado'),
                        'email' => $this->input->post('email'),
                        'telefono' => $this->input->post('telefono'),
                        'celular' => $this->input->post('celular'),
                        'situacion' => $this->input->post('situacion'),
                        'permissoes_id' => $this->input->post('permissoes_id')
                );

            }  

           
			if ($this->usuarios_model->edit('usuarios',$data,'idUsuarios',$this->input->post('idUsuarios')) == TRUE)
			{
                $this->session->set_flashdata('success','Usuario editado con exito!');
				redirect(base_url().'index.php/usuarios/editar/'.$this->input->post('idUsuarios'));
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error</p></div>';

			}
		}

		$this->data['result'] = $this->usuarios_model->getById($this->uri->segment(3));
        $this->load->model('permissoes_model');
        $this->data['permissoes'] = $this->permissoes_model->getActive('permissoes','permissoes.idPermissao,permissoes.nome'); 

		$this->data['view'] = 'usuarios/editarUsuario';
        $this->load->view('tema/topo',$this->data);
			
      
    }
	
    function excluir(){
            $ID =  $this->uri->segment(3);
            $this->usuarios_model->delete('usuarios','idUsuarios',$ID);             
            redirect(base_url().'index.php/usuarios/gerenciar/');
    }
}

