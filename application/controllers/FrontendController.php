<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){


        $data['home'] =$this->db->query("SELECT * FROM `home` LIMIT 1")->result(); // Fetch the result

        // $sql = "SELECT * FROM `table3`";
        // $query = $this->db->query($sql);
        // $data['data'] = $query->result(); // Fetch the result


        $this->load->view('Frontend/Portfollio-colorful', $data);
    }
}