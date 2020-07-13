<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function viewproduct(){
    return $this->db->get('product')->result();
  }
  public function viewcategory(){
    return $this->db->get('product_category')->result(); 
  }
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('product')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('barcode', 'barcode', 'required');
    
    $this->form_validation->set_rules('name', 'name', 'required|max_length[50]');
    $this->form_validation->set_rules('description', 'description', 'required');
    $this->form_validation->set_rules('buyprice', 'buyprice', 'required|numeric');
    $this->form_validation->set_rules('sellprice', 'sellprice', 'required|numeric');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $id=uniqid();
    $data = array(
      "id" => $id,
      "barcode" => $this->input->post('barcode'),
      "name" => $this->input->post('name'),
      "picture" => $this->_uploadImage(),
      "description" => $this->input->post('description'),
      "buyprice" => $this->input->post('buyprice'),
      "sellprice" => $this->input->post('sellprice'),
      "timecreated" => date('Y-m-d H:i:s'),
      "timemodified" => date('Y-m-d H:i:s')
    );
    $data2 = array();
    $selcat = $this->input->post('select');
    foreach($selcat AS $key => $val){
      $data2[] = array(
        'id'         =>'',
        'productid'  => $id,
        'categoryid' => $_POST['select'][$key]
      );
    }
    /*
    $data2 = array(
      "id"=>"",
      "productid"=> $id,
      "categoryid"=> $this->input->post('select')
    );
    */
    $this->db->insert_batch('product_detail',$data2);
    $this->db->insert('product', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($id){
      $gambar ="";

 if (!empty($_FILES["image"]["name"])) {
   $this->_deleteImage($id);
        $gambar = $this->_uploadImage();
    } else {
        $gambar = $this->input->post('old_image');
    }

    $data = array(
        "barcode" => $this->input->post('barcode'),
        "name" => $this->input->post('name'),
        "picture" => $gambar,
        "description" => $this->input->post('description'),
        "buyprice" => $this->input->post('buyprice'),
        "sellprice" => $this->input->post('sellprice'),
        "timemodified" =>date('Y-m-d H:i:s')    );
    
    $this->db->where('id', $id);
    $this->db->update('product', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id){
   $this->_deleteImage($id);
    $this->db->where('id', $id);
    $this->db->delete('product'); // Untuk mengeksekusi perintah delete data
  }

  private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = uniqid();
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

   private function _deleteImage($id)
    {
        $product = $this->view_by($id);
        if ($product->picture != "default.jpg") {
            $filename = explode(".", $product->picture)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }


}