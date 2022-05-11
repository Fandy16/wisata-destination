<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_event extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	// DATA DAFTAR USER
	public function lihatDaftarUser()
	{
		$this->load->database();
		$sql = "SELECT ID_MUSER, NIPP, NAMA, NOMOR_HP, NMUNIT, [LEVEL], AKTIF FROM AGENDA_MUSER ORDER BY NAMA ASC";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// SIMPAN GEOFENSING
	// public function simpanGeoBaru($nama','$tgl_awal,$tgl_akhir,$lokasi,$lati,$longi,$rad, $level)
	// {
	// 	$this->load->database();
	// 	$sql = "INSERT INTO tb_geofencing (id_geo,nama,tgl_awal,tgl_akhir,lokasi,lati,longi,rad,status,crtdt,crtusr,updatedt,updateusr) 
	// 			VALUES ( NULL,'$nama','$tgl_awal','$tgl_akhir','$lokasi','$lati','$longi','$rad',1,NOW(),'$level',NULL,NULL)";
	// 	$query = $this->db->query($sql);

	// 	// var_dump($query->result());
 //  //   	die();
    	
	// 	return $query;
	// }
	
}