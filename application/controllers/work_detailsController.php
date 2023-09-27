<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class work_detailsController extends CI_Controller{
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

        $sql = "SELECT work_details.id, works.title , category.name, work_details.project_details, work_details.project_overview, work_details.client_name, work_details.project_value,work_details.location,work_details.designer,work_details.image1,work_details.image2,work_details.image3,work_details.status
        FROM work_details 
        JOIN works ON work_details.work_id=works.id
        JOIN category  ON works.category_id = category.id";

        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Work_details', $data);
    }
    public function add_data(){
       if (isset($_POST['add_data'])) {
            // Collect data from the AJAX request
            $work_id = $_POST['work_id'];
            $client_name = $_POST['client_name'];
            $project_value = $_POST['project_value'];
            $location = $_POST['add_location'];
            $designer = $_POST['designer'];
            $project_details = $_POST['project_details'];
            $project_overview = $_POST['project_overview'];

            // Handle file uploads
            $image1 = $_FILES['image1']['name'];
            $image2 = $_FILES['image2']['name'];
            $image3 = $_FILES['image3']['name'];

            $extension_for_image_one=pathinfo($image1,PATHINFO_EXTENSION);
            $extension_for_image_two=pathinfo($image2,PATHINFO_EXTENSION);
            $extension_for_image_three=pathinfo($image3,PATHINFO_EXTENSION);

            $new_name_image1="1".rand().".".$extension_for_image_one;
            $new_name_image2="2".rand().".".$extension_for_image_two;
            $new_name_image3="3".rand().".".$extension_for_image_three;


            $path1="image/".$new_name_image1;
            $path2="image/".$new_name_image2;
            $path3="image/".$new_name_image3;



            move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
            move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
            move_uploaded_file($_FILES['image3']['tmp_name'],$path3);




            // Move uploaded files to a desired location
            move_uploaded_file($_FILES['image1']['tmp_name'], 'image/' . $image1);
            move_uploaded_file($_FILES['image2']['tmp_name'], 'image/' . $image2);
            move_uploaded_file($_FILES['image3']['tmp_name'], 'image/' . $image3);
            

            $data = array(
                'work_id' => $work_id,
                'project_details' => $project_details,
                'project_overview' => $project_overview,
                'client_name' => $client_name,
                'project_value' => $project_value,
                'location' => $location,
                'designer' => $designer,
                'image1' => $path1,
                'image2' => $path2,
                'image3' => $path3,
                'date' => date('Y-m-d'),
                'status' =>1,
            );

            /* Insert The data */
            $this->db->insert('work_details', $data);
            //insert successfully; 
            echo 1;

       } 
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('work_details', array('id' => $id));
            echo 1;
        }
    }
    public function get_data(){
        if (isset($_GET['get_work_details_data'])) {
            $id= $_GET['id'];
            $query =$this->db->query("SELECT * FROM `work_details` WHERE id='$id'");
            echo json_encode($query->result());
        }
    }
}