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
	}
?>