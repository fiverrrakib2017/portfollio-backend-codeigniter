
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class contractController extends CI_Controller{
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
        $sql = "SELECT contracts.id, template.template_name, contracts.email_address, contracts.phone_number, contracts.location, contracts.status FROM contracts JOIN template ON contracts.template_id = template.id";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Contract', $data);
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('contracts', array('id' => $id));
            echo 1;
        }
    }
    public function add_contract(){
        if (isset($_POST['add_data'])) {
            
              $template_id=$_POST['template_id'];
             $email=$_POST['email'];
             $phone=$_POST['phone'];
             $location=$_POST['location'];
            $status=$_POST['status'];

            $data = array(
                    'template_id' => $template_id,
                    'email_address' => $email,
                    'phone_number' => $phone,
                    'location' => $location,
                    'status' => $status,
                );
            /* Insert The data contracts table Database*/
            $this->db->insert('contracts', $data);
            //insert successfully; 
            echo 1;
            exit;
        }

    }
    public function get_contract(){
        if (isset($_GET['get_contract_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM contracts WHERE id='$id'");
           echo json_encode($query->result());
        } 
    }
    public function update_contract(){
        if (isset($_POST['update_data'])) {

            $template_id=$_POST['update_template_id'];
            $id=$_POST['update_contract_id'];
            $email=$_POST['update_email'];
            $phone=$_POST['update_phone'];
            $location=$_POST['update_location'];
            $status=$_POST['update_status'];

          
            $this->db->query("UPDATE `contracts` SET `template_id`='$template_id',`email_address`='$email',`phone_number`='$phone',`location`='$location',`status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }
    

}



