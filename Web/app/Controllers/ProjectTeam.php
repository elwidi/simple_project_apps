<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class ProjectTeam extends BaseController
{
    public function __construct(){
        $this->project_team = model('App\Models\ProjectTeamModel', false);
    }

    public function projectTeamList($projectId){
        $data['project_id'] = $projectId;
        $data['js'] = ['datatable' => 'datatable'];
        return view('project/project_team_list', $data);
    }

    
}