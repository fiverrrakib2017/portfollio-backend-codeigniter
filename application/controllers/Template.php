<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller{
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
        $query = $this->db->query('SELECT * FROM template');
        $data['template_data'] = $query->result();
        $this->load->view('admin/pages/Template', $data);
    }
    public function get_template(){
        if (isset($_GET['get_template'])) {
            $query =$this->db->query('SELECT * FROM template');
           echo json_encode($query->result());
        }else if(isset($_GET['template_id'])){
            $ID=$_GET['template_id'];
            $query =$this->db->query("SELECT * FROM template where id='$ID' ");
            echo json_encode($query->result());
        }
        
    }
    public function add_template(){
        if (isset($_POST['add_template_data'])) {

            $template_name=$_POST['template_name'];
            $template_status=$_POST['template_status'];
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
                            'template_name' => $template_name,
                            'template_image' => $path,
                            'status' => $template_status
                        );
                        /* Insert The data students Database*/
                        $this->db->insert('template', $data);
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
    public function approve(){
        if (isset($_POST['approve_template'])) {
            $template_id = $_POST['id'];
            
            // Set all statuses to 0
            $this->db->set('status', 0);
            $this->db->update('template');
            
            // Set the selected id's status to 1
            $this->db->set('status', 1);
            $this->db->where('id', $template_id);
            $this->db->update('template');
            
            echo 1;
        }
    }
    


    public function update_template(){
        if (isset($_POST['update_data'])) {
            

            $template_name=$_POST['template_name'];
            $template_status=$_POST['template_status'];
            $update_template_id=$_POST['update_template_id'];

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
            $this->db->query("UPDATE `template` SET `template_name`='$template_name',`template_image`='$path',`status`='$template_status' WHERE id=$update_template_id"); 
            echo 1;
        }
    }




}


?>