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
			$this->load->view('konsumen/v_input_konsumen.php');
		}
		function InputProses(){
			$this->load->model('konsumen_model');
			$this->konsumen_model->insert_konsumen();
		}
		function EditKonsumen(){
			$this->load->model('konsumen_model');
			$data['konsumen'] = $this->konsumen_model->getdata_konsumen_byid();
			$this->load->view('konsumen/v_edit_konsumen.php',$data);
		}
		function EditProses(){

		}
		function HapusKonsumen(){
			$this->load->model('konsumen_model');
			$data['konsumen'] = $this->konsumen_model->getdata_konsumen_byid();
			$this->load->view('konsumen/v_hapus_konsumen.php',$data);
		}
		function HapusProses(){
			$this->load->model('konsumen_model');
			$this->konsumen_model->hapus_konsumen();
		}
    }
?>