<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if((!$this->session->userdata('session_id')) || (!$this->session->userdata('logado'))){
            redirect('mapos/login');
        }
        
        $this->load->model('Relatorios_model','',TRUE);
        $this->data['menuRelatorios'] = 'Relatórios';

    }

    public function clientes(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rCliente')){
           $this->session->set_flashdata('error','No se le permite generar los informes de clientes.');
           redirect(base_url());
        }
        $this->data['view'] = 'reportes/reporte_clientes';
       	$this->load->view('tema/topo',$this->data);
    }

    public function productos(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rProduto')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }
        $this->data['view'] = 'reportes/reporte_productos';
       	$this->load->view('tema/topo',$this->data);

    }

    public function clientesCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rCliente')){
           $this->session->set_flashdata('error','No se le permite generar los informes de clientes.');
           redirect(base_url());
        }

        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');

        $data['clientes'] = $this->Relatorios_model->clientesCustom($dataInicial,$dataFinal);

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirClientes', $data);
        $html = $this->load->view('reportes/imprimir/imprimirClientes', $data, true);
        pdf_create($html, 'reporte_clientes' . date('d/m/y'), TRUE);
    
    }

    public function clientesRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rCliente')){
           $this->session->set_flashdata('error','No se le permite generar los informes de clientes.');
           redirect(base_url());
        }

        $data['clientes'] = $this->Relatorios_model->clientesRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirClientes', $data);
        $html = $this->load->view('reportes/imprimir/imprimirClientes', $data, true);
        pdf_create($html, 'reporte_clientes' . date('d/m/y'), TRUE);
    }

    public function produtosRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rProduto')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }

        $data['produtos'] = $this->Relatorios_model->produtosRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirProdutos', $data);
        $html = $this->load->view('reportes/imprimir/imprimirProductos', $data, true);
        pdf_create($html, 'reporte_productos' . date('d/m/y'), TRUE);
    }

    public function produtosRapidMin(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rProduto')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos.');
           redirect(base_url());
        }

        $data['produtos'] = $this->Relatorios_model->produtosRapidMin();

        $this->load->helper('mpdf');
        $html = $this->load->view('reportes/imprimir/imprimirProductos', $data, true);
        pdf_create($html, 'reporte_productos' . date('d/m/y'), TRUE);
        
    }

    public function produtosCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rProduto')){
           $this->session->set_flashdata('error','No se le permite generar los informes de productos..');
           redirect(base_url());
        }

        $precoInicial = $this->input->get('precoInicial');
        $precoFinal = $this->input->get('precoFinal');
        $estoqueInicial = $this->input->get('estoqueInicial');
        $estoqueFinal = $this->input->get('estoqueFinal');

        $data['produtos'] = $this->Relatorios_model->produtosCustom($precoInicial,$precoFinal,$estoqueInicial,$estoqueFinal);

        $this->load->helper('mpdf');
        $html = $this->load->view('reportes/imprimir/imprimirProductos', $data, true);
        pdf_create($html, 'reporte_productos' . date('d/m/y'), TRUE);
    }

    public function servicios(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rServico')){
           $this->session->set_flashdata('error','No se le permite generar los informes de servicios.');
           redirect(base_url());
        }
        $this->data['view'] = 'reportes/reporte_servicios';
       	$this->load->view('tema/topo',$this->data);

    }

    public function servicosCustom(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rServico')){
           $this->session->set_flashdata('error','No se le permite generar los informes de servicios.');
           redirect(base_url());
        }

        $precoInicial = $this->input->get('precoInicial');
        $precoFinal = $this->input->get('precoFinal');
        $data['servicos'] = $this->Relatorios_model->servicosCustom($precoInicial,$precoFinal);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirServicos', $data);
        $html = $this->load->view('reportes/imprimir/imprimirServicios', $data, true);
        pdf_create($html, 'reporte_servicios' . date('d/m/y'), TRUE);
    }

    public function servicosRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rServico')){
           $this->session->set_flashdata('error','No se le permite generar los informes de servicios.');
           redirect(base_url());
        }

        $data['servicos'] = $this->Relatorios_model->servicosRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirServicos', $data);
        $html = $this->load->view('reportes/imprimir/imprimirServicios', $data, true);
        pdf_create($html, 'reporte_servicios' . date('d/m/y'), TRUE);
    }

    public function os(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }
        $this->data['view'] = 'reportes/reporte_os';
       	$this->load->view('tema/topo',$this->data);
    }

    public function osRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }

        $data['os'] = $this->Relatorios_model->osRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('reportes/imprimir/imprimirOs', $data, true);
        pdf_create($html, 'reporte_os' . date('d/m/y'), TRUE);
    }

    public function osCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rOs')){
           $this->session->set_flashdata('error','No se le permite generar los informes de OS.');
           redirect(base_url());
        }
        
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $cliente = $this->input->get('cliente');
        $responsavel = $this->input->get('responsavel');
        $status = $this->input->get('status');
        $data['os'] = $this->Relatorios_model->osCustom($dataInicial,$dataFinal,$cliente,$responsavel,$status);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('reporters/imprimir/imprimirOs', $data, true);
        pdf_create($html, 'reporte_os' . date('d/m/y'), TRUE);
    }


    public function financiero(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rFinanceiro')){
           $this->session->set_flashdata('error','No se le permite generar los informes financieros.');
           redirect(base_url());
        }

        $this->data['view'] = 'reportes/reporte_financiero';
        $this->load->view('tema/topo',$this->data);
    
    }


    public function financeiroRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rFinanceiro')){
           $this->session->set_flashdata('error','No se le permite generar los informes financieros.');
           redirect(base_url());
        }

        $data['lancamentos'] = $this->Relatorios_model->financeiroRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirFinanceiro', $data);
        $html = $this->load->view('reportes/imprimir/imprimirFinanciero', $data, true);
        pdf_create($html, 'reporte_os' . date('d/m/y'), TRUE);
    }

    public function financeiroCustom(){

        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rFinanceiro')){
           $this->session->set_flashdata('error','No se le permite generar los informes financieros.');
           redirect(base_url());
        }

        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $tipo = $this->input->get('tipo');
        $situacao = $this->input->get('situacao');

        $data['lancamentos'] = $this->Relatorios_model->financeiroCustom($dataInicial,$dataFinal,$tipo,$situacao);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirFinanceiro', $data);
        $html = $this->load->view('reportes/imprimir/imprimirFinanciero', $data, true);
        pdf_create($html, 'reporte_financiero' . date('d/m/y'), TRUE);
    }



    public function ventas(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rVenda')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas.');
           redirect(base_url());
        }

        $this->data['view'] = 'reportes/reporte_ventas';
        $this->load->view('tema/topo',$this->data);
    }

    public function vendasRapid(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rVenda')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas.');
           redirect(base_url());
        }
        $data['vendas'] = $this->Relatorios_model->vendasRapid();

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('reportes/imprimir/imprimirVentas', $data, true);
        pdf_create($html, 'reporte_ventas' . date('d/m/y'), TRUE);
    }

    public function vendasCustom(){
        if(!$this->permission->checkPermission($this->session->userdata('permissao'),'rVenda')){
           $this->session->set_flashdata('error','No se le permite generar los informes de ventas..');
           redirect(base_url());
        }
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');
        $cliente = $this->input->get('cliente');
        $responsavel = $this->input->get('responsavel');

        $data['vendas'] = $this->Relatorios_model->vendasCustom($dataInicial,$dataFinal,$cliente,$responsavel);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('reportes/imprimir/imprimirVentas', $data, true);
        pdf_create($html, 'reporte_ventas' . date('d/m/y'), TRUE);
    }
}
