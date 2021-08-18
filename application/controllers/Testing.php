<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
    }

    // PEMBUKUAN--------------------------------------------------
    public function j_penjualan()
    {
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/pembukuan/j_penjualanV');
        $this->load->view('templates/footer');
        
    }
    
    public function j_pembelian()
    {
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/pembukuan/j_pembelianV');
        $this->load->view('templates/footer');
       

    }

    public function j_retur()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/pembukuan/j_returV');
        $this->load->view('templates/footer');
    }

    // PROMO------------------------------------------------------

    public function promo()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/promo/promoV');
        $this->load->view('templates/footer');
    }

    public function tenPromo()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/promo/tenPromoV');
        $this->load->view('templates/footer');
    }

    // RANGKUMAN BISNIS----------------------------------------------
    public function barangTerlaris()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/rangkuman/barangTerlarisV');
        $this->load->view('templates/footer');
    }

    public function pencarianPelanggan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/rangkuman/pencarianPelangganV');
        $this->load->view('templates/footer');
    }
}
