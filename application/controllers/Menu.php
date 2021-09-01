<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_kasir');
    }

    public function barangTerlaris()
    {
        check_supervisor();
        $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();


        $data['trans'] = $this->db->get('tbl_trans_jual')->result_array();
        $data['judul'] = "Barang Terlaris";

        if ($this->input->post('barangTerlaris')) {
            $data['barangTerlaris'] = $this->Mod_supervisor->getBarangTerlaris();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('supervisor/rangkuman/barangTerlarisV', $data);
        $this->load->view('templates/footer');
    }

    public function waktuTerpadat()
    {
        $this->db->select('waktu_trans,total_qty');
        $dataProdukChart = $this->db->get("tbl_jual_detail")->result();
        foreach ($dataProdukChart as $k => $v) {
            $arrProd[] = ['label' => date('h M y', $v->waktu_trans), 'y' => $v->total_qty];
        }
        if ($arrProd != '') {
            $data['chart'] = $arrProd;
        } else {
            $data['chart'] = '';
        }

        $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Waktu Terpadat";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('supervisor/rangkuman/waktuV');
        $this->load->view('templates/footer');
    }

    public function listPemesanan()
    {
        $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "List Pemesanan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/rangkuman/listPemesananV', $data);
        $this->load->view('templates/footer');
    }

    public function wishlist()
    {
        $data['wish'] = $this->Mod_kasir->getWish();
        $data['nama'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Wishlist";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('supervisor/rangkuman/wishlistV', $data);
        $this->load->view('templates/footer');
    }
}
