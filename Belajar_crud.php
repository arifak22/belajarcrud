<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_crud extends CI_Controller {
	public function index()
	{
        $data= $this->mod->GetTable('mahasiswa');
		$this->load->view('viewcrud', array('data'=>$data));
	}
	public function insert()
	{
		//jika sudah sumbit, maka proses insert akan diproses
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$fakultas = $this->input->post('fakultas');
			$strata = $this->input->post('strata');
			$no_hp = $this->input->post('no_hp');
			$data = array('NIM'=>$nim, 'Nama'=>$nama, 'Fakultas'=>$fakultas,'Strata'=>$strata,'No_hp'=>$no_hp); //data yang akan di insert
			$this->mod->InsertData('mahasiswa', $data); //memasukan data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}
	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$fakultas = $this->input->post('fakultas');
			$strata = $this->input->post('strata');
			$no_hp = $this->input->post('no_hp');
			$data = array('NIM'=>$nim, 'Nama'=>$nama, 'Fakultas'=>$fakultas,'Strata'=>$strata,'No_hp'=>$no_hp); //data yang akan di update
			$this->mod->UpdateData('mahasiswa', $data,'NIM',$nim); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //mengalihkan ke tampbali
		}else{
			$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('mahasiswa','NIM',$id)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('r'=>$data)); //menampilkan views updatecrud
		}
	}
	public function delete(){
        $id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('mahasiswa','NIM',$id); //menghapus data
        redirect('Belajar_crud'); //mengalihkan ke tampbali
    }
}
