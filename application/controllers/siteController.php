<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class siteController extends CI_Controller{
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
        $sql = "SELECT * FROM social_icon ";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Social', $data);
       
    }
    public function get_data(){
        if (isset($_GET['get_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM social_icon WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function add_data(){
        if (isset($_POST['add_data'])) {

            $title=$_POST['title'];
            $data = array(
                'name' => $title,
            );
            /* Insert The data education table Database*/
            $this->db->insert('social_icon', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function update_data(){
        if (isset($_POST['update_data'])) {

            $id=$_POST['update_id'];
            $name=$_POST['update_title'];


            $this->db->query("UPDATE `social_icon` SET `name`='$name' WHERE id='$id' "); 
            echo 1;
        }
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('social_icon', array('id' => $id));
            echo 1;
        }
    }

}