<?php
namespace App\Models;

use CodeIgniter\Model;

class PeopleModel extends Model{
    protected $table = 'people';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'email',
        'phone_number',
        'join_date',
        'created_date',
        'created_by',
        'updated_date',
        'updated_by'
    ];
}
