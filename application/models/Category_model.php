<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function viewcategory() {
    return $this->db->get('product_category')->result();
  }
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($id) {
    return $this->db->get_where('product_category', ['id' => $id])->result();
  }
  public function checkdel($id) {
    return $this->db->get_where('product_detail', ['categoryid' => $id])->num_rows();
  }
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode) {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if ($mode == "save") $this->form_validation->set_rules('name', 'name', 'required|max_length[50]');
    $this->form_validation->set_rules('description', 'description', 'required');
    if ($this->form_validation->run()) // Jika validasi benar
    return true; // Maka kembalikan hasilnya dengan TRUE
    else
    // Jika ada data yang tidak sesuai validasi
    return false; // Maka kembalikan hasilnya dengan FALSE
    
  }
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save() {
    $data = array("id" => "", "name" => $this->input->post('name'), "picture" => $this->_uploadImage(), "description" => $this->input->post('description'), "timecreated" => date('Y-m-d H:i:s'), "timemodified" => date('Y-m-d H:i:s'));
    $this->db->insert('product_category', $data); // Untuk mengeksekusi perintah insert data
    $status = ($this->db->affected_rows() > 0) ? "success" : "error";
    savelog('useridnya', json_encode(array("action" => "insert", "query" => $this->db->last_query(), "status" => $status)));
  }
  // // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($id) {
    $gambar = "";
    if (!empty($_FILES["image"]["name"])) {
      $gambar = $this->_uploadImage();
      $this->_deleteImage($id);
    }
    else {
      $gambar = $this->input->post('old_image');
    }
    $data = array("name" => $this->input->post('name'), "picture" => $gambar, "description" => $this->input->post('description'), "timemodified" => date('Y-m-d H:i:s'));
    $this->db->where('id', $id);
    $this->db->update('product_category', $data); // Untuk mengeksekusi perintah update data
    $status = ($this->db->affected_rows() > 0) ? "success" : "error";
    savelog('useridnya', json_encode(array("action" => "update", "query" => $this->db->last_query(), "status" => $status)));
  }
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($id) {
    $this->_deleteImage($id);
    $this->db->where('id', $id);
    $this->db->delete('product_category'); // Untuk mengeksekusi perintah delete data
    $status = ($this->db->affected_rows() > 0) ? "success" : "error";
    savelog('useridnya', json_encode(array("action" => "delete", "query" => $this->db->last_query(), "status" => $status)));
  }
  private function _uploadImage() {
    $config['upload_path'] = './upload/category/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['file_name'] = uniqid();
    $config['overwrite'] = true;
    $config['max_size'] = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('image')) {
      return $this->upload->data("file_name");
    }
    return "default.jpg";
  }
  private function _deleteImage($id) {
    $product = $this->view_by($id);
    if ($product->picture != "default.jpg") {
      $filename = explode(".", $product->picture) [0];
      return array_map('unlink', glob(FCPATH . "upload/category/$filename.*"));
    }
  }
}

