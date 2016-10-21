<?php
    class Home extends CI_Controller{
        function _construct(){
			parent::_construct();
			$this->load->database();
		}
        
		function Index(){
            $this->load->helper('url');
			$this->load->view('v_index');
		}

    }
?>