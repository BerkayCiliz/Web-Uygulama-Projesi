<?php 


class Crud_model extends CI_Model{

public function getAllProducts($per,$segment,$search=''){


	if (!$search=='') {
    $this->db->like('name',$search);
	$this->db->or_like('email',$search);
	$this->db->or_like('phone',$search);
	$this->db->or_like('adress',$search);
	}
	$query = $this->db->limit($per,$segment)->get('products');  // burada bir limit belirledik ve max kaç adet çekeceğimiz belli ediyoruz.
	
	if($query){

		return $query->result();

	}
}
public function insertProduct($data){

	$query = $this->db->insert('products',$data);

	if($query){
		return true;

	}
	else{
		return false;
	}
}
public function getSingleProduct($id){

		$this->db->where('id',$id);
		$query = $this->db->get('products');

		if($query){

			return $query->row();
		}
	}

public function updateProduct($data, $id){

		$this->db->where('id',$id);
		$query = $this->db->update('products', $data);

		if($query){

			return true;
		}
		else
		{
			return false;
		}
	}

public function deleteItem($id){

		$this->db->where('id',$id); // bir koşula göre yani id'ye göre seçim
		$query = $this->db->delete('products');
		if($query){
			return true;
		}
		else{

			return false;
		}
	}

public function getListele(){

	$query = $this->db->get('products');

	return $query->result();

}	

public function islemSayisi($search=''){

	if (!$search=='') {
    $this->db->like('name',$search); // like benzer sonuçları aramak için kullanılan method
	$this->db->or_like('email',$search);
	$this->db->or_like('phone',$search);
	$this->db->or_like('adress',$search);
	}
	$result=$this->db->select('id')
	->from('products')
	->count_all_results(); //bütün gelen idleri döndürüyorum  kaç adet olduğunu buluyorum

	return $result;
}

public function get_keyword($keyword){  // kelimeyi buraya gönderiyoruz ve aramayı yapıp result döndürüyoruz.
	$this->db->select('*');
	$this->db->from('products');
	$this->db->like('name',$keyword);
	$this->db->or_like('email',$keyword);
	$this->db->or_like('phone',$keyword);
	$this->db->or_like('adress',$keyword);
	return $this->db->get()->result(); // get edip sonuç döndürdüm
}

	

	
}

 ?>