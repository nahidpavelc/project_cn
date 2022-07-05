<?php

//first rename this file as "Users.php" and put it on controllers directory
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * users controller
 */
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('prime_model');
    }

    /**
     * index method for get all data from DB
     */
    public function index() {
        $data['title'] = 'Fetch Database Info';
        $data['users'] = $this->prime_model->get_data('users');
        $this->load->view('users', $data);
    }

    /**
     * method to create new user
     */
    public function create() {
        $data = array(
            'title' => 'Create a User',
            'action' => site_url('users/create'),
            'button' => 'Create'
        );
        if ($this->input->post('submit')) {
            $username = $this->input->post('username', TRUE);
            $email = $this->input->post('email', TRUE);
            $about = $this->input->post('about', TRUE);
            $user = array(
                'username' => $username,
                'email' => $email,
                'about' => $about
            );
            $this->db->insert('users', $user);
            redirect('users');
        }
        $this->load->view('create', $data);
    }

    /**
     * method to edit a user
     * @param int $id
     */
    public function edit($id = FALSE) {
        if ($id != '') {
            $user_id = (int) $id;
            $data = array(
                'title' => 'Edit a User',
                'action' => site_url('users/edit'),
                'users' => $this->prime_model->get_data('users', 'id', $user_id),
                'button' => 'Update'
            );
            if (count($data['users']) < 1) {
                redirect('users');
            }
        }

        if ($this->input->post('submit')) {
            $user_id = (int) $this->input->post('id');
            $username = $this->input->post('username', TRUE);
            $email = $this->input->post('email', TRUE);
            $about = $this->input->post('about', TRUE);

            $user = array(
                'username' => $username,
                'email' => $email,
                'about' => $about
            );
            $this->db->where('id', $user_id)->update('users', $user);
            redirect('users');
        }
        $this->load->view('create', $data);
    }
    
    public function delete_user($id){
        if($id != ''){
            $this->db->where('id',(int)$id)->delete('users');
            redirect('users');
        }
    }

}
