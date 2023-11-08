<?php
class User_model extends CI_Model
{
    public function check_login($email, $password)
    {
        $this->db->where('email', $email);
        $user = $this->db->get('user')->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_user($id)
    {
        $this->db->where('id', $id);
        $data =  $this->db->get('user')->row_array();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
