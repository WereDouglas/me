<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
       // $this->load->library('session');
       // $this->load->library('encrypt');
    }

    public function index() {


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

        $this->load->view('index', $data);
    }

    public function mail() {
        $this->load->helper(array('form', 'url'));

        //info@aamedsupplies.com

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $body = $this->input->post('body');


        $subject = "Online Inquiry";
        $from_email = $email;
        //Load email library 
        $this->load->library('email');

        $this->email->from($from_email, 'Your Name');
        //$this->email->to('info@aamedsupplies.com');
        $this->email->to('weredouglas@gmail.com');
        $this->email->subject($subject);
        $this->email->message($body);

        //Send mail 
        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent", "Error in sending Email.");
        //$this->load->view('email_form'); 

        redirect('/home', 'refresh');
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

}

?>