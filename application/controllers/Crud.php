<?php

class Crud extends CI_Controller

{

	
public function __construct()
{
	parent::__construct();
// girişimiz yoksa eğer kontrol etsin ve logine geri göndersin 
	$this->load->model('login_model');
	if(!$this->login_model->login($this->session->userdata('username'),$this->session->userdata('password'))){
		
		redirect(base_url() . 'Login');


	}

	$this->load->model('crud_model');


	

}

public function index(){

	    $keyword = $this->input->post('keyword');
		
		$this->load->model('crud_model');
		$sonuc=$this->crud_model->islemSayisi($keyword);


		$this->load->library('pagination');

		$config= array(

						
						 

						"base_url"=>base_url()."crud/page/",
						"per_page"=>3,
						"total_rows"=>$sonuc, //satır sayısını belirliyor.

						
						
						"full_tag_open"=>'<ul class="pagination">',
						"full_tag_close"=>'</ul>',
						"num_tag_open"=>'<li class="paginate_button page-item ">',
						"num_tag_close"=>'</li>',
						"cur_tag_open"=>'<li class="paginate_button page-item active"><a class="page-link active">',
						"cur_tag_close"=>'</a></li>',
						'attributes' => array('class' => 'page-link'),
						
						
					

				     );
	



		$this->pagination->initialize($config);

		$data["linkler"]=$this->pagination->create_links(); // kaynak veriyi atıyoruz.
		$data["keyword"] = $keyword;
		$data["count"]=$sonuc; // burada sonuç döndürmek için

		$data['product_details'] = $this->crud_model->getAllProducts($config["per_page"],$this->uri->segment(3,0),$keyword); // sayfa sayısı ve adres sayısı 

		$data['main_content']='view';
		
		

		//$this->load->view('template',$data);

		$this->load->view('crud_view',$data);
		
		
		




}

	

public function addProduct() {

		$this->form_validation->set_rules('name','Product Name','trim|required');
		$this->form_validation->set_rules('email','E-mail','trim|required');
		$this->form_validation->set_rules('phone','Call Number','trim|required');
		$this->form_validation->set_rules('adress','Adress','trim|required');
				
				
				
						
					

		if($this->form_validation->run() == false){

			$data_error = [

				'error'=>validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}


		else {
			$result = $this->crud_model->insertProduct([

				'name' => $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'phone'=> $this->input->post('phone'),
				'adress'=> $this->input->post('adress'),

			]);

		if($result){

				//$this->session->set_flashdata('inserted', 'Data girisi basariyla saglandi!');


			}

		}
		redirect(base_url() . 'crud');
	}

	


	public function editProduct($id){


		$data['singleProduct'] = $this->crud_model->getSingleProduct($id);

		$this->load->view('edit_view', $data);
	}

	public function update($id){

		$this->form_validation->set_rules('name','Product Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('phone','Call Number','trim|required');
		$this->form_validation->set_rules('adress','Call Number','trim|required');

		if($this->form_validation->run() == false){

			$data_error = [

				'error'=> validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}


		else{
			$result = $this->crud_model->updateProduct([

				'name' => $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'phone'=> $this->input->post('phone'),
				'adress'=> $this->input->post('adress')

			], $id);

			if($result){

				$this->session->set_flashdata('updated', 'Data güncellemesi basariyla saglandi!');

			}

		}
		redirect('crud');	



	}

	public function deleteProduct($id){

		$result = $this->crud_model->deleteItem($id);

		

		if($result == true){

			$this->session->set_flashdata('deleted','Silinme islemi basarili');
			



		}



		 	redirect('crud');

		 
	

	}

	public function getListele(){

		$data['products'] = $this->crud_model->getListele();
		$this->load->view('listele_view',$data);

	}

public function search(){

	$keyword = $this->input->post('keyword');
	$data['product_details']=$this->crud_model->get_keyword($keyword);
	$data['keyword']=$keyword;
	$this->load->view('crud_view',$data);


	

}


public function view(){
	$data['main_content']="view";

	$this->load->view('template',$data);
}

	



}


?>