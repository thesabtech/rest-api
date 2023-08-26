<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'category_detail';
    protected $primaryKey = 'catid';
}
