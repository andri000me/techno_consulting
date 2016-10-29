<?php
    class Konsumen extends CI_Controller{
        function _construct(){
			parent::_construct();
		}
        
		function Index(){
			$this->load->model('konsumen_model');
			$data['konsumen'] = $this->konsumen_model->getdata_konsumen();
			$this->load->view('konsumen/v_tbl_konsumen.php',$data);
		}

		function InputKonsumen(){
			$this->load->model('konsumen_model');
			$data['id_konsumen'] = $this->konsumen_model->get_idkonsumen();
			$this->load->view('konsumen/v_input_konsumen.php',$data);
		}
		function InputProses(){
			$this->load->model('konsumen_model');
			$this->konsumen_model->insert_konsumen();
			$data['pesan'] = "Data berhasil disimpan !";
			$this->load->view('templates/v_redirect.php',$data);
			header("Refresh:3;url=".base_url()."konsumen");

		}
		function EditKonsumen(){
			$this->load->model('konsumen_model');
			$data['konsumen'] = $this->konsumen_model->getdata_konsumen_byid();
			$this->load->view('konsumen/v_edit_konsumen.php',$data);
		}
		function EditProses(){
			$this->load->model('konsumen_model');
			$this->konsumen_model->update_konsumen();
			$data['pesan'] = "Data berhasil diupdate !";
			$this->load->view('templates/v_redirect.php',$data);
			header("Refresh:3;url=".base_url()."konsumen");
		}
		function HapusKonsumen(){
			$this->load->model('konsumen_model');
			$data['konsumen'] = $this->konsumen_model->getdata_konsumen_byid();
			$this->load->view('konsumen/v_hapus_konsumen.php',$data);

		}
		function HapusProses(){
			$this->load->model('konsumen_model');
			$this->konsumen_model->hapus_konsumen();
			redirect('konsumen','refresh');
		}

		function test(){
			$data['pesan'] = "Data berhasil disimpan !";
			$this->load->view('templates/v_redirect.php',$data);
		}

    }
?>