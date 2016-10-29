<?php
	class DataMaster extends CI_Controller{
		function _construct(){
			parent::_construct();
			$this->load->database();
		}
		function Index(){
			$this->load->model('datamaster_model');
			$this->load->view('data_master/v_tbl_servis.php');
		}

		function DataServis(){
			$this->load->model('datamaster_model');
			$this->load->view('data_master/v_tbl_servis.php');
		}

		function DataKtgrServis(){
			$this->load->model('datamaster_model');
			$this->load->view('data_master/v_tbl_ktgr_servis.php');
		}

		function DataKtgrProyek(){
			$this->load->model('datamaster_model');
			$this->load->view('data_master/v_tbl_ktgr_proyek.php');
		}

		function test(){
			$this->load->view('data_master/testmodal.php');
		}
	}
?>