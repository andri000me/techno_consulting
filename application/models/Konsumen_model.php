<?php
class Konsumen_model extends CI_Model {

        public function __construct()
        {
        	$this->load->database();
        }

        public function getdata_konsumen(){
        	$q = $this->db->get('tb_konsumen');
			return $q->result_array();
        }

        public function getdata_konsumen_byid(){
        	$id_konsumen = $this->uri->segment(3);
        	$q = $this->db->get_where('tb_konsumen',array('id_konsumen' => $id_konsumen,) );
        	return $q->result_array();
        }
        public function insert_konsumen(){
        	
        	$id_konsumen = $this->input->post('id_konsumen');
        	$nama = $this->input->post('nama');
        	$no_hp = $this->input->post('no_hp');
        	$alamat = $this->input->post('alamat');
        	$perusahaan = $this->input->post('perusahaan');
        	$tanggal = $this->input->post('tanggal');
        	
        	$data = array(
        		'id_konsumen' => $id_konsumen,
        		'tanggal_konsumen' => $tanggal,
        		'nama' => $nama,
        		'perusahaan' => $perusahaan,
        		'no_hp' => $no_hp,
        		'alamat' => $alamat, 
        	);

        	$this->db->insert('tb_konsumen',$data);

        }

        public function hapus_konsumen(){
        	$id_konsumen = $this->input->post('id');
        	$q = $this->db->delete('tb_konsumen',array('id_konsumen' => $id_konsumen,) );
        }
}