
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class workController extends CI_Controller{
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

        $sql = "SELECT works.id, template.template_name, category.name, works.title, works.image, works.link, works.link_type,works.status
        FROM works 
        JOIN template  ON works.template_id = template.id
        JOIN category  ON works.category_id = category.id";

        $query = $this->db->query($sql);
        $data['data'] = $query->result(); // Fetch the result
        $this->load->view('admin/pages/Work', $data);
    }
    public function add_work(){
        if (isset($_POST['add_data'])) {

            $template_id=$_POST['template_id'];
            $category_id=$_POST['category_id'];
            $title=$_POST['title'];
            $link=$_POST['link'];
            $link_type=$_POST['link_type'];
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
                            'template_id' => $template_id,
                            'category_id' => $category_id,
                            'title' => $title,
                            'image' => $path,
                            'link' => $link,
                            'link_type' => $link_type,
                            'status' => $status,
                        );
                        /* Insert The data blog table Database*/
                        $this->db->insert('works', $data);
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
    public function delete_work(){
        if (isset($_POST['delete_data'])) {
            $id= $_POST['id'];
            $this->db->delete('works', array('id' => $id));
            echo 1;
        } 
    }
    public function get_work(){
            if (isset($_GET['get_work_data'])) {
                $id=$_GET['id'];
                $query =$this->db->query("SELECT * FROM works WHERE id='$id'");
               echo json_encode($query->result());
            } 
    }
    public function update_work(){
        if (isset($_POST['update_data'])) {

            $id=$_POST['update_work_id'];
            $template_id=$_POST['update_template_id'];
            $category_id=$_POST['update_category_id'];
            $title=$_POST['update_title'];
            $link=$_POST['update_link'];
            $link_type=$_POST['update_link_type'];
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
            
            $this->db->query("UPDATE `works` SET `template_id`='$template_id',`category_id`='$category_id',`title`='$title' ,`image`='$path', `link`='$link', `link_type`='$link_type', `status`='$status' WHERE id='$id' "); 
            echo 1;
        }
    }

}