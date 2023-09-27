<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class messageController extends CI_Controller{
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
        $sql = "SELECT * FROM `message` ";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Message', $data);
    }
    public function delete_message(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('message', array('id' => $id));
            echo 1;
        }
    }   
    public function add_message(){
        if (isset($_POST['add_data'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone_number= $_POST['phone_number'];
            $comments= $_POST['comments'];

            $data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone_number,
                'message' => $comments,
                'create_date' => date("Y-m-d"),
                'status' => 1,
            );
            /* Insert The data Message table Database*/
            $this->db->insert('message', $data);
            echo 1;
        } 
    }

}



