<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    
    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields.',clientes.nombreCliente');
        $this->db->from($table);
        $this->db->join('clientes','clientes.idClientes = vendas.clientes_id');
        $this->db->limit($perpage,$start);
        $this->db->order_by('idVendas','desc');
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }


   /* useremail  usertelefone,*/

    function getById($id){
        $this->db->select('vendas.*, clientes.*, usuarios.telefono  , usuarios.nombre');
        $this->db->from('vendas');
        $this->db->join('clientes','clientes.idClientes = vendas.clientes_id');
        $this->db->join('usuarios','usuarios.idUsuarios = vendas.usuarios_id');
        $this->db->where('vendas.idVendas',$id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function getProdutos($id = null){
        $this->db->select('itens_de_vendas.*, produtos.*');
        $this->db->from('itens_de_vendas');
        $this->db->join('produtos','produtos.idProductos = itens_de_vendas.produtos_id');
        $this->db->where('vendas_id',$id);
        return $this->db->get()->result();
    }

    
    function add($table,$data,$returnId = false){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
                        if($returnId == true){
                            return $this->db->insert_id($table);
                        }
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function edit($table,$data,$fieldID,$ID){
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

    function count($table){
	return $this->db->count_all($table);
    }

    public function autoCompleteProduto($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('descripcion', $q);
        $query = $this->db->get('produtos');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['descripcion'].' | Precio: $ '.$row['precioVenta'].' | Stock: '.$row['stock'],'stock'=>$row['stock'],'id'=>$row['idProductos'],'preco'=>$row['precioVenta']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteCliente($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nombreCliente', $q);
        $query = $this->db->get('clientes');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nombreCliente'].' | Teléfono: '.$row['telefono'],'id'=>$row['idClientes']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteUsuario($q){

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nombre', $q);
        $this->db->where('situacion',1);
        $query = $this->db->get('usuarios');
        if($query->num_rows > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['nombre'].' | Teléfono: '.$row['telefono'],'id'=>$row['idUsuarios']);
            }
            echo json_encode($row_set);
        }
    }



}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */