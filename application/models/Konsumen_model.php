<?php
class Konsumen_model extends CI_Model {

        public function __construct()
        {
        	$this->load->database();
        }

        public function get_idkonsumen(){
        	$q = $this->db->query("select count(id_konsumen) as jml_id_konsumen from tb_konsumen");
        	$r = $q->row_array();
        	$id = $r['jml_id_konsumen'];
        	$id = $id + 1;
        	if($id <10){
        		$id_number = "00".$id;
        	} else if($id < 100){
        		$id_number = "0".$id;
        	} else if($id >= 100){
        		$id_number = $id;
        	}
        	$id_konsumen = "TCSKN".$id_number;
        	return $id_konsumen;
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

        public function update_konsumen(){
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
                $this->db->where('id_konsumen',$id_konsumen);
                $this->db->update('tb_konsumen',$data);
        }

        public function hapus_konsumen(){
        	$id_konsumen = $this->input->post('id');
        	$q = $this->db->delete('tb_konsumen',array('id_konsumen' => $id_konsumen,) );
        }
}