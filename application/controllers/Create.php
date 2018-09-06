<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function social() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('link') != "") {


            $i = array('class' => $this->input->post('class'), 'link' => $this->input->post('link'));
            $this->Md->save($i, 'social');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

            redirect('/manage', 'refresh');
        }
    }

    public function about() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('name') != "") {

            $i = array('content' => $this->input->post('content'), 'address' => $this->input->post('address'), 'details' => $this->input->post('details'), 'name' => $this->input->post('name'), 'title' => $this->input->post('title'));
            $this->Md->save($i, 'about');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

            redirect('/manage', 'refresh');
        }
    }

    public function info() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $i = array('title' => $this->input->post('title'), 'value' => $this->input->post('value'));
            $this->Md->save($i, 'info');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
            redirect('/manage', 'refresh');
        }
    }

    public function services() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $i = array('title' => $this->input->post('title'), 'class' => $this->input->post('class'), 'content' => $this->input->post('content'));
            $this->Md->save($i, 'services');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
            redirect('/manage', 'refresh');
        }
    }

    public function education() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('name') != "") {

            $i = array('period' => $this->input->post('period'), 'name' => $this->input->post('name'), 'details' => $this->input->post('details'), 'order' => $this->input->post('order'), 'school' => $this->input->post('school'));
            $this->Md->save($i, 'education');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
            redirect('/manage', 'refresh');
        }
    }

    public function contact() {

        $this->load->helper(array('form', 'url'));

        $i = array('address' => $this->input->post('address'), 'email' => $this->input->post('email'), 'contact' => $this->input->post('contact'), 'status' => $this->input->post('status'));
        $this->Md->save($i, 'contact');
        $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
        redirect('/manage', 'refresh');
    }

    public function experience() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $i = array('period' => $this->input->post('period'), 'title' => $this->input->post('title'), 'details' => $this->input->post('details'), 'order' => $this->input->post('order'), 'status' => $this->input->post('status'), 'company' => $this->input->post('company'));
            $this->Md->save($i, 'experience');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
            redirect('/manage', 'refresh');
        }
         
    }

    public function skills() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $i = array('title' => $this->input->post('title'), 'level' => $this->input->post('level'));
            $this->Md->save($i, 'skills');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');
            redirect('/manage', 'refresh');
        }
    }

    public function client() {

        $this->load->helper(array('form', 'url'));
      

            $id = $this->GUID();
            $file_element_name = 'userfile';
            $new_name = $id;
            $config['file_name'] = $id;
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;
            // $config['allowed_types'] = 'jpg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
                $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
            }
            $data = $this->upload->data();
            $userfile = $data['file_name'];
            $path = 'uploads/' . $userfile;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);

            $i = array('link' => $this->input->post('link'), 'image' => $userfile);
            $this->Md->save($i, 'client');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

            redirect('/manage', 'refresh');
       
    }

    public function background() {

        $this->load->helper(array('form', 'url'));

        $id = $this->GUID();
        $file_element_name = 'userfile';
        $new_name = $id;
        $config['file_name'] = $id;
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        // $config['allowed_types'] = 'jpg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
            $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
        }
        $data = $this->upload->data();
        $userfile = $data['file_name'];
        $path = 'uploads/' . $userfile;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $i = array('image' => $userfile);
        $this->Md->save($i, 'background');
        $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

        redirect('/manage', 'refresh');
    }

    public function photo() {

        $this->load->helper(array('form', 'url'));

        $id = $this->GUID();
        $file_element_name = 'userfile';
        $new_name = $id;
        $config['file_name'] = $id;
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        // $config['allowed_types'] = 'jpg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
            $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
        }
        $data = $this->upload->data();
        $userfile = $data['file_name'];
        $path = 'uploads/' . $userfile;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $i = array('image' => $userfile);
        $this->Md->save($i, 'photo');
        $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

        redirect('/manage', 'refresh');
    }

    public function cv() {

        $this->load->helper(array('form', 'url'));

        $id = $this->GUID();
        $file_element_name = 'userfile';
        $new_name = $id;
        $config['file_name'] = $id;
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        // $config['allowed_types'] = 'jpg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
            $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
        }
        $data = $this->upload->data();
        $userfile = $data['file_name'];
        $path = 'uploads/' . $userfile;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $i = array('file' => $userfile);
        $this->Md->save($i, 'cv');
        $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

        redirect('/manage', 'refresh');
    }

    public function works() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $id = $this->GUID();
            $file_element_name = 'userfile';
            $new_name = $id;
            $config['file_name'] = $id;
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;
            // $config['allowed_types'] = 'jpg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name)) {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
                $this->session->set_flashdata('msg', '<div class="alert alert-error"> <strong>' . $msg . '</strong></div>');
            }
            $data = $this->upload->data();
            $userfile = $data['file_name'];
            $path = 'uploads/' . $userfile;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);

            $i = array('link' => $this->input->post('link'), 'title' => $this->input->post('title'), 'category' => $this->input->post('category'), 'details' => $this->input->post('details'), 'image' => $userfile);
            $this->Md->save($i, 'works');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

            redirect('/manage', 'refresh');
        }
    }

    public function requires() {

        $this->load->helper(array('form', 'url'));
        if ($this->input->post('title') != "") {

            $id = $this->GUID();

            $i = array('title' => $this->input->post('title'), 'created' => date('d-m-Y H:i:s'));
            $this->Md->save($i, 'requires');
            $this->session->set_flashdata('msg', '<div class="alert alert-success">  <strong>Information saved</strong></div>');

            redirect('/manage', 'refresh');
        }
    }

}

?>