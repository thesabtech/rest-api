<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLaw extends BaseModel
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'category_law';
    protected $primaryKey = 'catid';
}
