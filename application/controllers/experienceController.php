<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class experienceController extends CI_Controller{
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
        $sql = "SELECT * FROM experience ";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Experience', $data);
       
    }
    public function get_experience(){
        if (isset($_GET['get_experience_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM experience WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function add_experience(){
        if (isset($_POST['add_data'])) {

            $title=$_POST['title'];
            $description=$_POST['description'];
            $sdate=$_POST['sdate'];
            $edate=$_POST['edate'];
            $status=$_POST['status'];
            $data = array(
                'title' => $title,
                'description' => $description,
                'start_date' => $sdate,
                'end_date' => $edate,
                'status' => $status,
            );
            /* Insert The data experience table Database*/
            $this->db->insert('experience', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function update_experience(){
        if (isset($_POST['update_data'])) {
            
            $id=$_POST['update_experience_id'];
            $title=$_POST['update_title'];
            $description=$_POST['update_description'];
            $sdate=$_POST['update_sdate'];
            $edate=$_POST['update_edate'];
            $status=$_POST['update_status'];


            $this->db->query("UPDATE `experience` SET `title`='$title',`description`='$description',`start_date`='$sdate',`end_date`='$edate',`status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }
    public function delete_experience(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('experience', array('id' => $id));
            echo 1;
        }
    }

}