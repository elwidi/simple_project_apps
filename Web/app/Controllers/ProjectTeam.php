<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class ProjectTeam extends BaseController
{
    public function __construct(){
        $this->project_team = model('App\Models\ProjectTeamModel', false);
        $this->people = model('App\Models\PeopleModel', false);
        $this->role = model('App\Models\RoleModel', false);
    }

    public function projectTeamList($projectId){
        $data['project_id'] = $projectId;
        $data['js'] = ['datatable' => 'datatable'];
        return view('project/project_team_list', $data);
    }

    public function projectTeamCreate($projectId){
        $data['project_id'] = $projectId;
        $data['people'] = $this->people->findAll();
        $data['roles'] = $this->role->findAll();
        return view('project/project_team_create', $data);
    }

    public function projectTeamUpdate($projectTeamId){
        $data['project_team_id'] = $projectTeamId;
        $data['people'] = $this->people->findAll();
        $data['roles'] = $this->role->findAll();
        $data['project_team'] = $this->project_team->find($projectTeamId);
        return view('project/project_team_update', $data);
    }

    public function projectTeamStore(){
        $id = $this->request->getPost('project_team_id');
        $data = [
            'project_id' => $this->request->getPost('project_id'),
            'person_id' => $this->request->getPost('person_id'),
            'role_id' => $this->request->getPost('role'),
            'project_join_date' => date('Y-m-d', strtotime($this->request->getPost('project_join_date'))),
        ];

        if(empty($id)){
            if($this->project_team->insert($data)){
                return redirect()->to('/project/team/'.$data['project_id']); 
            }
        } else {
            unset($data['project_id']);
            if($this->project_team->update($id, $data)){
                return redirect()->to('/project/team/update/'.$id); 
            }
        }
        
    }
}