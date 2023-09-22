<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class section_two_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Portfollio Admin Panel';
		$data['css'] = $this->load->view('admin/include/Css/css', '', TRUE);
		$data['js'] = $this->load->view('admin/include/Js/js', '', TRUE);
		$data['sidebar'] = $this->load->view('admin/include/Menu/menu', '', TRUE);
        $data['header'] = $this->load->view('admin/include/Header/header', '', TRUE);
		$data['footer'] = $this->load->view('admin/include/Footer/footer', '', TRUE);
        $sql = "SELECT * FROM `table2`";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/About/Section_two', $data);
       
    }
    public function update_data(){
        if (isset($_POST['update_data'])) {
            $id=$_POST['update_id'];
            $title=$_POST['update_title'];
            $description=$_POST['update_description'];

           
            $this->db->query("UPDATE `table2` SET `title`='$title',`description`='$description' WHERE id='$id' "); 
            echo 1;
        }
    }


}