<?php



defined('BASEPATH') OR exit('No direct script access allowed');
class Statistic_model extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ChecklistModel');
    }


    public function index()
    {   //$this->load->helper('form');

        $this->load->view('statistic/index');
        $this->load->helper('form');
        $this->load->library('form_validation');


    }

        }