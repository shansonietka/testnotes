<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checklist_model extends CI_Model
{

    public function __construct()
    {  parent::__construct();

     //   $this->load->database();
    }

    public function index()
    {

        $this->load->database();
        $query = $this->db->query('SELECT * FROM `checklist`');
        $query->result_array();
        return $query->result_array();


    }


    public function create($data)
    {

        $this->load->database();
        //$query = $this->db->query('SELECT * FROM `checklist`');
        $this->db->insert('checklist', $data);
       // $query = $this->db->query('INSERT INTO `checklist` (`checklist_name`) VALUES (`$data['checklist_name']`)');


    }


    public function view()
    {

        echo "model";
    }


    public function delete($id)
    {
        $this->load->database();
        $this->db->delete('checklist', $id);
        $query = $this->db->query("DELETE  FROM `checklist`  WHERE  `id` = '$id'");
        // var_dump($query);


    }
}