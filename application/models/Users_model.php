<?php  
    class Users_model extends CI_Model{
        public function register($enc_password){
            //user data
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'zipcode' => $this->input->post('zipcode')
            );

            //insert user
            return $this->db->insert('users', $data);
        }

        // check username exists
        public function check_username_exists($username){
            $query = $this->db->get_where('users', array(
                'username' => $username
            ));
            if(!($query->row_array() )){
                return true;
            } else{
                return false;
            }
        }

         // check email exists
        public function check_email_exists($email){
            $query = $this->db->get_where('users', array(
                'email' => $email
            ));
            if(!($query->row_array() )){
                return true;
            } else{
                return false;
            }
        }
    }