<?php
class Loginmodel extends CI_Model
{
    public function setlogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('login');

        if ($query->num_rows()>0) 
        {
            return true;
        }

        return false;
    }
}
?>
