<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Category_model');
  }
  // Load Product ke controller ini
  public function index() {
    $data['product_category'] = $this->Category_model->viewcategory();
    $this->load->view('pages/category', $data);
  }

  public function tambah() {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->Category_model->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Category_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        $this->session->set_flashdata('res', 'success|fa-check|Berhasil|Data kategori produk telah ditambahkan');
      } else {
        $this->session->set_flashdata('res', 'danger|fa-times|Gagal|Data kategori produk gagal ditambahkan');
      }
        redirect('pages/category');
    }
    $this->load->view('pages/category');
  }

  public function ubah($id) {
    $this->load->library('session');
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->Category_model->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Category_model->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
        $this->session->set_flashdata('res', 'success|fa-check|Berhasil|Data kategori produk telah diubah');
      } else {
        $this->session->set_flashdata('res', 'danger|fa-times|Gagal|Data kategori produk gagal diubah');
      }
      redirect('pages/category');
    }
    $data['product_category'] = $this->Category_model->view_by($id);
    $this->load->view('pages/edit_cat', $data);
  }
  
  public function hapus() {
    $id = $this->input->post('id_hapus');
    if ($this->input->post('submit')) {
      if (isset($id)) {
        $this->Category_model->delete($id);
        $this->session->set_flashdata('res', 'success|fa-check|Berhasil|Data kategori produk telah dihapus');
      } else {
        $this->session->set_flashdata('res', 'danger|fa-times|Gagal|Data kategori produk gagal dihapus');
      }
      redirect('pages/category');
      // Panggil fungsi delete() yang ada di SiswaModel.php
      
    }
    $this->load->view('pages/category');
  }

  public function ajax_edit(){
    // if($this->session->userdata('id_user')){
      $id   = $this->input->post('id');
      $data = $this->Category_model->view_by($id);

      echo json_encode($data, JSON_PRETTY_PRINT);
    // } else {
    //  redirect(base_url('auth/login'));
    // }
  }

  public function ajax_del(){
    // if($this->session->userdata('id_user')){
      $id   = $this->input->post('id');
      $data = $this->Category_model->checkdel($id);

      echo json_encode($data, JSON_PRETTY_PRINT);
    // } else {
    //  redirect(base_url('auth/login'));
    // }
  }
}

