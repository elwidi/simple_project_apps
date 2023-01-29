<?php
namespace App\Models;

use CodeIgniter\Model;

class ProjectTeamModel extends Model{
    protected $table = 'project_team';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'project_id',
        'person_id',
        'project_join_date',
        'role_id',
        'created_date',
        'created_by',
        'updated_date',
        'updated_by'
    ];
}
