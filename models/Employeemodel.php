<?php
class Employeemodel extends CI_Model
{
    public function getemployee()
    {
        $query = $this->db->get('dbtable');
        return $query->result();
    }

    public function editemployee($id)
    {
        $query = $this->db->get_where('dbtable', ['id' => $id]);
        return $query->row();
    }

    public function insertemployee($data)
    {
        return $this->db->insert('dbtable', $data);
    }
    
    public function updateemployee($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('dbtable', $data);
    }

    public function deleteemployee($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('dbtable');
    }
}
?>
