<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class educationController extends CI_Controller{
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
        $sql = "SELECT education.id, template.template_name,education.title, education.description, education.start_date,education.end_date,education.status FROM education JOIN template ON education.template_id = template.id";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Education', $data);
       
    }
    public function get_education(){
        if (isset($_GET['get_education_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM education WHERE id='$id'");
           echo json_encode($query->result());
        }
    }
    public function add_education(){
        if (isset($_POST['add_data'])) {

            $template_id=$_POST['template_id'];
            $title=$_POST['title'];
            $description=$_POST['description'];
            $sdate=$_POST['sdate'];
            $edate=$_POST['edate'];
            $status=$_POST['status'];
            $data = array(
                'template_id' => $template_id,
                'title' => $title,
                'description' => $description,
                'start_date' => $sdate,
                'end_date' => $edate,
                'status' => $status,
            );
            /* Insert The data education table Database*/
            $this->db->insert('education', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function update_education(){
        if (isset($_POST['update_data'])) {

            $template_id=$_POST['update_template_id'];
            $id=$_POST['update_education_id'];
            $title=$_POST['update_title'];
            $description=$_POST['update_description'];
            $sdate=$_POST['update_sdate'];
            $edate=$_POST['update_edate'];
            $status=$_POST['update_status'];


            $this->db->query("UPDATE `education` SET `template_id`='$template_id',`title`='$title',`description`='$description',`start_date`='$sdate',`end_date`='$edate',`status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }
    public function delete_education(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('education', array('id' => $id));
            echo 1;
        }
    }

}