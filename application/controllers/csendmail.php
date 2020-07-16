<?php
class Csendmail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sendMailGmail()
	{
		//cargamos la libreria email de ci
		$this->load->library("email");

		//Configuracion para yahoo
		// $configYahoo = array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'smtp.mail.yahoo.com',
		// 	'smtp_port' => 587,
		// 	'smtp_crypto' => 'tls',
		// 	'smtp_user' => 'emaildeyahoo',
		// 	'smtp_pass' => 'password',
		// 	'mailtype' => 'html',
		// 	'charset' => 'utf-8',
		// 	'newline' => "\r\n"
		// ); 


		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'ronald152515@gmail.com',
			'smtp_pass' => 'ronaldsandy',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);

		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);

		$this->email->from('ronald152515@gmail.com');
		$this->email->to("ronald152515@gmail.com");
		$this->email->subject('Esto es una prueba á');
		$this->email->message('<h2>Correo con imagen</h2>
			<hr><br>
			Kurt Cobain
			<br>
			<a href="http://www.facebook.com/intecsolt"><img src="'.base_url().'img/7.jpg" height="150" width="150"></a>
			<h3>Click en la imagen y dale like a mi pagina :D</h3>'
			);


		for ($i=1; $i <=1 ; $i++) { 
			if ($this->email->send()) {
				echo "Enviado by litokurt";
			}else{
				show_error($this->email->print_debugger());
			}
			sleep(1);
		}
		
	}

}