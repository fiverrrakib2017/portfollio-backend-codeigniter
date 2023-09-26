<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

         /* GET the data from database table and pass the view File */
        $data['home'] =$this->db->query("SELECT * FROM `home` LIMIT 1")->result(); 
        $data['about'] =$this->db->query("SELECT * FROM `about` LIMIT 1")->result(); 
        $data['section1'] =$this->db->query("SELECT * FROM `table1` ")->result(); 
        $data['section2'] =$this->db->query("SELECT * FROM `table2` ")->result(); 
        $data['section3'] =$this->db->query("SELECT * FROM `table3` ")->result(); 
        $data['design_skill'] =$this->db->query("SELECT * FROM `design_skill` ")->result(); 
        $data['language'] =$this->db->query("SELECT * FROM `language` ")->result(); 
        $data['testimonial'] =$this->db->query("SELECT * FROM `testimonial` WHERE status=1 ")->result(); 
        $data['services'] =$this->db->query("SELECT * FROM `services` WHERE status=1 ")->result(); 
        $data['education'] =$this->db->query("SELECT * FROM `education` WHERE status=1 ")->result(); 
        $data['experience'] =$this->db->query("SELECT * FROM `experience` WHERE status=1 ")->result(); 
        $data['category'] =$this->db->query("SELECT * FROM `category` WHERE status=1 ")->result(); 
        $data['works'] =$this->db->query("SELECT * FROM `works` WHERE status=1 ")->result(); 
        $data['blog_post'] =$this->db->query("SELECT * FROM `blog_post` WHERE status=1 ")->result(); 
        $data['contracts'] =$this->db->query("SELECT * FROM `contracts` WHERE status=1 ")->result(); 
        $data['social_icon'] =$this->db->query("SELECT * FROM `social_icon`")->result(); 
        $data['profile'] =$this->db->query("SELECT * FROM `profile` LIMIT 1 ")->result(); 
        
        $_theme_selection = $this->db->query("select id from template where status = '1'")->row()->id;
        /* Pass the data view File */
        $this->load->view('Frontend/' . $_theme_selection . '', $data);
    }
    public function get_works_details($ciid=''){
        $sql = "SELECT work_details.id, works.title , category.name, work_details.project_details, work_details.project_overview, work_details.client_name, work_details.project_value,work_details.location,work_details.designer,work_details.image1,work_details.image2,work_details.image3,work_details.status,work_details.date
        FROM work_details 
        JOIN works ON work_details.work_id=works.id
        JOIN category  ON works.category_id = category.id WHERE work_details.id=$ciid";

        $data['work_details'] =$this->db->query($sql)->result(); 
        $_page_selection = $this->db->query("select id from template where status = '1'")->row()->id;
        /* Pass the data view File */
        $this->load->view('Frontend/Work_details/' . $_page_selection . '', $data);
    }
}