<?php
    class Konsumen extends CI_Controller{
        function _construct(){
			parent::_construct();
			$this->load->database();
		}
        
		function Index(){
			$this->load->view('konsumen/v_tbl_konsumen.php');
		}

		function InputKonsumen(){
			$this->load->view('konsumen/v_input_konsumen.php');
		}

		function EditKonsumen(){
			$this->load->view('konsumen/v_edit_konsumen.php');
		}
		function HapusKonsumen(){
			$this->load->view('konsumen/v_hapus_konsumen.php');
		}
    }
?>