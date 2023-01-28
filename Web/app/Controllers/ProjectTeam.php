<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class ProjectTeam extends BaseController
{
    public function __construct(){
        $this->project_team = model('App\Models\ProjectTeamModel', false);
        $this->people = model('App\Models\PeopleModel', false);
    }

    public function projectTeamList($projectId){
        $data['project_id'] = $projectId;
        $data['js'] = ['datatable' => 'datatable'];
        return view('project/project_team_list', $data);
    }

    public function projectTeamCreate($projectId){
        $data['project_id'] = $projectId;
        $data['people'] = $this->people->findAll();
        return view('project/project_team_create', $data);
    }

    public function projectTeamStore(){
        // $id = $this->request->getPost('id');
        $data = [
            'project_id' => $this->request->getPost('project_id'),
            'person_id' => $this->request->getPost('person_id'),
            'role' => $this->request->getPost('role'),
            'project_join_date' => date('Y-m-d', strtotime($this->request->getPost('project_join_date'))),
        ];

        if($this->project_team->insert($data)){
            // $insertId = $this->project_team->getInsertID();
            return redirect()->to('/project/team/'.$data['project_id']); 
        }
    }
}