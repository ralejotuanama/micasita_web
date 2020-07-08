<?php
class Clientes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    /* clientes*/
    public function geta($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idlinea','desc');
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where('idClientes',$where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

   /* 
        
        $this->db->select($fields.',clientes.nombreCliente');
        $this->db->from($table);
        $this->db->join('clientes','clientes.idClientes = os.clientes_id');
        $this->db->limit($perpage,$start);
        $this->db->order_by('idOs','desc');
        if($where){
            $this->db->where($where);
        }
        $query = $this->db->get();
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    */


    public function getById_clientes_lineas($id){
        $this->db->select('clientes.*,lineas.descripcion,lineas.idlinea as li , lineas.fechainicio,lineas.fechafin, lineas.estadolinea, lineas.comentario');
		$this->db->from('clientes');
		$this->db->join('lineas', 'clientes.idClientes = lineas.idClientes');
        $this->db->where('idlinea',$id);
        $query = $this->db->get();
        
      
        return $query->row();

		
    }


    public function getById_clientes_solicitudes($id){
        $this->db->select('clientes.*,solicitudes.nombre,solicitudes.idsolicitud as so , solicitudes.fechainicio, solicitudes.fechafin, solicitudes.estadosolicitud');
		$this->db->from('clientes');
		$this->db->join('solicitudes', 'clientes.idClientes = solicitudes.idClientes');
        $this->db->where('idsolicitud',$id);
        $query = $this->db->get();
        
      
        return $query->row();

		
    }





    public function getAnexosfiltroslinea($tipo,$codlinea){ 

        
        $this->db->where('os_id', $tipo);
        $this->db->where('idlinea', $codlinea);
        return $this->db->get('anexos')->result(); 
    }

    public function getSolicitudById_($id){
        $this->db->where('idsolicitud',$id);
        return $this->db->get('solicitudes')->row();
    }

    public function anexarlinea( $anexo, $url, $thumb, $path,$tipo,$codlinea){  
        $this->db->set('anexo',$anexo);
        $this->db->set('url',$url);
        $this->db->set('thumb',$thumb);
        $this->db->set('path',$path);
      
        $this->db->set('os_id',$tipo);
        $this->db->set('idlinea',$codlinea);
        return $this->db->insert('anexos');
    }

    /*clientes*/

    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idClientes','desc');
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id){
        $this->db->where('idClientes',$id);
        $this->db->limit(1);
        return $this->db->get('clientes')->row();
    }
    
    function add($table,$data){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    

    function addLinea($table,$data){

        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;   
    }


   public function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;        
    }

    function count($table) {
        return $this->db->count_all($table);
    }
    
    public function getOsByCliente($id){
        $this->db->where('clientes_id',$id);
        $this->db->order_by('idOs','desc');
        $this->db->limit(10);
        return $this->db->get('os')->result();
    }

    public function getAnexos2($os){
        
        $this->db->where('os_id', $os);
        return $this->db->get('anexos')->result();
        
    }

    public function getSolicitudesVinculadasById($id){
        $this->db->where('idClientes',$id);
        return $this->db->get('solicitudes')->result();
    }

}