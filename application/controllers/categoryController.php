<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryController extends CI_Controller{
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
        $sql = "SELECT category.id, template.template_name,category.name,category.status FROM category JOIN template ON category.template_id = template.id";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Category', $data);
       
    }
    public function get_category(){
        if (isset($_GET['get_category_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM category WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function add_category(){
        if (isset($_POST['add_data'])) {

            $template_id=$_POST['template_id'];
            $name=$_POST['category_name'];
            $status=$_POST['status'];
            $data = array(
                'template_id' => $template_id,
                'name' => $name,
                'status' => $status,
            );
            /* Insert The data  Database*/
            $this->db->insert('category', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function update_category(){
        if (isset($_POST['update_data'])) {
            
            $template_id=$_POST['update_template_id'];
            $id=$_POST['update_category_id'];
            $name=$_POST['update_category'];
            $status=$_POST['update_status'];


            $this->db->query("UPDATE `category` SET `template_id`='$template_id',`name`='$name',`status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }
    public function delete_category(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('category', array('id' => $id));
            echo 1;
        }
    }

}