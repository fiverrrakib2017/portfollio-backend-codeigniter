
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_commentController extends CI_Controller{
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
        $sql = "SELECT pc.id,  pc.first_name, bp.title, pc.message, pc.email_address
        FROM post_comment pc
        JOIN blog_post bp ON pc.post_id = bp.id where pc.status=0";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/blog_comment', $data);
    }
    public function approve_comment(){
        if (isset($_POST['approve_data'])) {
            $id= $_POST['id'];
            $sql="UPDATE post_comment SET status=1 WHERE id='$id'";
            $this->db->query($sql);
            echo 1;
        }
    }

}



