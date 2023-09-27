<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_credentials($username, $password) {
        // Query the database to check if the username and password match
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return $query->row_array(); 
        } else {
            return false; 
        }
    }
}
?>
