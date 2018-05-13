<?php



defined('BASEPATH') OR exit('No direct script access allowed');
class Statistic extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ChecklistModel');
    }


    public function index()
    {   //$this->load->helper('form');
        $this->load->model('statistic');
        $this->load->view('statisticmodel/index');

        $this->load->helper('form');
        $this->load->library('form_validation');


    }




        }