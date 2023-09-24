<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

         /* GET the data from database table and pass the view File */
        $data['home'] =$this->db->query("SELECT * FROM `home` LIMIT 1")->result(); // Fetch the result
        $data['about'] =$this->db->query("SELECT * FROM `about` LIMIT 1")->result(); // Fetch the result
        $data['section1'] =$this->db->query("SELECT * FROM `table1` ")->result(); // Fetch the result
        $data['section2'] =$this->db->query("SELECT * FROM `table2` ")->result(); // Fetch the result
        $data['section3'] =$this->db->query("SELECT * FROM `table3` ")->result(); // Fetch the result
        $data['design_skill'] =$this->db->query("SELECT * FROM `design_skill` ")->result(); // Fetch the result
        $data['language'] =$this->db->query("SELECT * FROM `language` ")->result(); // Fetch the result
        $data['testimonial'] =$this->db->query("SELECT * FROM `testimonial` WHERE status=1 ")->result(); // Fetch the result
        $data['services'] =$this->db->query("SELECT * FROM `services` WHERE status=1 ")->result(); // Fetch the result
        $data['education'] =$this->db->query("SELECT * FROM `education` WHERE status=1 ")->result(); // Fetch the result
        $data['experience'] =$this->db->query("SELECT * FROM `experience` WHERE status=1 ")->result(); // Fetch the result

        /* Pass the data view File */
        $this->load->view('Frontend/Portfollio-colorful', $data);
    }
}