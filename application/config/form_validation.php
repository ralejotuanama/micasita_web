<?php
$config = array('clientes' => array(
    
    /*array(
                                	'field'=>'nombreCliente',
                                	'label'=>'NombreClientellkklkklklklklkkl',
                                	'rules'=>'required|trim|xss_clean'
                                ),*/
								array(
                                	'field'=>'documento',
                                	'label'=>'DNI/RUCtrrttr',
                                	'rules'=>'required|trim|xss_clean'
                                )
							/*	array(
                                	'field'=>'telefono',
                                	'label'=>'Telefonortrttr',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'email',
                                	'label'=>'Email',
                                	'rules'=>'required|trim|valid_email|xss_clean'
                                ),*/
								/*array(
                                	'field'=>'ruc',
                                	'label'=>'Ruc',
                                	'rules'=>'required|trim|xss_clean'
                                ),*/
							/*	array(
                                	'field'=>'numero',
                                	'label'=>'Número',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'barrio',
                                	'label'=>'Barrio',
                                	'rules'=>'required|trim|xss_clean'
                                ),*/
								/*array(
                                	'field'=>'ciudad',
                                	'label'=>'Ciudad',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'estado',
                                	'label'=>'Estado',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'cep',
                                	'label'=>'CEP',
                                	'rules'=>'required|trim|xss_clean'
                                ),
                                
                                */
                               /* array(
                                	'field'=>'cep',
                                	'label'=>'CEP',
                                	'rules'=>'required|trim|xss_clean'
                                ),*/

                                /*array(
                                	'field'=>'razonsocial',
                                	'label'=>'Razonsocial',
                                	'rules'=>'required|trim|xss_clean'
                                )
*/
                                
                  
                                


                                )
                ,

                'solicitudes' => array(array(

                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'   

                ))


                ,
                'servicos' => array(array(
                                    'field'=>'nombre',
                                    'label'=>'Nombre',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descripcion',
                                    'label'=>'',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'precio',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'produtos' => array(array(
                                    'field'=>'descripcion',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'unidad',
                                    'label'=>'Unidad',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'precioCompra',
                                    'label'=>'Precio de Compra',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'precioVenta',
                                    'label'=>'Precio de Venta',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'stock',
                                    'label'=>'Stock',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'stockMinimo',
                                    'label'=>'Stock Mnimo',
                                    'rules'=>'trim|xss_clean'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nombre',
                                    'label'=>'Nombre',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'rg',
                                    'label'=>'RG',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cpf',
                                    'label'=>'CPF',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'ruc',
                                    'label'=>'Ruc',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'numero',
                                    'label'=>'Numero',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'barrio',
                                    'label'=>'Barrio',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'ciudad',
                                    'label'=>'Ciudad',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estado',
                                    'label'=>'Estado',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'required|trim|valid_email|xss_clean'
                                ),
                                array(
                                    'field'=>'clave',
                                    'label'=>'Clave',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telefono',
                                    'label'=>'Telefono',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'situacion',
                                    'label'=>'Situacion',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,      
                'os' => array(array(
                                    'field'=>'dataInicial',
                                    'label'=>'DataInicial',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'dataFinal',
                                    'label'=>'DataFinal',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'garantia',
                                    'label'=>'Garantia',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descricaoProduto',
                                    'label'=>'DescricaoProduto',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'defeito',
                                    'label'=>'Defeito',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'status',
                                    'label'=>'Status',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'observacoes',
                                    'label'=>'Observacoes',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'laudoTecnico',
                                    'label'=>'Laudo Tecnico',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'modelo',
                                    'label'=>'Modelo',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'marca',
                                    'label'=>'Marca',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'serie',
                                    'label'=>'Serie',
                                    'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'trim|xss_clean'
                                )
								)

                  ,
				'tiposUsuario' => array(array(
                                	'field'=>'nomeTipo',
                                	'label'=>'NomeTipo',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'situacao',
                                	'label'=>'Situacao',
                                	'rules'=>'required|trim|xss_clean'
                                ))

                ,
                'ingreso' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                        
                                array(
                                    'field'=>'cliente',
                                    'label'=>'Cliente',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'gasto' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'fornecedor',
                                    'label'=>'Fornecedor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'aparatos' => array(array(
                                    'field'=>'clid',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nombre',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'modelo',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'marca',
                                    'label'=>'marca',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'serie',
                                    'label'=>'',
                                    'rules'=>'required|trim|xss_clean'
                                
                                ))
                ,
                'vendas' => array(array(

                                    'field' => 'dataVenda',
                                    'label' => 'Data da Venda',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'clientes',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'usuarios_id',
                                    'rules'=>'trim|xss_clean|required'
                                ))
		);
			   