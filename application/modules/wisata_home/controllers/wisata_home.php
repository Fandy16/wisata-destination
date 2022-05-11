<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Wisata_home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_wisata_home');
		// $this->load->model(array(''));
		$this->load->database();
		$this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email', 'encryption'));
		$this->load->helper(array('url', 'form', 'text', 'html', 'security', 'file', 'directory', 'number', 'date', 'download'));
	}

	private function _render($view, $data)
	{

		$this->load->view('head', $data);
	    $this->load->view($view);
	}

	public function index()
	{

	  	$data['']='';

	  	$data['daftarSlideUtama'] = $this->m_wisata_home->daftarSlideUtama();
	  	$data['daftarWisataSlide'] = $this->m_wisata_home->lihat10DaftarWisataSlide();
	  	$data['lihatDaftarGaleri'] = $this->m_wisata_home->lihatDaftarGaleri();
	  	$data['daftarWisataDetail'] = $this->m_wisata_home->lihatDetailTempatWisataAll();
	  	$data['daftarTempatKuliner'] = $this->m_wisata_home->lihatDetailTempatKulinerAll();
	  	$data['aboutMe'] = $this->m_wisata_home->tentangJember();

	  	$this->_render('v_wisata_home', $data);

	}
 
    public function lihatDetailGaleri(){

	    $uri =& load_class('URI', 'core');
	    $this->load->library('session');
	    $this->load->library('encryption');
	    $this->load->model('m_wisata_home');

	    $kd_wisata = $this->input->post('kode_wisata');
	    $id_gbr = $this->input->post('kode_gambar');

	    $query = $this->m_wisata_home->detailDaftarGaleri($kd_wisata, $id_gbr);

	    // var_dump($query->result());
	    // die();

	    $gbr_galeri = '';
	    $nm_galeri = '';
	    $detail_galeri = '';
	    foreach ($query->result() as $kolom) {
	      $gbr_galeri = $kolom->nm_gbr;
	      $nm_galeri = $kolom->nm_wisata;
	      $detail_galeri = $kolom->ket_wisata;
	    

		    ?>
		    	
		    	<div class="carousel-inner" role="listbox" id="detail_glr" name="detail_glr">

			        <div class="row">
	                    <div class="section-title text-center">
	                        <!-- <h3>Detail Galeri</h3> -->
	                    </div>
	                </div>
	                <div class="row">
	                    <input type="hidden" name="kode_wisata" id="kode_wisata">
	                    <input type="hidden" name="kode_gambar" id="kode_gambar">
	                    <div class="col-xs-12">
	                        <img width="100%" height="300px;" style="text-align: center; padding-left: 5px; padding-right: 5px;" src="<?php echo base_url('assets/wisata_photo/'.$gbr_galeri);?>" class="img-responsive" alt="..">
	                    </div>
	                    <div class="col-xs-12">
	                    	<center><h3><b><?php echo $nm_galeri ?></b></h3></center><br>
	                    </div>
	                    <div class="col-xs-12">
	                    	<p style="text-align: justify; font-size: 15px; word-spacing: 6px; line-height: 20px; padding-left: 15px; padding-right: 15px;"> <?php echo $detail_galeri ?> </p>
	                    </div>

	                    
	                </div>
		    	</div>

		    <?php

		}
	      
  	}

  	public function lihatDetailTentangJbr(){

	    $uri =& load_class('URI', 'core');
	    $this->load->library('session');
	    $this->load->library('encryption');
	    $this->load->model('m_wisata_home');

	    $id_jbr = $this->input->post('id_jbr');

	    $query = $this->m_wisata_home->tentangJemberDetail($id_jbr);

	    // var_dump($query->result());
	    // die();

	    $nm_gbr = '';
	    $nm_jbr = '';
	    $detail_jbr = '';
	    foreach ($query->result() as $kolom) {
	      $nm_gbr = $kolom->nm_gbr_jbr;
	      $nm_jbr = $kolom->nm_jbr;
	      $detail_jbr = $kolom->ket_jbr;
	    

		    ?>
		    	
		    	<div class="carousel-inner" role="listbox" id="detail_jbr" name="detail_jbr">

			        <div class="row">
	                    <div class="section-title text-center">
	                        <!-- <h3>Detail Galeri</h3> -->
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-xs-12">
	                        <img width="100%" height="300px;" style="text-align: center; padding-left: 5px; padding-right: 5px;" src="<?php echo base_url('assets/wisata_slide_home/profile-jember/'.$nm_gbr);?>" class="img-responsive" alt="..">
	                    </div>
	                    <div class="col-xs-12">
	                    	<center><h3><b><?php echo $nm_jbr ?></b></h3></center><br>
	                    </div>
	                    <div class="col-xs-12">
	                    	<p style="text-align: justify; font-size: 15px; word-spacing: 6px; line-height: 20px; padding-left: 15px; padding-right: 15px;"> <?php echo $detail_jbr ?> </p>
	                    </div>

	                    
	                </div>
		    	</div>

		    <?php

		}
	      
  	}

  	public function lihatDetailWisataJember(){

	    $uri =& load_class('URI', 'core');
	    $this->load->library('session');
	    $this->load->library('encryption');
	    $this->load->model('m_wisata_home');

	    $id_jbr = $this->input->post('id_gbr');

	    $query = $this->m_wisata_home->lihatDetailTempatWisata($id_jbr);

	    // var_dump($query->result());
	    // die();

	    $nm_gbr_wisata = '';
	    $nm_wisata = '';
	    $alamat_wisata = '';
	    $detail_wisata = '';
	    foreach ($query->result() as $kolom) {
	      $nm_gbr_wisata = $kolom->nm_gbr;
	      $nm_wisata = $kolom->nm_wisata;
	      $alamat_wisata = $kolom->almt_wisata;
	      $detail_wisata = $kolom->ket_wisata;
	    

		    ?>
		    	
		    	<div class="carousel-inner" role="listbox" id="detail_wisata_jbr" name="detail_wisata_jbr">

			        <div class="row">
	                    <div class="section-title text-center">
	                        <!-- <h3>Detail Galeri</h3> -->
	                    </div>
	                </div>
	                <div class="row">
	                    <input type="hidden" name="kode_gambar" id="kode_gambar">
	                    <div class="col-xs-12">
	                        <img width="100%" height="300px;" style="text-align: center; padding-left: 5px; padding-right: 5px;" src="<?php echo base_url('assets/wisata_photo/'.$nm_gbr_wisata);?>" class="img-responsive" alt="..">
	                    </div>
	                    <div class="col-xs-12">
	                    	<center><h3><b><?php echo $nm_wisata ?></b></h3></center><br>
	                    	<h5 style="padding-left: 15px; padding-right: 15px; margin-top: 10px;"><b><?php echo $alamat_wisata ?></b></h5>
	                    </div>
	                    <div class="col-xs-12">
	                    	<p style="text-align: justify; font-size: 15px; word-spacing: 6px; line-height: 20px; padding-left: 15px; padding-right: 15px;"> <?php echo $detail_wisata ?> </p>
	                    </div>

	                    
	                </div>
		    	</div>

		    <?php

		}
	      
  	}

  	public function lihatDetailKuliner(){

	    $uri =& load_class('URI', 'core');
	    $this->load->library('session');
	    $this->load->library('encryption');
	    $this->load->model('m_wisata_home');

	    $id_gbr_kulin = $this->input->post('id_gbr_kulin');

	    $query = $this->m_wisata_home->lihatDetailTempatKuliner($id_gbr_kulin);

	    // var_dump($query->result());
	    // die();

	    $nm_gbr_kuliner = '';
	    $nm_kuliner_jbr = '';
	    $detail_kuliner_jbr = '';
	    foreach ($query->result() as $kolom) {
	      $nm_gbr_kuliner = $kolom->nm_gbr_kulin;
	      $nm_kuliner_jbr = $kolom->nm_kuliner;
	      $detail_kuliner_jbr = $kolom->ket_kuliner;
	    

		    ?>
		    	
		    	<div class="carousel-inner" role="listbox" id="detail_kuliner_jbr" name="detail_kuliner_jbr">

			        <div class="row">
	                    <div class="section-title text-center">
	                        <!-- <h3>Detail Galeri</h3> -->
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-xs-12">
	                        <img width="100%" height="300px;" style="text-align: center; padding-left: 5px; padding-right: 5px;" src="<?php echo base_url('assets/kuliner_photo/'.$nm_gbr_kuliner);?>" class="img-responsive" alt="..">
	                    </div>
	                    <div class="col-xs-12">
	                    	<center><h3><b><?php echo $nm_kuliner_jbr ?></b></h3></center><br>
	                    </div>
	                    <div class="col-xs-12">
	                    	<p style="text-align: justify; font-size: 15px; word-spacing: 6px; line-height: 20px; padding-left: 15px; padding-right: 15px;"> <?php echo $detail_kuliner_jbr ?> </p>
	                    </div>

	                    
	                </div>
		    	</div>

		    <?php

		}
	      
  	}
}