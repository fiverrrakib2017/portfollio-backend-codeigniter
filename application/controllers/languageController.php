<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class languageController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session'); 
        if (!$this->session->userdata('username')) {
            redirect(base_url('login')); // Redirect to login page if user is not logged in
        }
    }
    public function index(){
        $data['title'] = 'Portfollio Admin Panel';
		$data['css'] = $this->load->view('admin/include/Css/css', '', TRUE);
		$data['js'] = $this->load->view('admin/include/Js/js', '', TRUE);
		$data['sidebar'] = $this->load->view('admin/include/Menu/menu', '', TRUE);
        $data['header'] = $this->load->view('admin/include/Header/header', '', TRUE);
		$data['footer'] = $this->load->view('admin/include/Footer/footer', '', TRUE);
        $sql = "SELECT * FROM language ";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Language', $data);
       
    }
    public function get_data(){
        if (isset($_GET['get__data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM `language` WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function add_language(){
        if (isset($_POST['add_data'])) {

            $item=$_POST['title'];
            $percentage=$_POST['percentage'];
            $data = array(
                'item' => $item,
                'percentage' => $percentage,
            );
            /* Insert The  data*/
            $this->db->insert('language', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function update_data(){
        if (isset($_POST['update_data'])) {
            
            $id=$_POST['update_id'];
            $item=$_POST['update_title'];
            $percentage=$_POST['update_percentage'];

             /* update language The  data*/
            $this->db->query("UPDATE `language` SET `item`='$item',`percentage`='$percentage' WHERE id='$id' "); 
            echo 1;
        }
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
              /* GET the id and delete this*/
            $id= $_POST['id'];
            $this->db->delete('language', array('id' => $id));
            echo 1;
        }
    }

}