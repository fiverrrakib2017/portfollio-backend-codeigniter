<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class testimonialController extends CI_Controller{
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
        $sql = "SELECT * FROM testimonial";
        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Testimonial', $data);
    }
    public function add_testimonial(){
        if (isset($_POST['add_data'])) {

            $name=$_POST['name'];
            $designation=$_POST['designation'];
            $mouth_word=$_POST['mouth_word'];
            $status=$_POST['status'];



            /* GET THE FILE NAME AND SIZE */
            $file_name= $_FILES['file']['name'];
            $file_size= $_FILES['file']['size'];

            /* GET The file name path extension*/
            $extension=pathinfo($file_name,PATHINFO_EXTENSION);

            /* SET The file Valid extension*/
            $valid_extension=array("jpg","jped","gif","png");

            /* SET The file Size*/
            $maxSize=2*1024*1024;
            /* Check The file Size*/
            if($file_size >$maxSize){
                echo 2;
                exit;
            }else{
                 if (in_array($extension,$valid_extension)) {
                    $new_name=rand().".".$extension;
                    $path="image/".$new_name;
                    $result=move_uploaded_file($_FILES['file']['tmp_name'],$path);
                    if ($result) {
                        $data = array(
                            'name' => $name,
                            'mouth_word' => $mouth_word,
                            'designation' => $designation,
                            'image' => $path,
                            'status' => $status,
                        );
                        /* Insert The data blog table Database*/
                        $this->db->insert('testimonial', $data);
                        //insert successfully; 
                        echo 1;
                        exit;
                    } else {
                        //'Error moving the uploaded file.'; 
                        echo 3;
                        exit;
                    }
                }else{
                    // 'Invalid file extension.';
                    echo 0;
                    exit;
                }
            }
         
        }

    }
    public function update_testimonial(){
        if (isset($_POST['update_data'])) {

           $id=$_POST['update_testimonial_id'];
           $name=$_POST['update_name'];
           $designation=$_POST['update_designation'];
           $mouth_word=$_POST['mouth_word'];
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
           
           $this->db->query("UPDATE `testimonial` SET `name`='$name',`mouth_word`='$mouth_word',`designation`='$designation',`image`='$path',`create_date`=NOW(),`status`='$status' WHERE id='$id' "); 
           echo 1;
       }
    }
    public function delete_data(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('testimonial', array('id' => $id));
            echo 1;
        }
    }
    public function get_testimonial(){
        if (isset($_GET['get_testimonial_data'])) {
            $id=$_GET['id'];
            $query =$this->db->query("SELECT * FROM testimonial WHERE id='$id'");
           echo json_encode($query->result());
        } 
    }
    

}