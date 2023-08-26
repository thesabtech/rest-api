<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentLaw extends Model
{
    use HasFactory;
    protected $table = 'department_law';
    protected $primaryKey = 'catid';
}
