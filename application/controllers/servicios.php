<?php

class Servicios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('servicos_model', '', TRUE);
        $this->data['menuServicos'] = 'Serviços';
    }
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){
        
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vServico')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar servicios.');
           redirect(base_url());
        }

        $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/servicios/gerenciar/';
        $config['total_rows'] = $this->servicos_model->count('servicos');
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
        $config['first_link'] = 'Primera';
        $config['last_link'] = 'Ultima';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config); 	

		$this->data['results'] = $this->servicos_model->get('servicos','idServicios,nombre,descripcion,precio','',$config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'servicios/servicios';
       	$this->load->view('tema/topo',$this->data);

       
		
    }
	
    function adicionar() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aServico')){
           $this->session->set_flashdata('error','No tiene permiso para agregar servicios.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precio = $this->input->post('precio');
            $precio = str_replace(",","", $precio);

            $data = array(
                'nombre' => set_value('nombre'),
                'descripcion' => set_value('descripcion'),
                'precio' => $precio
            );

            if ($this->servicos_model->add('servicos', $data) == TRUE) {
                $this->session->set_flashdata('success', 'Servicio agregado con exito');
                redirect(base_url() . 'index.php/servicios/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';
            }
        }
        $this->data['view'] = 'servicios/adicionarServicio';
        $this->load->view('tema/topo', $this->data);

    }
    function adicionarOs() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aServico')){
           $this->session->set_flashdata('error','No tiene permiso para agregar servicios.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precio = $this->input->post('precio');
            $precio = str_replace(",","", $precio);

            $data = array(
                'nombre' => set_value('nombre'),
                'descripcion' => set_value('descripcion'),
                'precio' => $precio
            );

            if ($this->servicos_model->add('servicos', $data) == TRUE) {
                $this->session->set_flashdata('success', 'Servicio agregado con éxito!');
                redirect(base_url() . 'index.php/os/editar/'.$this->input->post('idOs'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';
            }
        }
        $this->data['view'] = 'servicios/adicionarServicio';
        $this->load->view('tema/topo', $this->data);

    }

    function editar() {
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'eServico')){
           $this->session->set_flashdata('error','No tiene permiso para editar servicios.');
           redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precio = $this->input->post('precio');
            $precio = str_replace(",","", $precio);
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'descripcion' => $this->input->post('descripcion'),
                'precio' => $precio
            );

            if ($this->servicos_model->edit('servicos', $data, 'idServicios', $this->input->post('idServicios')) == TRUE) {
                $this->session->set_flashdata('success', 'Servicio editado con exito');
                redirect(base_url() . 'index.php/servicios/editar/'.$this->input->post('idServicios'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error.</p></div>';
            }
        }

        $this->data['result'] = $this->servicos_model->getById($this->uri->segment(3));

        $this->data['view'] = 'servicios/editarServicio';
        $this->load->view('tema/topo', $this->data);

    }
	
    function excluir(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'dServico')){
           $this->session->set_flashdata('error','No tiene permiso para eliminar el servicio.');
           redirect(base_url());
        }
       
        
        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Error al intentar eliminar el servicio.');            
            redirect(base_url().'index.php/servicios/gerenciar/');
        }

        $this->db->where('servicos_id', $id);
        $this->db->delete('servicos_os');

        $this->servicos_model->delete('servicos','idServicios',$id);             
        

        $this->session->set_flashdata('success','Servicio eliminado con exito');            
        redirect(base_url().'index.php/servicios/gerenciar/');
    }
}

