<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {

        if ($this->session->userdata('name') != "") {
            //    $this->session->sess_destroy();
             $query = $this->Md->query("SELECT * FROM about order by id DESC limit 1");
            if ($query) {

                $data['h'] = $query;
            } else {
                $data['h'] = array();
            }
            $query = $this->Md->query("SELECT * FROM social");
            if ($query) {

                $data['s'] = $query;
            } else {
                $data['s'] = array();
            }
            $query = $this->Md->query("SELECT * FROM info");
            if ($query) {

                $data['i'] = $query;
            } else {
                $data['i'] = array();
            }
            $query = $this->Md->query("SELECT * FROM background order by id DESC limit 1");
            if ($query) {

                $data['b'] = $query;
            } else {
                $data['b'] = array();
            }
            $query = $this->Md->query("SELECT * FROM photo order by id DESC limit 1");
            if ($query) {

                $data['p'] = $query;
            } else {
                $data['p'] = array();
            }
            $query = $this->Md->query("SELECT * FROM services");
            if ($query) {

                $data['v'] = $query;
            } else {
                $data['v'] = array();
            }
            $query = $this->Md->query("SELECT * FROM client");
            if ($query) {

                $data['c'] = $query;
            } else {
                $data['c'] = array();
            }
            $query = $this->Md->query("SELECT * FROM education");
            if ($query) {

                $data['ed'] = $query;
            } else {
                $data['ed'] = array();
            }
            $query = $this->Md->query("SELECT * FROM experience");
            if ($query) {

                $data['ex'] = $query;
            } else {
                $data['ex'] = array();
            }
            $query = $this->Md->query("SELECT * FROM skills");
            if ($query) {

                $data['sk'] = $query;
            } else {
                $data['sk'] = array();
            }
            $query = $this->Md->query("SELECT * FROM works");
            if ($query) {

                $data['w'] = $query;
            } else {
                $data['w'] = array();
            }
            $query = $this->Md->query("SELECT * FROM contact ORDER BY id DESC limit 1");
            if ($query) {
                $data['t'] = $query;
            } else {
                $data['t'] = array();
            }
            $query = $this->Md->query("SELECT * FROM cv order by id DESC limit 1");
            if ($query) {
                $data['cv'] = $query;
            } else {
                $data['cv'] = array();
            }

            $this->load->view('index-manage', $data);
        } else {
            redirect('home', 'refresh');
        }
    }

    public function delete() {

        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $table = $this->uri->segment(4);
        $query = $this->Md->cascade($id, $table, 'id');
        redirect('manage', 'refresh');
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        // echo $_POST;
        if (!empty($_POST)) {

            foreach ($_POST as $field_name => $val) {
                //clean post values
                $field_id = strip_tags(trim($field_name));
                $val = strip_tags(trim($val));
                //from the fieldname:user_id we need to get user_id
                $split_data = explode(':', $field_id);
                $table = $split_data[0];
                $field = $split_data[1];
                $id = $split_data[2];
                if (!empty($table) && !empty($field) && !empty($val)) {
                    //update the values
                    $task = array($field => $val, 'created' => date('d-m-Y H:i:s'));
                    // $this->Md->update($user_id, $task, 'tasks');
                    $this->Md->update_dynamic($id, 'id', $table, $task);
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function login() {

        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // echo md5($password) ;        

        if ($email == 'weredouglas@gmail.com' && $password == 'Dughglas1') {

            $newdata = array(
                'name' => 'Douglas',
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('manage', 'refresh');
        } else {
            $this->session->set_flashdata('msg', '<span href="<?php echo base_url(); ?>index.php/home/registration" class="btn btn-error"> ! HACKER HACKER !!!!!!!!!</span>');
            redirect('home', 'refresh');
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }

}

?>