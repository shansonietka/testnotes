<?php



defined('BASEPATH') OR exit('No direct script access allowed');
class Checklist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('checklist');
    }


    public function index()
    {   //$this->load->helper('form');
        $this->load->model('Checklist_model');
        $this->load->view('templates/header');
        $data['checklist_array'] = $this->Checklist_model->index();


        $this->load->view('checklist/index', $data);

        $this->load->helper('form');




    }
    public function create()
    {   //$this->load->helper('form');
       // $this->load->model('checklist');
        $this->load->view('templates/header');
        $this->load->view('checklist/create');
        $this->load->model('Checklist_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // If you have post data...
        if (!empty($_POST)) {
            $checklist_name = $this->input->post('checklist_name');


           // $step = $this->input->post('step0');

            // Checking if everything is there
            if ($checklist_name) //&& $step) {
                // Loading model
                $this->load->model('Checklist_model');
                $data = array(
                    'checklist_name' => $checklist_name,
                   // 'step' => $step,

                );

                // Calling model

               $this->Checklist_model->create($data);

                // You can do something else here
            }

        // Loading view
       // $this->load->view('checklist/index');


    }
    public function view()
    {   //$this->load->helper('form');
        // $this->load->model('checklist');
        $this->load->view('templates/header');
        $this->load->view('checklist/view');
        $this->load->model('Checklist_model');

        $this->load->helper('form');
        $this->load->library('form_validation');


    }


    public function edit()
    {   //$this->load->helper('form');
        // $this->load->model('checklist');
        $this->load->view('templates/header');
        $this->load->view('checklist/view');
        $this->load->model('Checklist_model');

        $this->load->helper('form');
        $this->load->library('form_validation');


    }

    public function delete()
    {   $this->load->helper('form');

        $this->load->view('templates/header');

        $this->load->model('Checklist_model');

        $this->load->library('form_validation');
        if (!empty($_POST)) {
          $id = $this->input->post('id');
            if ($id)  {
                $this->load->model('Checklist_model');
            }

            $this->Checklist_model->delete($id);


        }
        $this->load->view('checklist/deleted');

    }


        }