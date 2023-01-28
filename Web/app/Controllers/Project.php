<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Project extends BaseController
{
    public function __construct(){
        $this->projectModel = model('App\Models\ProjectModel', false);
    }

    public function projectList(){
        $data['js'] = ['datatable' => 'datatable'];

        return view('project/project_list', $data);
    }

    public function projectCreate(){
        return view('project/project_create');
    }

    public function projectUpdate($projectId){
        $data['project'] = $this->projectModel->find($projectId);
        return view('project/project_update', $data);
    }

    public function projectDetail($projectId){
        $data['project'] = $this->projectModel->find($projectId);
        return view('project/project_detail', $data);
    }

    public function projectStore(){
        $id = $this->request->getPost('id');

        $data = [
            'project_name' => $this->request->getPost('project_name'),
            'description' => $this->request->getPost('description'),
            'start_date' => date('Y-m-d', strtotime($this->request->getPost('start_date'))),
            'end_date' => date('Y-m-d', strtotime($this->request->getPost('end_date')))
        ];

        if(!empty($id)){
            if($this->projectModel->update($id, $data)){
                return redirect()->to('/project/detail/'.$id); 
            }
        } else {
            if($this->projectModel->insert($data)){
                $insertId = $this->projectModel->getInsertID();
                return redirect()->to('/project/detail/'.$insertId); 
            }
        }

    }
}