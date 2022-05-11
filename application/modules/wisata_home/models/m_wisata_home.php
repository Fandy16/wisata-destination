<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');

class m_wisata_home extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	// DAFTAR SLIDE UTAMA
	public function daftarSlideUtama()
	{
		$this->load->database();
		$sql = "SELECT id_slide, nm_slide, ket_slide, gbr_slide FROM tb_slide_utama";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// TENTANG JEMBER
	public function tentangJember()
	{
		$this->load->database();
		$sql = "SELECT A.id_jbr, A.nm_jbr, B.nm_gbr_jbr, A.ket_jbr 
				FROM tbtentang_jbr A JOIN tbgbr_ttg_jember B ON A.id_jbr = B.id_jbr WHERE B.id_gbr_jbr NOT IN (4)";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// TENTANG JEMBER DETAIL
	public function tentangJemberDetail($id_jbr)
	{
		$this->load->database();
		$sql = "SELECT A.id_jbr, A.nm_jbr, B.nm_gbr_jbr, A.ket_jbr 
				FROM tbtentang_jbr A JOIN tbgbr_ttg_jember B ON A.id_jbr = B.id_jbr WHERE B.id_gbr_jbr NOT IN (4)
				AND A.id_jbr = '$id_jbr'";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// 10 DAFTAR NAMA WISATA SLIDE
	public function lihat10DaftarWisataSlide()
	{
		$this->load->database();
		$sql = "SELECT a.id_gbr, b.nm_wisata, a.nm_gbr FROM tbgbr_wisata a
				JOIN mwisata b ON a.kd_wisata = b.kd_wisata LIMIT 10";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// DATA DAFTAR WISATA DETAIL ALL
	public function lihatDetailTempatWisataAll()
	{
		$this->load->database();
		$sql = "SELECT a.id_gbr, b.nm_wisata, a.nm_gbr, d.almt_wisata, c.ket_wisata
				FROM tbgbr_wisata a JOIN mwisata b ON a.kd_wisata = b.kd_wisata
				JOIN tbdet_wisata c ON a.kd_wisata = c.kd_wisata
				JOIN tbalmt_wisata d ON a.kd_wisata = d.kd_wisata
				ORDER BY nm_wisata DESC LIMIT 10";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// DATA DAFTAR WISATA DETAIL
	public function lihatDetailTempatWisata($id_gbr)
	{
		$this->load->database();
		$sql = "SELECT a.id_gbr, b.nm_wisata, a.nm_gbr, d.almt_wisata, c.ket_wisata
				FROM tbgbr_wisata a JOIN mwisata b ON a.kd_wisata = b.kd_wisata
				JOIN tbdet_wisata c ON a.kd_wisata = c.kd_wisata
				JOIN tbalmt_wisata d ON a.kd_wisata = d.kd_wisata WHERE a.id_gbr = '$id_gbr'
				ORDER BY nm_wisata DESC LIMIT 10";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// DATA DAFTAR DAFTAR GALERI
	public function lihatDaftarGaleri()
	{
		$this->load->database();
		$sql = "SELECT DISTINCT a.kd_wisata, b.id_gbr, a.nm_wisata, b.nm_gbr FROM mwisata a
				JOIN tbgbr_wisata b ON a.kd_wisata = b.kd_wisata
				WHERE a.nm_wisata NOT LIKE 'ai%' AND  a.nm_wisata NOT LIKE 'ka%' AND  a.nm_wisata NOT LIKE 'gu%' LIMIT 15";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// DATA DAFTAR GALERI
	public function detailDaftarGaleri($kd_wisata, $id_gbr)
	{
		$this->load->database();
		$sql = "SELECT DISTINCT a.kd_wisata, b.id_gbr, a.nm_wisata, b.nm_gbr, c.ket_wisata FROM mwisata a
				JOIN tbgbr_wisata b ON a.kd_wisata = b.kd_wisata JOIN tbdet_wisata c ON a.kd_wisata = c.kd_wisata
				WHERE a.kd_wisata = '$kd_wisata' AND b.id_gbr = '$id_gbr';";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

	// DATA DAFTAR KULINER DETAIL ALL
	public function lihatDetailTempatKulinerAll()
	{
		$this->load->database();
		$sql = "SELECT A.id_gbr_kulin, B.nm_kuliner, A.nm_gbr_kulin, C.ket_kuliner
				FROM tbgbr_kuliner A JOIN mkuliner B ON A.kd_kuliner = B.kd_kuliner
				JOIN tbdet_kuliner C ON A.kd_kuliner = C.kd_kuliner
				ORDER BY B.nm_kuliner LIMIT 10";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}

		// DATA DAFTAR KULINER DETAIL
	public function lihatDetailTempatKuliner($id_gbr_kulin)
	{
		$this->load->database();
		$sql = "SELECT A.id_gbr_kulin, B.nm_kuliner, A.nm_gbr_kulin, C.ket_kuliner
				FROM tbgbr_kuliner A JOIN mkuliner B ON A.kd_kuliner = B.kd_kuliner
				JOIN tbdet_kuliner C ON A.kd_kuliner = C.kd_kuliner WHERE A.id_gbr_kulin = '$id_gbr_kulin'
				ORDER BY B.nm_kuliner LIMIT 10";
		$query = $this->db->query($sql);

		// var_dump($query->result());
  //   	die();
    	
		return $query;
	}
	
}