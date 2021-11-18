<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

	

	public function index(){

	
		$this->load->view('register_view');
	
		


	}



public function emailgonder($emailTo){
													//öncesinde autoload a email ekledik
	 				
	$config['protocol'] = 'smtp';					//mail gönderim için işlemler
	$config['smtp_host'] = 'smtp.gmail.com';
	$config['smtp_port'] = '465';
	$config['smtp_user'] = 'berkayclz55@gmail.com';
	$config['smtp_pass'] = 'berk55clz';
	$config['mailtype'] = 'html';
	$config['charset'] = 'utf-8';
	$config['smtp_crypto'] = 'ssl';
	$config['newline']   = "\r\n"; 
	$this->email->initialize($config);

	$this->email->from('berkayclz55@gmail.com','Berkay');		//hangi adresten nereye ne gönderdiğin 
	$this->email->to($emailTo);
	$this->email->subject("E-Febrics Kayıt");
	$this->email->message("E-Febrics kaydınız başarıyla tamamlanmıştır");
 	
	

	if(! $this->email->send()){

		show_error($this->email->print_debugger());
		echo "Email gönderilemedi";
	}
	else{

		 

		 redirect('Login');

	}

}



public function register(){

	$this->load->library('form_validation');
	$this->form_validation->set_rules('password','password','min_length[6]|trim');
	

	if($this->form_validation->run()){

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$email=$this->input->post('email');

		$data=array('username'=>$username,
					'password'=>$password,
					'email'=>$email);

		$this->load->model('register_model');

		$ekle=$this->register_model->ekle($data,'users');

		if($ekle){
			$emailTo = $this->input->post('email');		//girilen maili emailto ya attık ve emailgonder fonksiyonuna yolladık.
			$this->emailgonder($emailTo);

		
	    }
	}else{

		
		redirect('Register');

	}

		
}





/*
	public function register(){


		$this->form_validation->set_rules('username','username','trim|required|alpha');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|alpha');
			
		if($this->form_validation->run() == false){

			$this->index();
		}	
		else{

			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email')
				

			);

			$register_user = new register_model;
			$cheking = $register_user->register_d($data);

			if($cheking){

				$this->session->set_flashdata('status','kayıt başarılı');
				redirect(base_url('Login'));
			}
			else{

				$this->session->set_flashdata('status','kayıt başarısız');
				redirect(base_url('Register'));


			}


		}
	}*/

}


?>