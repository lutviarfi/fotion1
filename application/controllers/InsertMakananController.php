<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertMakananController extends CI_Controller {

  public function __construct() {
		parent::__construct();
		$this->load->model('ModelInsertMakanan');

	}

	public function index()
	{
	 $this->load->view('InsertMakanan');
	}

  public function InsetData(){
  		$kode = $this->input->post('idmakanan');
  		$nama = $this->input->post('nama');
  		$expire = $this->input->post('expire');
  		$halal = $this->input->post('halal');
  		$available = $this->input->post('available');
  		$ingredients = $this->input->post('ingredients');
      $lokasi = $this->input->post('lokasi');

  		$data = array(
  		'idmakanan'=>$kode,
  		'nama' => $nama,
  		'expire' => $expire,
  		'halal' => $halal,
  		'available' => $available,
  		'ingredients' => $ingredients,
      'lokasi' => $lokasi
  		);

  		$result = $this->CRUDModel->InsertUsername($data);

  		$data = NULL;
  		if($result){

  			redirect('CRUD');
  		}else{

  			$nama = $this->session->nama;
  			$data['nama'] = $nama;
  			$data['result'] = "Gagal";
  			$this->load->view('InsertMakanan',$data);
  		}
  	}

}
