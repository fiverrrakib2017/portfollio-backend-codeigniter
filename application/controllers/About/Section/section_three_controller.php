<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class section_three_controller extends CI_Controller{
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
        $sql = "SELECT * FROM `table3`";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/About/Section_three', $data);
       
    }
    public function get_data(){
        if (isset($_GET['get_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM table3 WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('table3', array('id' => $id));
            echo 1;
        }
    }

    public function add_data(){
        if (isset($_POST['add_data'])) {

            $name=$_POST['item'];
            
            $data = array(
                'item' => $name,
            );
            /* Insert The data */
            $this->db->insert('table3', $data);
            //insert successfully; 
            echo 1;
            exit;
         
        }

    }

    public function update_data(){
        if (isset($_POST['update_data'])) {
            $id=$_POST['update_id'];
            $item=$_POST['update_item'];

           
            $this->db->query("UPDATE `table3` SET `item`='$item' WHERE id='$id' "); 
            echo 1;
        }
    }




}


?>