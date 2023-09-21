<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class profileController extends CI_Controller{
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
        $sql = "SELECT * FROM `profile` LIMIT 1 ";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Profile', $data);
       
    }
    public function get_home(){
        if (isset($_GET['get_home_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM home WHERE id='$id'");
           echo json_encode($query->result());
        }
    }


    public function update_profile(){
        if (isset($_POST['update_data'])) {
            $id=$_POST['update_id'];
            $name=$_POST['update_name'];
            $status=$_POST['update_status'];

            if (isset($_FILES['update_image'])) {
                /* GET THE FILE NAME AND SIZE */
                $file_name= $_FILES['update_image']['name'];
                $file_size= $_FILES['update_image']['size'];

                /* GET The file name path extension*/
                $extension=pathinfo($file_name,PATHINFO_EXTENSION);

                /* SET The file Valid extension*/
                $valid_extension=array("jpg","jped","gif","png");

                /* SET The file Size*/
                $maxSize=2*1024*1024;
                /* Check The file Size*/
                if($file_size >$maxSize){
                    echo 2;
                }else{
                    if (in_array($extension,$valid_extension)) {
                        $new_name=rand().".".$extension;
                        $path="image/".$new_name;
                        move_uploaded_file($_FILES['update_image']['tmp_name'],$path);

                        // Delete the old image file if it exists
                        if (file_exists($_POST['old_image'])) {
                            unlink('./'.$_POST['old_image']);
                        } 

                    }else{
                        // 'Invalid file extension.';
                        echo 0;
                    }
                }
            }else{
                $path= $_POST['old_image'];
            }
            $this->db->query("UPDATE `profile` SET `name`='$name',`image`='$path',`status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }




}


?>