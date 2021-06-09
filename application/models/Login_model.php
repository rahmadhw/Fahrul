<?php 

class Login_model extends CI_Model{
    public function login()
    {
        $username = $this->input->post('USERNAME');
        $password = $this->input->post('PASSWORD');

     
        $query = $this->db->where('USERNAME', $username)
                         ->where('PASSWORD', $password)
                         ->get('admin');

        if ($query->num_rows() > 0 ) {
            $data = [
                'USERNAME' => $username,
                'logged_in' => TRUE
            ];
            
            $this->session->set_userdata($data);
            return TRUE;
        }else {
            echo "<script>alert('gagal login')</script>";
            redirect('login');
            
        }

    }
}


?>