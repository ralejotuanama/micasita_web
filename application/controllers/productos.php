<?php

class Productos extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('produtos_model', '', TRUE);
        $this->data['menuProdutos'] = 'Productos';
    }

    function index(){
	   $this->gerenciar();
    }

    function gerenciar(){
        
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vProduto')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar productos.');
           redirect(base_url());
        }

        $this->load->library('table');
        $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/productos/gerenciar/';
        $config['total_rows'] = $this->produtos_model->count('produtos');
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
        $config['first_link'] = 'Primera';
        $config['last_link'] = 'Ultima';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 	

	    $this->data['results'] = $this->produtos_model->get('produtos','idProductos,descripcion,unidad,precioCompra,precioVenta,stock,stockMinimo','',$config['per_page'],$this->uri->segment(3));
       
	    $this->data['view'] = 'productos/productos';
       	$this->load->view('tema/topo',$this->data);
       
		
    }
	
    function adicionar() {

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aProduto')){
           $this->session->set_flashdata('error','No tiene permiso para agregar productos.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precioCompra = $this->input->post('precioCompra');
            $precioCompra = str_replace(",","", $precioCompra);
            $precioVenta = $this->input->post('precioVenta');
            $precioVenta = str_replace(",", "", $precioVenta);
            $data = array(
                'descripcion' => set_value('descripcion'),
                'unidad' => set_value('unidad'),
                'precioCompra' => $precioCompra,
                'precioVenta' => $precioVenta,
                'stock' => set_value('stock'),
                'stockMinimo' => set_value('stockMinimo')
            );

            if ($this->produtos_model->add('produtos', $data) == TRUE) {
                $this->session->set_flashdata('success','Producto agregado con exito');
                redirect(base_url() . 'index.php/productos/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'productos/adicionarProducto';
        $this->load->view('tema/topo', $this->data);
     
    }
    function adicionarOs() {

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aProduto')){
           $this->session->set_flashdata('error','No tiene permiso para agregar productos.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precioCompra = $this->input->post('precioCompra');
            $precioCompra = str_replace(",","", $precioCompra);
            $precioVenta = $this->input->post('precioVenta');
            $precioVenta = str_replace(",", "", $precioVenta);
            $data = array(
                'descripcion' => set_value('descripcion'),
                'unidad' => set_value('unidad'),
                'precioCompra' => $precioCompra,
                'precioVenta' => $precioVenta,
                'stock' => set_value('stock'),
                'stockMinimo' => set_value('stockMinimo')
            );

            if ($this->produtos_model->add('produtos', $data) == TRUE) {
                $this->session->set_flashdata('success','Producto agregado con exito');
                redirect(base_url() . 'index.php/os/editar/'.$this->input->post('idOs'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';
            }
        }
        $this->data['view'] = 'productos/adicionarProducto';
        $this->load->view('tema/topo', $this->data);
     
    }
    function adicionarV() {

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'aProduto')){
           $this->session->set_flashdata('error','No tiene permiso para agregar productos.');
           redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precioCompra = $this->input->post('precioCompra');
            $precioCompra = str_replace(",","", $precioCompra);
            $precioVenta = $this->input->post('precioVenta');
            $precioVenta = str_replace(",", "", $precioVenta);
            $data = array(
                'descripcion' => set_value('descripcion'),
                'unidad' => set_value('unidad'),
                'precioCompra' => $precioCompra,
                'precioVenta' => $precioVenta,
                'stock' => set_value('stock'),
                'stockMinimo' => set_value('stockMinimo')
            );

            if ($this->produtos_model->add('produtos', $data) == TRUE) {
                $this->session->set_flashdata('success','Producto agregado con exito');
                redirect(base_url() . 'index.php/vendas/editar/'.$this->input->post('idVendas'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';
            }
        }
        $this->data['view'] = 'productos/adicionarProducto';
        $this->load->view('tema/topo', $this->data);
     
    }

    function editar() {

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'eProduto')){
           $this->session->set_flashdata('error','No tiene permiso para editar productos.');
           redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $precioCompra = $this->input->post('preicoCompra');
            $precioCompra = str_replace(",","", $precioCompra);
            $precioVenta = $this->input->post('precioVenta');
            $precioVenta = str_replace(",", "", $precioVenta);
            $data = array(
                'descripcion' => $this->input->post('descripcion'),
                'unidad' => $this->input->post('unidad'),
                'precioCompra' => $precioCompra,
                'precioVenta' => $precioVenta,
                'stock' => $this->input->post('stock'),
                'stockMinimo' => $this->input->post('stockMinimo')
            );

            if ($this->produtos_model->edit('produtos', $data, 'idProductos', $this->input->post('idProductos')) == TRUE) {
                $this->session->set_flashdata('success','Producto editado con exito');
                redirect(base_url() . 'index.php/productos/editar/'.$this->input->post('idProductos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>A ocurrido un error</p></div>';
            }
        }

        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));

        $this->data['view'] = 'productos/editarProducto';
        $this->load->view('tema/topo', $this->data);
     
    }


    function visualizar() {
      
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'vProduto')){
           $this->session->set_flashdata('error','No tiene permiso para visualizar productos.');
           redirect(base_url());
        }

        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));

        if($this->data['result'] == null){
            $this->session->set_flashdata('error','Producto no encontrado.');
            redirect(base_url() . 'index.php/productos/editar/'.$this->input->post('idProductos'));
        }

        $this->data['view'] = 'productos/visualizarProducto';
        $this->load->view('tema/topo', $this->data);
     
    }
	
    function excluir(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'dProduto')){
           $this->session->set_flashdata('error','No tiene permiso para eliminar productos.');
           redirect(base_url());
        }

        
        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Error al intentar eliminar el producto.');            
            redirect(base_url().'index.php/productos/gerenciar/');
        }

        $this->db->where('produtos_id', $id);
        $this->db->delete('produtos_os');


        $this->db->where('produtos_id', $id);
        $this->db->delete('itens_de_vendas');
        
        $this->produtos_model->delete('produtos','idProductos',$id);             
        

        $this->session->set_flashdata('success','Produto eliminado con éxito!');            
        redirect(base_url().'index.php/productos/gerenciar/');
    }
}

