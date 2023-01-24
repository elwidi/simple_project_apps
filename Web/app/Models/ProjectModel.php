<?php
namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model{
    protected $table = 'project';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'project_name',
        'start_date',
        'end_date',
        'description',
        'created_date',
        'created_by',
        'updated_date',
        'updated_by'
    ];
}
