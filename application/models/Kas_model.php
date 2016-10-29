<?php
class Kas_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getid_kas(){
		$q = $this->db->query("select count(id_kas) as jml_id_kas from tb_kas");
    $r = $q->row_array();
        $id = $r['jml_id_kas'];
        $id = $id + 1;
        if($id <10){
        	$id_number = "00".$id;
        } else if($id < 100){
        	$id_number = "0".$id;
        } else if($id >= 100){
        	$id_number = $id;
        }
        $id_kas = "TCSTR".$id_number;
        return $id_kas;
	}
	public function getdata_kas(){
    $q = $this->db->get('tb_kas');
	return $q->result_array();
   }
  public function getdata_kas_byid(){
   	$id_kas = $this->uri->segment(3);
   	$q = $this->db->get_where('tb_kas',array('id_kas' => $id_kas,) );
    return $q->result_array();
  }
  public function insert_kas(){

    $id_kas = $this->input->post('id_kas');
    $tanggal = $this->input->post('tanggal');
    $jenis_transaksi = $this->input->post('jenis_transaksi');
    $nominal = $this->input->post('nominal');
    $keterangan = $this->input->post('keterangan');

    $data = array(
      'id_kas' => $id_kas,
      'tanggal_transaksi' => $tanggal, 
      'jenis_transaksi' => $jenis_transaksi, 
      'keterangan_transaksi' => $keterangan, 
      'nominal_transaksi' => $nominal, 
    );
    $this->db->insert('tb_kas',$data);
  }
  public function update_kas(){
    $id_kas = $this->input->post('id_kas');
    $tanggal = $this->input->post('tanggal');
    $jenis_transaksi = $this->input->post('jenis_transaksi');
    $nominal = $this->input->post('nominal');
    $keterangan = $this->input->post('keterangan');
    $data = array(
      'id_kas' => $id_kas,
      'tanggal_transaksi' => $tanggal, 
      'jenis_transaksi' => $jenis_transaksi, 
      'keterangan_transaksi' => $keterangan, 
      'nominal_transaksi' => $nominal, 
    );
    $this->db->where('id_kas',$id_kas);
    $this->db->update('tb_kas',$data);
  }
}