<?php



class Os extends CI_Controller {

    

    function __construct() {

        parent::__construct();

                if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))) {

                    redirect('mapos/login');

                }

		

		$this->load->helper(array('form','codegen_helper'));

		$this->load->model('os_model','',TRUE);

		$this->data['menuOs'] = 'OS';

	}	

	

	function index(){

		$this->gerenciar();

	}



	function gerenciar(){

        

        $this->load->library('pagination');

        

        

        $config['base_url'] = base_url().'index.php/os/gerenciar/';

        $config['total_rows'] = $this->os_model->count('os');

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



		$this->data['results'] = $this->os_model->get('os','idOs,dataInicial,dataFinal,garantia,descricaoProduto,defeito,status,observacoes,laudoTecnico,modelo,marca,serie,tipo','',$config['per_page'],$this->uri->segment(3));

       

	    $this->data['view'] = 'os/os';

       	$this->load->view('tema/topo',$this->data);

      

		

    }

	

    function adicionar(){



        $this->load->library('form_validation');

        $this->data['custom_error'] = ''; 

        

        if ($this->form_validation->run('os') == false) {

           $this->data['custom_error'] = (validation_errors() ? true : false);

        } else {



            $dataInicial = $this->input->post('dataInicial');

            $dataFinal = $this->input->post('dataFinal');



            try {

                

                $dataInicial = explode('/', $dataInicial);

                $dataInicial = $dataInicial[2].'-'.$dataInicial[1].'-'.$dataInicial[0];



                $dataFinal = explode('/', $dataFinal);

                $dataFinal = $dataFinal[2].'-'.$dataFinal[1].'-'.$dataFinal[0];



            } catch (Exception $e) {

               $dataInicial = date('Y/m/d'); 

            }



            $data = array(

                'dataInicial' => $dataInicial,

                'clientes_id' => $this->input->post('clientes_id'),//set_value('idCliente'),

                'usuarios_id' => $this->input->post('usuarios_id'),//set_value('idUsuario'),

                'dataFinal' => $dataFinal,

                'garantia' => set_value('garantia'),

                'descricaoProduto' => set_value('descricaoProduto'),

                'defeito' => set_value('defeito'),

                'status' => set_value('status'),

                'observacoes' => set_value('observacoes'),

                'laudoTecnico' => set_value('laudoTecnico'),
				
				'modelo' => set_value('modelo'),
				
				'marca' => set_value('marca'),
				
				'serie' => set_value('serie'),
				
				'tipo' => set_value('tipo'),

                'faturado' => 0

            );



            if ( is_numeric($id = $this->os_model->add('os', $data, true)) ) {
                $this->session->set_flashdata('success','La O.S se agregó correctamente, puede agregar productos o servicios a la OS en las pestañas de "Productos" y "Servicios"! Se ha enviado un Correo al Administrador'); 
				mail('tuemail', 'Nueva O.S', 'Nueva Orden de Servicio Ingresada');
                redirect('os/editar/'.$id);


            } else {
                

                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

            }

        }

         

        $this->data['view'] = 'os/adicionarOs';

        $this->load->view('tema/topo', $this->data);

    }

    

    public function adicionarAjax(){

        $this->load->library('form_validation');



        if ($this->form_validation->run('os') == false) {

           $json = array("result"=> false);

           echo json_encode($json);

        } else {

            $data = array(

                'dataInicial' => set_value('dataInicial'),

                'clientes_id' => $this->input->post('clientes_id'),//set_value('idCliente'),

                'usuarios_id' => $this->input->post('usuarios_id'),//set_value('idUsuario'),

                'dataFinal' => set_value('dataFinal'),

                'garantia' => set_value('garantia'),

                'descricaoProduto' => set_value('descricaoProduto'),

                'defeito' => set_value('defeito'),

                'status' => set_value('status'),

                'observacoes' => set_value('observacoes'),

                'laudoTecnico' => set_value('laudoTecnico'),
				
				'modelo' => set_value('modelo'),
				
				'marca' => set_value('marca'),
				
				'serie' => set_value('serie'),
				
				'tipo' => set_value('tipo')

            );



            if ( is_numeric($id = $this->os_model->add('os', $data, true)) ) {

                $json = array("result"=> true, "id"=> $id);

                echo json_encode($json);



            } else {

                $json = array("result"=> false);

                echo json_encode($json);



            }

        }

         

    }





    

    function editar() {

        $this->load->library('form_validation');

        $this->data['custom_error'] = '';



        if ($this->form_validation->run('os') == false) {

            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);

        } else {



            $dataInicial = $this->input->post('dataInicial');

            $dataFinal = $this->input->post('dataFinal');



            try {

                

                $dataInicial = explode('/', $dataInicial);

                $dataInicial = $dataInicial[2].'-'.$dataInicial[1].'-'.$dataInicial[0];



                $dataFinal = explode('/', $dataFinal);

                $dataFinal = $dataFinal[2].'-'.$dataFinal[1].'-'.$dataFinal[0];



            } catch (Exception $e) {

               $dataInicial = date('Y/m/d'); 

            }



            $data = array(

                'dataInicial' => $dataInicial,

                'dataFinal' => $dataFinal,

                'garantia' => $this->input->post('garantia'),

                'descricaoProduto' => $this->input->post('descricaoProduto'),

                'defeito' => $this->input->post('defeito'),

                'status' => $this->input->post('status'),

                'observacoes' => $this->input->post('observacoes'),

                'laudoTecnico' => $this->input->post('laudoTecnico'),

                'usuarios_id' => $this->input->post('usuarios_id'),
				
				'modelo' => $this->input->post('modelo'),
				
				'marca' => $this->input->post('marca'),
				
				'serie' => $this->input->post('serie'),
				
				'tipo' => $this->input->post('tipo'),

                'clientes_id' => $this->input->post('clientes_id')

            );



            if ($this->os_model->edit('os', $data, 'idOs', $this->input->post('idOs')) == TRUE) {

                $this->session->set_flashdata('success','Orden de Servicio editada con éxito!');

                redirect(base_url() . 'index.php/os/editar/'.$this->input->post('idOs'));

            } else {

                $this->data['custom_error'] = '<div class="form_error"><p>Ocurrió un error</p></div>';

            }

        }



        $this->data['result'] = $this->os_model->getById($this->uri->segment(3));

        $this->data['produtos'] = $this->os_model->getProdutos($this->uri->segment(3));

        $this->data['servicos'] = $this->os_model->getServicos($this->uri->segment(3));

        $this->data['anexos'] = $this->os_model->getAnexos($this->uri->segment(3));

        $this->data['view'] = 'os/editarOs';

        $this->load->view('tema/topo', $this->data);

   

    }



    public function visualizar(){



        $this->data['custom_error'] = '';

        $this->load->model('mapos_model');

        $this->data['result'] = $this->os_model->getById($this->uri->segment(3));

        $this->data['produtos'] = $this->os_model->getProdutos($this->uri->segment(3));

        $this->data['servicos'] = $this->os_model->getServicos($this->uri->segment(3));

        $this->data['emitente'] = $this->mapos_model->getEmitente();



        $this->data['view'] = 'os/visualizarOs';

        $this->load->view('tema/topo', $this->data);

       

    }

    

    public function visualizarAlbaran(){



        $this->data['custom_error'] = '';

        $this->load->model('mapos_model');

        $this->data['result'] = $this->os_model->getById($this->uri->segment(3));

        $this->data['produtos'] = $this->os_model->getProdutos($this->uri->segment(3));

        $this->data['servicos'] = $this->os_model->getServicos($this->uri->segment(3));

        $this->data['emitente'] = $this->mapos_model->getEmitente();



        $this->data['view'] = 'os/visualizarAlbaran';

        $this->load->view('tema/topo', $this->data);

       

    }

	

    function excluir(){



        $id =  $this->input->post('id');

        if ($id == null){



            $this->session->set_flashdata('error','Error al intentar eliminar la Orden de Servicio');            

            redirect(base_url().'index.php/os/gerenciar/');

        }



        $this->db->where('os_id', $id);

        $this->db->delete('servicos_os');



        $this->db->where('os_id', $id);

        $this->db->delete('produtos_os');



        $this->db->where('os_id', $id);

        $this->db->delete('anexos');



        $this->os_model->delete('os','idOs',$id);             

        



        $this->session->set_flashdata('success','Orden de Servicio eliminada con éxito!');            

        redirect(base_url().'index.php/os/gerenciar/');





        

    }



    public function autoCompleteProduto(){

        

        if (isset($_GET['term'])){

            $q = strtolower($_GET['term']);

            $this->os_model->autoCompleteProduto($q);

        }



    }



    public function autoCompleteCliente(){



        if (isset($_GET['term'])){

            $q = strtolower($_GET['term']);

            $this->os_model->autoCompleteCliente($q);

        }



    }



    public function autoCompleteUsuario(){



        if (isset($_GET['term'])){

            $q = strtolower($_GET['term']);

            $this->os_model->autoCompleteUsuario($q);

        }



    }



    public function autoCompleteServico(){



        if (isset($_GET['term'])){

            $q = strtolower($_GET['term']);

            $this->os_model->autoCompleteServico($q);

        }



    }



    public function adicionarProduto(){



        

        $preco = $this->input->post('preco');

        $quantidade = $this->input->post('quantidade');

        $subtotal = $preco * $quantidade;

        $produto = $this->input->post('idProduto');

        $data = array(

            'quantidade'=> $quantidade,

            'subTotal'=> $subtotal,

            'produtos_id'=> $produto,

            'os_id'=> $this->input->post('idOsProduto'),

        );



        if($this->os_model->add('produtos_os', $data) == true){

            $sql = "UPDATE produtos set estoque = estoque - ? WHERE idProdutos = ?";

            $this->db->query($sql, array($quantidade, $produto));

            

            echo json_encode(array('result'=> true));

        }else{

            echo json_encode(array('result'=> false));

        }

      

    }



    function excluirProduto(){

            $ID = $this->input->post('idProduto');

            if($this->os_model->delete('produtos_os','idProdutos_os',$ID) == true){

                

                $quantidade = $this->input->post('quantidade');

                $produto = $this->input->post('produto');





                $sql = "UPDATE produtos set estoque = estoque + ? WHERE idProdutos = ?";



                $this->db->query($sql, array($quantidade, $produto));

                

                echo json_encode(array('result'=> true));

            }

            else{

                echo json_encode(array('result'=> false));

            }           

    }



    public function adicionarServico(){



        

        $data = array(

            'servicos_id'=> $this->input->post('idServico'),

            'os_id'=> $this->input->post('idOsServico'),

        );



        if($this->os_model->add('servicos_os', $data) == true){



            echo json_encode(array('result'=> true));

        }else{

            echo json_encode(array('result'=> false));

        }



    }



    function excluirServico(){

            $ID = $this->input->post('idServico');

            if($this->os_model->delete('servicos_os','idServicos_os',$ID) == true){



                echo json_encode(array('result'=> true));

            }

            else{

                echo json_encode(array('result'=> false));

            }

    }





    public function anexar(){



        $this->load->library('upload');

        $this->load->library('image_lib');



        $upload_conf = array(

            'upload_path'   => realpath('./assets/anexos'),

            'allowed_types' => 'jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG|pdf|PDF|cdr|CDR|docx|DOCX|txt', // formatos permitidos para adjuntar a la OS

            'max_size'      => 0,

            );

    

        $this->upload->initialize( $upload_conf );

        

        // Change $_FILES to new vars and loop them

        foreach($_FILES['userfile'] as $key=>$val)

        {

            $i = 1;

            foreach($val as $v)

            {

                $field_name = "file_".$i;

                $_FILES[$field_name][$key] = $v;

                $i++;   

            }

        }

        // Unset the useless one ;)

        unset($_FILES['userfile']);

    

        // Put each errors and upload data to an array

        $error = array();

        $success = array();

        

        // main action to upload each file

        foreach($_FILES as $field_name => $file)

        {

            if ( ! $this->upload->do_upload($field_name))

            {

                // if upload fail, grab error 

                $error['upload'][] = $this->upload->display_errors();

            }

            else

            {

                // otherwise, put the upload datas here.

                // if you want to use database, put insert query in this loop

                $upload_data = $this->upload->data();

                

                if($upload_data['is_image'] == 1){



                   // set the resize config

                    $resize_conf = array(

                        // it's something like "/full/path/to/the/image.jpg" maybe

                        'source_image'  => $upload_data['full_path'], 

                        // and it's "/full/path/to/the/" + "thumb_" + "image.jpg

                        // or you can use 'create_thumbs' => true option instead

                        'new_image'     => $upload_data['file_path'].'thumbs/thumb_'.$upload_data['file_name'],

                        'width'         => 200,

                        'height'        => 125

                        );



                    // initializing

                    $this->image_lib->initialize($resize_conf);



                    // do it!

                    if ( ! $this->image_lib->resize())

                    {

                        // if got fail.

                        $error['resize'][] = $this->image_lib->display_errors();

                    }

                    else

                    {

                        // otherwise, put each upload data to an array.

                        $success[] = $upload_data;



                        $this->load->model('Os_model');



                        $this->Os_model->anexar($this->input->post('idOsServico'), $upload_data['file_name'] ,base_url().'assets/anexos/','thumb_'.$upload_data['file_name'],realpath('./assets/anexos/'));



                    } 

                }

                else{



                    $success[] = $upload_data;



                    $this->load->model('Os_model');



                    $this->Os_model->anexar($this->input->post('idOsServico'), $upload_data['file_name'] ,base_url().'assets/anexos/','',realpath('./assets/anexos/'));

 

                }

                

            }

        }



        // see what we get

        if(count($error) > 0)

        {

            //print_r($data['error'] = $error);

            echo json_encode(array('result'=> false, 'mensagem' => 'Ningún archivo fue adjuntado.'));

        }

        else

        {

            //print_r($data['success'] = $upload_data);

            echo json_encode(array('result'=> true, 'mensagem' => 'Archivo(s) adjuntado(s) con éxito.'));

        }

        



    }





    public function excluirAnexo($id = null){

        if($id == null || !is_numeric($id)){

            echo json_encode(array('result'=> false, 'mensagem' => 'Error al intentar eliminar el archivo.'));

        }

        else{



            $this->db->where('idAnexos', $id);

            $file = $this->db->get('anexos',1)->row();



            unlink($file->path.'/'.$file->anexo);



            if($file->thumb != null){

                unlink($file->path.'/thumbs/'.$file->thumb);    

            }

            

            if($this->os_model->delete('anexos','idAnexos',$id) == true){



                echo json_encode(array('result'=> true, 'mensagem' => 'Archivo adjunto eliminado con éxito.'));

            }

            else{

                echo json_encode(array('result'=> false, 'mensagem' => 'Error al intentar eliminar el archivo.'));

            }



            

        }

    }





    public function downloadanexo($id = null){

        

        if($id != null && is_numeric($id)){

            

            $this->db->where('idAnexos', $id);

            $file = $this->db->get('anexos',1)->row();



            $this->load->library('zip');



            $path = $file->path;



            $this->zip->read_file($path.'/'.$file->anexo); 



            $this->zip->download('file'.date('d-m-Y-H.i.s').'.zip'); 



        }

      

    }





    public function faturar() {



        $this->load->library('form_validation');

        $this->data['custom_error'] = '';

 



        if ($this->form_validation->run('ingreso') == false) {

            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);

        } else {





            $vencimento = $this->input->post('vencimento');

            $recebimento = $this->input->post('recebimento');



            try {

                

                $vencimento = explode('/', $vencimento);

                $vencimento = $vencimento[2].'-'.$vencimento[1].'-'.$vencimento[0];



                if($recebimento != null){

                    $recebimento = explode('/', $recebimento);

                    $recebimento = $recebimento[2].'-'.$recebimento[1].'-'.$recebimento[0];



                }

            } catch (Exception $e) {

               $vencimento = date('Y/m/d'); 

            }

            

            $data = array(

                'descricao' => set_value('descricao'),

                'valor' => $this->input->post('valor'),

                'clientes_id' => $this->input->post('clientes_id'),

                'data_vencimento' => $vencimento,

                'data_pagamento' => $recebimento,

                'baixado' => $this->input->post('recebido'),

                'cliente_fornecedor' => set_value('cliente'),

                'forma_pgto' => $this->input->post('formaPgto'),

                'tipo' => $this->input->post('tipo')

            );



            if ($this->os_model->add('lancamentos',$data) == TRUE) { 

                

                $os = $this->input->post('os_id'); 



                $this->db->set('faturado',1);

                $this->db->set('valorTotal',$this->input->post('valor'));

                $this->db->where('idOs', $os);

                $this->db->update('os'); 



                $this->session->set_flashdata('success','Orden de Servicio facturada con éxito!');

                $json = array('result'=>  true);

                echo json_encode($json);

                die();

            } else {

                $this->session->set_flashdata('error','Se produjo un error al tratar de factura la Orden de Servicio');

                $json = array('result'=>  false);

                echo json_encode($json);

                die();

            }

        }



        $this->session->set_flashdata('error','Se produjo un error al tratar de factura la Orden de Servicio');

        $json = array('result'=>  false);

        echo json_encode($json);

        

    }



}


