<?php
    class Kas extends CI_Controller{
        function _construct(){
			parent::_construct();
		}
        
		function Index(){
			$this->load->model('kas_model');
			$data['kas'] = $this->kas_model->getdata_kas();
			$this->load->view('kas/v_tbl_kas.php',$data);
		}
		function InputKas(){
			$this->load->model('kas_model');
			$data['id_kas'] = $this->kas_model->getid_kas();
			$this->load->view('kas/v_input_kas.php',$data);
		}
		function InputProses(){
			$this->load->model('kas_model');
			$this->kas_model->insert_kas();
			$data['pesan'] = "Data berhasil disimpan !";
			$this->load->view('templates/v_redirect.php',$data);
			header("Refresh:3;url=".base_url()."kas");
		}
		function EditKas(){
			$this->load->model('kas_model');
			$data['kas'] = $this->kas_model->getdata_kas_byid();
			$this->load->view('kas/v_edit_kas.php',$data);
		}
		function EditProses()
		{
			$this->load->model('kas_model');
			$this->kas_model->update_kas();
			$data['pesan'] = "Data berhasil di update !";
			$this->load->view('templates/v_redirect.php',$data);
			header("Refresh:3;url=".base_url()."kas");
		}
		function HapusKas(){
			$this->load->model('kas_model');
			$this->load->view('kas/v_hapus_kas.php');
		}
    }
?>