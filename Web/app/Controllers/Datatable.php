<?php

namespace App\Controllers;

class Datatable extends BaseController
{
    public $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function dt_project(){
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];
        $search_value = $_REQUEST['search']['value'];

        if(!empty($search_value)){
            $total_count = $this->db->query("SELECT * from project WHERE id like '%".$search_value."%' OR project_name like '%".$search_value."%")->getResult();

            $data = $this->db->query("SELECT * from project WHERE id like '%".$search_value."%' OR project_name like '%".$search_value."%' limit $start, $length")->getResult();
        }else{
            $total_count = $this->db->query("SELECT * from project")->getResult();
            $data = $this->db->query("SELECT * from project limit $start, $length")->getResult();
        }
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $data 
        );
        echo json_encode($json_data);
    }
    
}