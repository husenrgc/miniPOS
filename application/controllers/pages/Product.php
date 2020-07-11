<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
    
    $this->load->model('Product_model'); 
    $this->load->library('form_validation');

}
    // Load Product ke controller ini

	public function index()
	{
		 $data['product'] = $this->Product_model->viewproduct();
		 $data['product_category'] = $this->Product_model->viewcategory();
		$this->load->view('pages/product',$data);
	}

	public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Product_model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Product_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('pages/product');
      }
    }
    
    $this->load->view('pages/product');

	
}

public function detail($id){
  $data['product'] = $this->Product_model->view_by($id);
  $this->load->view('pages/detail_prod',$data);

}

public function ubah($id){
     $this->load->library('session');
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Product_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Product_model->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
       redirect('pages/product');
        
      } else {
 

      }
    }
    
    $data['product'] = $this->Product_model->view_by($id);

    $this->load->view('pages/edit_prod', $data);
  }

  public function hapus(){
    $id = $this->input->post('id_hapus');
   if($this->input->post('submit')){

    if (isset($id)) {
       $this->Product_model->delete($id);
          
          redirect('pages/product');
    }
   
     // Panggil fungsi delete() yang ada di SiswaModel.php
} 
  $this->load->view('pages/product');

}

}
