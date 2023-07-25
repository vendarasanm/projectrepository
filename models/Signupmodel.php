<?php
class Signupmodel extends CI_Model
{
    public function insertsignup($email, $password)
    {
        $data = [
            'email' => $email,
            'password' => $password,
        ];
        return $this->db->insert('login', $data);
    }
}
?>
