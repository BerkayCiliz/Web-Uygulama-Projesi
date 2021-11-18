<?

class Login extends CI_Controller{


public function __construct()
{
	parent::__construct();
	
}

public function index()

{

	
	
	$this->load->model('login_model');
	if($this->login_model->login($this->session->userdata('username'),$this->session->userdata('password'))){
		
		redirect(base_url() . 'crud');


	}
//isset tanımlı mı değil mi kontrol eder şifreyi kontrol için
	if(isset($_POST['password'])) {
			
	
		$this->load->model('login_model');
		
		if($this->login_model->login($_POST['username'],$_POST['password'])) {
			$sessionData=array('username' => $_POST['username'],'password' => $_POST['password']);

			$this->session->set_userdata($sessionData);  //yeni bilgilerimizi userdata içerisine atıyoruz ve kullanıcı bilgisini saklamak için
			
			redirect('Crud');
		} else {	
			
			
			redirect(base_url() . 'Login');

		}

 	}
	$this->load->view('login_view');


}




public function logout(){

	$this->session->sess_destroy();  //oturumu temizlemek için kullandık
	redirect('Crud');
}

}
?>