<?php
    class Users extends CI_Controller{
        // Register User
        public function register(){
            $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            } else {
                //Encrypt Password
                $enc_password = md5($this->input->post('password'));

                $this->users_model->register($enc_password);

                //set msg
                $this->session->set_flashdata('user_registered', 'You are now registered');

                redirect('posts');
            }
            
        }

        // Login User
         public function login(){
            $data['title'] = 'Sign In';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the pwd
                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->users_model->login($username, $password);
                if($user_id){
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    //set msg
                $this->session->set_flashdata('user_loggedin', 'You are now login');

                redirect('posts');
                } else {
                    //set msg
                $this->session->set_flashdata('login_failed', 'Login Fail Chek Your Username and Password!!!');

                redirect('users/login');

                }

            }
            
        }

        // Logout user
        public function logout(){
            // unser user_data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            //set msg
            $this->session->set_flashdata('user_loggedout', 'You are now logout');

            redirect('users/login');
        }

        //check if username exists
        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 
            'That username is taken. Please choose a different one');
            if($this->users_model->check_username_exists($username)){
                return true;
            }
                return false;
        }

        
        //check if email exists
        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 
            'That email is taken. Please choose a different one');
            if($this->users_model->check_email_exists($email)){
                return true;
            }
                return false;
        }

    }